<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function confirm()
    {
        return view('back.confirmAdmin');
    }
    public function block()
    {
        return view('back.blockAdmin');
    }
}
