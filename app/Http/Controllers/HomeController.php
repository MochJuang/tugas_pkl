<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front/index');
    }
    public function detail($id)
    {
        return view('front/detail');
    }
    public function daftar($id)
    {
        return view('front/daftar');
    }
    public function register($id)
    {
        return view('front/register');
    }
    public function success($id)
    {
        return view('front/success');
    }
}
