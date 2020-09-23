<?php

namespace App\Http\Controllers\Fun;

use \App\Tempat;
use Illuminate\Support\Facades\DB;

class Client
{
    public static function GetTempats()
    {
        return DB::table('tempats')->select('tempats.id', 'nama_tempat','alamat','foto', 'fasilitas', 'email', 'is_block')
        		->join('fasilitas_masters','tempats.id_fasilitas','=','fasilitas_masters.id','inner')
        		->where(['is_konfirmasi' => 1, 'is_block' => 0])->orderBy('click','desc')->limit(3)->get();
    }
    public static function GetTempatItem($id)
    {
        return DB::table('tempats')
                    ->select('tempats.id','tempats.id_fasilitas', 'nama_tempat', 'fasilitas', 'email', 'is_block','deskripsi','username','click','no_telp','no_rek','jum_negatif','alamat','foto','jadwal_buka')
                    ->join('fasilitas_masters','tempats.id_fasilitas','=','fasilitas_masters.id','inner')
                    ->join('users','tempats.id_user','=','users.id','inner')
                    ->where(['tempats.id' => $id])->first();
    }
}
