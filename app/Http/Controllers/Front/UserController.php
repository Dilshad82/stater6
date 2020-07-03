<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserName(){

        return 'Dilshad Abdulazime' ;
    }

    public function getindex(){

        // $date = [] ;
        // $date['id'] = 10 ;
        // $date['name'] = 'dilshad abdulazim' ;
        // return view('welcom2' , $date);

        // $obj = new \stdClass();
        // $obj->id = 11 ;
        // // $obj->name = 'mostafa dilshad ' ;
        // return view('welcom2' , compact('obj'));
         
        // return view('welcom2')->with('name' , 'naz dilshad');
        // $datas = ['mostafa' , 'naz'];
        $datas = [];
        return view('welcom2' , compact('datas'));
    }
}
