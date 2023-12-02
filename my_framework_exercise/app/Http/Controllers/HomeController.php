<?php
namespace App\Http\Controllers;

//1 use App\Http\Response;

class HomeController
{
    public function index()
    {
        //1 return new Response('home');
        return view('home');//2
        //return 'home'; to see error
    }
}