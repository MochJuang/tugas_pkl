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
    public static function confirm($id)
    {
        return (Tempat::find($id)->first()->update(['is_konfirmasi' => 1])) ? true : false;
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
