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
            if($data['posisi'] == 'superadmin'){
                $request->session()->put('otority', md5('otoritas'));
                $request->session()->put($data);
                return redirect('admin');
            }else{
                if ($data['confirm'] == null) {
                    return redirect('auth')->with('message','Maaf Akun Anda Belum Dikonfirmasi');
                }
                else if ($data['block'] == 1) {
                    return redirect('auth')->with('message','Maaf Akun Anda Belum Diblock Karena Keadaan Tertentu');
                }else{
                    $request->session()->put($data);
                    return redirect('admin');
                }
            }
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
        $data = Auth::register_tempat($request,session('user_token'));
        return ($data) ? redirect('/auth/success') : redirect('/back/register');
        // return redirect('/auth/registerTempat/'.$data);
    }
    public function success()
    {
        return view('/back/successRegister');
    }
    public function registerTempat(){
        return view('back.registerTempat');
    }
}
