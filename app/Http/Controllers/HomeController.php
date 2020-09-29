<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\Fun\Client;
use Illuminate\Support\Facades\DB;
use \App\Http\Controllers\Fun\SuperAdmin as SA;
class HomeController extends Controller
{
    public function index()
    {
        return view('front/index',['data' => Client::GetTempats()]);
    }
    public function changeRegister(Request $request,$id)
    {
        // dd($request->foto);
        if($request->has('foto')){
            $name = time().$request->foto->getClientOriginalName();
            $request->foto->storeAs('public',$name);
            // Storage::delete('public/',Tempat::find($id)->first()->foto);
            DB::table('pendaftarans')->where('id',$id)->update(['foto' => $name]);
            echo json_encode($name);
        }else{
            echo false;
        }
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
        $data['nama'] = \App\Tempat::find($id)->first()->nama_tempat;
        $data['id'] = $id;
        $data['jenis'] = SA::GetJenis($id);
        $data['metode'] = \App\Metode::all();
        // dd($data);
        return view('front/daftar',$data);
    }
    public function daftarAct(Request $request,$id)
    {
        $result = Client::daftar($request,$id);
        if ($result) {
            if ($request->metode == 1) {
                return redirect("register/$result");
            }
            else if ($request->metode == 2) {
                return view('front/success');
            }
        }else{        
            return redirect("/daftar/$id",'refresh')->with('message','Gagal Daftar');
        }
    }
    public function register($id)
    {
        // dd(Client::vertifikasi($id));
        return view('front/register',['data' => Client::vertifikasi($id), 'id' => $id]);
    }
    public function success($id)
    {
        return view('front/success');
    }
    public function cari(Request $request)
    {
        echo json_encode(Client::cari($request->cari));
    }
}
