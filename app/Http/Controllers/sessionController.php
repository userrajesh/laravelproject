<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function login_using_Session(Request $req)
    {
        $loginDetails= $req->input('userid');  
        // $req->session()->flash("userid",$loginDetails);//This is for flash session.
        $req->session()->put("userid",$loginDetails);
        return view("dashboard");
    }
}
