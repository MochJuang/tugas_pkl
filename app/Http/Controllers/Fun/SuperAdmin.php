<?php

namespace App\Http\Controllers\Fun;
use \App\Tempat;
use Illuminate\Support\Facades\DB;
class SuperAdmin
{
    public static function GetTempats($where = 0)
    {
        return DB::table('tempats')->select('tempats.id', 'nama_tempat', 'fasilitas', 'email', 'is_block')->join('fasilitas_masters','tempats.id_fasilitas','=','fasilitas_masters.id','inner')->where(['is_konfirmasi' => $where])->get();
    }
    public static function GetTempatItem($id)
    {
        return DB::table('tempats')
                    ->select('tempats.id','tempats.id_fasilitas', 'nama_tempat', 'fasilitas', 'email', 'is_block','deskripsi','username','click','no_telp','no_rek','jum_negatif','alamat','foto','jadwal_buka')
                    ->join('fasilitas_masters','tempats.id_fasilitas','=','fasilitas_masters.id','inner')
                    ->join('users','tempats.id_user','=','users.id','inner')
                    ->where(['tempats.id' => $id])->first();
    }
    public static function GetJenis($id_tempat)
    {
        return DB::table('jenis')->select('jenis.id', 'is_sedia', 'harga', 'limit', 'jenis')
                    ->join('jenis_masters','jenis.id_jenis','=','jenis_masters.id','inner')
                    ->join('tempats','tempats.id','=','jenis.id_tempat','inner')
                    ->where(['jenis.id_tempat' => $id_tempat, 'is_sedia' => 1])->get();
    }
    public static function confirm($id)
    {
        // dd($id);
        return (DB::table('tempats')->where('id',$id)->update(['is_konfirmasi' => 1])) ? true : false;
        // return dd(Tempat::find($id)->first());
    }
    public static function block($id)
    {
        return (Tempat::find($id)->first()->update(['is_block' => 1])) ? true : false;
    }
    public static function active($id)
    {
        return (Tempat::find($id)->first()->update(['is_block' => 0])) ? true : false;
    }
}
