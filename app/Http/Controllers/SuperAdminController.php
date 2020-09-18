<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\Fun\SuperAdmin as SA;
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
    public function confirmAct(Request $request)
    {
        $data = (SA::confirm($request->id)) ?  "Berhasil Mengkonfirmasi" : "Gagal Mengkonfirmasi";
        return redirect('/admin/confirm')->with('message',$data);;
    }
    public function blockAct(Request $request)
    {
        $data = (SA::block($request->id)) ?  "Berhasil Memblock" : "Gagal Memblock";
        return redirect('/admin/block')->with('message',$data);
    }
    public function activeAct(Request $request)
    {
        $data = (SA::active($request->id)) ?  "Berhasil Mengaktifkan" : "Gagal Mengaktifkan";
        return redirect('/admin/block')->with('message',$data);
    }
}
