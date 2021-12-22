<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function index(){
         return 'hello';
     }

     public function menu(){

        return view('menu');
     }

     public function reservation(){
         return view('reservation');
     }

     public function aboutus(){

         return view('aboutus');
     }

     public function  contactus(){
        return view('contactus');
    }

    public function cart(){
        return view('cart');
    }

    public function admin(Type $var = null)
    {
        return view('admin.home');
    }

    function login(){
        return view('login');
    }

}
