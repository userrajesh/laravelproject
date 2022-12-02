<?php

namespace App\Http\Controllers;
//to connect with database
use App\Models\employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    function get_employee()
    {
        $emp=  employee::All();
        return view('employee',["emp"=>$emp]);
    }
    function edit_employee(){
        echo "Employee edit hoga ";
    }
}
