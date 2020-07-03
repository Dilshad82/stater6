<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{
    //Laravel Controller Middleware شرح وبناء
    public function __construct(){

        $this->middleware('auth')->except('showstring2');
    }
    
    public function showstring(){

        return 'static string ' ;
    }

    public function showstring1(){

        return 'static string 1' ;
    }

    public function showstring2(){

        return 'static string 2' ;
    }

    public function showstring3(){

        return 'static string 3' ;
    }
}
