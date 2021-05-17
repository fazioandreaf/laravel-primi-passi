<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function home(){
        $name = "Guybrush Threepwood";
        $data = [
            [
                'name' => "Nome 1",
                'rating' => 7
            ],
            [
                'name' => "Nome 2",
                'rating' => 5
            ],
            [
                'name' => "Nome 3",
                'rating' => 10
            ]
        ];        return view('pages.home', compact('name', 'data'));    }
    function home2(){
     return view('pages.home2');
    }
}
