<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function register()
    {
        return view('back.registerMember');
    }
    public function daftar()
    {
        return view('back.daftarMember');
    }
    public function test()
    {
        return view('back.testMember');
    }
}
