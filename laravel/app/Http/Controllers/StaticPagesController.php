<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPagesController extends Controller
{
    public function home(){
        return view("home",['name'=> 'zhang']);
    }

    public function about(){
        return view("about");
    }
}
