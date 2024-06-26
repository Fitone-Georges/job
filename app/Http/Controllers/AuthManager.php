<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }
    function welcome()
    {
        return view('welcome');
    }

    function jpr()
    {
        return view('jpr');
    }
    function jsr()
    {
        return view('jsr');
    }
    function registration()
    {
        return view('registration');
    }
    function job()
    {
        return view('job');
    }
    function search()
    {
        return view('search');
    }
    function blog()
    {
        return view('blog');
    }
}
