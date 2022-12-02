<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

//To connect with data base import below
use Illuminate\Support\Facades\DB;

//To use http or third party application data

use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
class usercontroller extends BaseController
{
    public function send_Data(Request $req)
    {
        $req->validate([
            'userid' => 'required|max:10',
            'Password' => 'required|min:5'
        ]);
        return $req->input();
        // To store data in session
    }
    public function set_Data()
    {
    }
    //Directly connecting to Data Base with the help of classes (Not Recommended) 
    public  function db_Connect()
    {
     return DB::select('Select * from students');
    }

    //Accessing data using model 
    public function db_getData_usingModel(){
        return student::all();
        }

    //http request or third party data access 
    public  function get_http_Data(){
    $user =   Http::get("https://reqres.in/api/users?page=2");
    return view("noaccess",['collection'=>$user["data"]]);
    }
       
    //File upload karne ke liye likha gaya function 
    public function upload_file(Request $req){
     return $req->file('filetoupload')->store('ImageFolder');  
    }



    function register(){
        return view('register');
    }
    function welcome(){
        return  "  hi this is welcome page and it is coming by put request";
    }
}   
