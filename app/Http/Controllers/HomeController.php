<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }
}
