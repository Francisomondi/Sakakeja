<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function index(){
       return view('home');
   }
   public function about(){
    return view('pages.about');
}
public function estates(){
    return view('pages.estates');
}
public function testimony(){
    return view('pages.testimony');
}
}
