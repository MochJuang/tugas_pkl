<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('back.indexAdmin');
    }
    public function login(){
        return view('back.login');
    }
    public function register(){
        return view('back.register');
    }
    public function confirmRegister(){
        return view('back.confirmRegister');
    }
}
