<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\Fun\Client;
use \App\Http\Controllers\Fun\SuperAdmin as SA;
class HomeController extends Controller
{
    public function index()
    {
        return view('front/index',['data' => Client::GetTempats()]);
    }
    public function detail($id)
    {
        // dd(SA::GetJenis($id));
        $data = [ 'data' => Client::GetTempatItem($id),'jenis' => SA::GetJenis($id) ];
        // dd($data);
        return view('front/detail', $data);
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
