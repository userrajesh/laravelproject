<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //To get data from table whose name is not as the name of class in Model 
    public $table = "attendence";
    use HasFactory;
}
