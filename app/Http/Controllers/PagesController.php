<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\TemplateEmail;
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
    
}
