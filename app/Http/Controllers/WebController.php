<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
return view('website.index');
    }
    public function about(){
        return view('website.about');
    }
    public function service(){
        return view('website.service');
    }
    public function menu(){
        return view('website.menu');
    }
    public function booking(){
        return view('website.booking');
    }
    public function team(){
        return view('website.team');
    }
    
    public function testimonials(){
        return view('website.testimonials');
    }
    
    public function contact(){
        return view('website.contact');
    }


}
