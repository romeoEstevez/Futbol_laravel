<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index(){
    return view('layouts.template');
  }
    public function header(){
      return view('layouts.header');
    }
    public function head(){
      return view('layouts.head');
    }
    public function footer(){
      return view('layouts.footer');
    }
    public function menu(){
      return view('layouts.menu');
    }
    public function home(){
      return view('home');
    }
    public function home2(){
      return view('home2');
    }
}
