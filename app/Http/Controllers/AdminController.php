<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\Fun\SuperAdmin as SA;
use \App\Http\Controllers\Fun\Auth;
use \App\Http\Controllers\Fun\Admin;
use \App\Http\Controllers\Fun\Client;
use Illuminate\Support\Facades\Storage;
use \App\Tempat;
use \Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function actTest(Request $request)
    {
        $result = Admin::setHasil($request->id, $request->input);
        $message = ($result) ? "Berhasil" : "Gagal";
    return redirect('/admin/test')->with('message',$message);
    }
    public function register()
    {
        // dd(Admin::getPendaftar(session('user_token')));
        $data['data'] = Admin::getPendaftar(session('user_token'));
        return view('back.registerMember',$data);
    }
    public function daftar()
    {
        $date = (!isset($_GET['date'])) ? date('Y-m-d') : $_GET['date'];
        $data['data'] = Admin::daftar_pendaftar(session('user_token'),$date);
        $data['date'] = $date;
        // dd($data);
        return view('back.daftarMember',$data);
    }
    public function test()
    {
        $date = (!isset($_GET['date'])) ? date('Y-m-d') : $_GET['date'];
        $data['data'] = Admin::daftar_test(session('user_token'),$date);
        $data['date'] = $date;
        // dd($data);
        return view('back.testMember',$data);
    }
    public function veritedMember(Request $request)
    {
        foreach ($request->data as $key => $value) {
            Admin::putPendaftaran($value,session('user_token'));
        }
        return redirect('/admin/reg');
    }
    public function registerTempat($id)
    {
        $data['data'] = Client::vertifikasi($id);
        // dd($data);
        return view('back.detailRegisterTempat',$data);
    }
    public function profile()
    {
        $data['id'] = Auth::getIdTempat(session('user_token'));
        $data['data'] = SA::GetTempatItem($data['id']);
        $data['jenis'] = SA::GetJenis($data['id']);
        // dd($data);
        return view('back.profile',$data);
    }
    public function changeFoto(Request $request,$id)
    {
        // dd($request->foto);
        if($request->has('foto')){
            $name = time().$request->foto->getClientOriginalName();
            $request->foto->storeAs('public',$name);
            Storage::delete('public/',Tempat::find($id)->first()->foto);
            DB::table('tempats')->where('id',$id)->update(['foto' => $name]);
            echo json_encode($name);
        }else{
            echo false;
        }
    }
    public function changeUtama()
    {
        $data['id'] = Auth::getIdTempat(session('user_token'));
        $data['data'] = SA::GetTempatItem($data['id']);
        // dd($data);
        return view('back.editProfile',$data);        
    }
    public function actChangeUtama(Request $request)
    {
        $result = Admin::editTempat($request,session('user_token'));            
        if ($result['result']) {
            return redirect('/admin/profile')->with('message',$result['message']);
        }else{
            return redirect()->back()->with('message',$result['message']);
        }
    }   
    public function changeUser(Request $request)
    {
        $result = Admin::editUser($request,session('user_token'));            
        return redirect('admin/profile')->with('message',$result['message']);
    }   
    public function changeDeskripsi()
    {
        $data['id'] = Auth::getIdTempat(session('user_token'));
        $data['data'] = SA::GetTempatItem($data['id']);
        return view('back.editDeskripsi',$data);
    }   
    public function actChangeDeskripsi(Request $request)
    {
        $result = Admin::ediDeskripsi($request,session('user_token'));            
        return redirect('admin/profile')->with('message','Berhasil Mengedit Deskripsi');
    }
    public function editJenis(Request $request)
    {
        return (Admin::editJenis($request,session('user_token'))) ? redirect('admin/profile')->with('message','Berhasil Mengedit Jenis Test') : redirect('admin/profile')->with('message','Gagal Mengedit Jenis Test');
    }

}
