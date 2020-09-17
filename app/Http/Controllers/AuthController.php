<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Fun\Auth;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    // protected $auth = new Auth();

    public function logout()
    {
        session()->forget(['user_token','posisi']);
        return redirect('auth');
    }

    public function index(){
        Auth::hasLogin();
        if (session('posisi') == 'superadmin') {
            return view('back.indexSuperAdmin');
        }else{
            return view('back.indexAdmin');
        }
    }
    public function login(){
        // Auth::createSuperAdmin();
        return view('back.login');
    }
    public function actLogin(Request $request)
    {
        $data = Auth::login($request);
        if($data != false){
            // dd($data);
            $request->session()->put($data);
            return redirect('admin');
        }else{
            return redirect('auth')->with('message','Username atau Password Salah');
        }
    }
    public function register()
    {
        return view('back.register');
    }
    public function actRegister(Request $request)
    {
        $data = Auth::register_user($request);
        $request->session()->put('user_token',$data);
        return redirect('/auth/registerTempat');
    }
    public function actRegisterTempat(Request $request)
    {
        Auth::hasLogin();
        $data = Auth::register_tempat($request,session('user_token'));
        return ($data) ? redirect('/auth/success') : redirect('/back/register');
        // return redirect('/auth/registerTempat/'.$data);
    }
    public function success()
    {
        Auth::hasLogin();
        return view('/back/successRegister');
    }
    public function registerTempat(){
        Auth::hasLogin();
        return view('back.registerTempat');
    }
}
