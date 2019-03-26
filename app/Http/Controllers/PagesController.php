<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  index(){
        $title='welcome to laravel';
        return view ('pages.index')->with('title',$title)  ;
    }
    public function  about(){
        $title='about us';
        return view ('pages.about')->with('title',$title)  ;
    }
    public function  services(){
        
        return view ('pages.services')  ;
    }
    public function  buy(){
        
        return view('pages.buy')  ;
    }
}
