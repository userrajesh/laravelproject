<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customauth extends Controller
{
    //
    public function customLogin()
    {
        return view("auth.newlogin");
    }
    public function customRegistration(){
        return  view("auth.newReg");
        }
}
