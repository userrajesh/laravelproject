<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    //
    public  function getProducts($name)
    {
        $arrProd = [
            "mobile" => "Samsung",
             "Speaker" => "Jbl",
             "Fan"=>"Usha"
        ];
    
    return view("Rajesh.products",["products"=>$arrProd[$name]?? "Product ".$name." does not exist."]);
    }
}
