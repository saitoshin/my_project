<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view("login/index", []);
    }
    public function register(Request $Request)
    {
        return view("login/register", [])
    }
    public function unregister(Request $request)
    {
        return view("login/unregister", [])
    }
}
