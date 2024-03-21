<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        // return view('blog.hello',['name'=>'Yuma']);
        // return view('hello',['name'=>'Yuma']);
        return view('hello')
                        ->with('name','Andi')
                        ->with('occupation','Astronout');
    }
}
