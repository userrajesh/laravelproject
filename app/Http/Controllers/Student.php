<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Routing\Controller as BaseController;

class Student extends BaseController
{
    //
    public function index($category = '')
    {
        // $mobile = [
        //     "samsung" => "Samsung",
        //     "Shoe" => "Sparkey", "Watch" => "Fasttrack",
        //     $Person = ["Rajesh","Vijay","Mohit"]
        // ];

        $category = $category;
        $title  = "This is happy Singh" . $category;
        return view("Rajesh.index", compact('title', 'id'));
    }

    public function getData()
    {
        $arStud = [
            "Name" => "Rajesh",
            "Address" => "Chapariya",
            "Salary" => "200000"
        ];

        // return view ("Rajesh.pooja",compact('arStud'));
        // return view ("Rajesh.pooja")->with('arStud',$arStud);

        // direct method 
        return view("Rajesh.pooja", ['arStud' => $arStud]);
    }

    public function get_Student_Data(){
        
    }
}
