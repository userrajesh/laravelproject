<?php

use App\Http\Controllers\customauth;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\sessionController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{id}', function ($id) {
    $id = $id;
    return view('contact', compact('id'));
});
Route::view("/contact", 'contact');
Route::view("/test", 'contact');
Route::get('/user_home/{id}', [Student::class, 'index']);

Route::get("/pooja", [Student::class, 'getData']);
Route::get("/products/{name}", [Products::class, 'getProducts']);

// Route::post();

Route::post('/logindata', [usercontroller::class, 'send_Data']);
Route::view("/login", 'user');
// Route::view("/login1", 'login1');
Route::view("/noaccess", 'noaccess');
Route::get("/db", [usercontroller::class, 'db_Connect']);
Route::get("/dmodel", [usercontroller::class, 'db_getData_usingModel']);
Route::get("/http", [usercontroller::class, 'get_http_Data']);
Route::post("/dashboard", [sessionController::class, 'login_using_Session']);
Route::get("/logout", function () {
    if (session()->has('userid')) {
        session()->pull('userid', null);
    }
    return redirect("login1");
});
Route::get("/login1", function () {
    if (session()->has('userid')) {
        return view("dashboard");
    }
 
    return view("login1");
    
});

//File Upload
Route::view('/upload','fileupload');
Route::post('/fileupload',[usercontroller::class ,'upload_file']);
Route::get('/employee',[employeecontroller::class,'get_employee']);
Route::get('/editemployee',[employeecontroller::class,'edit_employee']);
Route::get('/newLogin',[customauth::class,'customLogin']);
Route::get('/newRegistration',[customauth::class,'customRegistration']);
