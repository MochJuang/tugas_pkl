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
    public static function cari($key)
    {
        return DB::table('tempats')->select('tempats.id', 'nama_tempat','alamat','foto', 'fasilitas', 'email', 'is_block')
        		->join('fasilitas_masters','tempats.id_fasilitas','=','fasilitas_masters.id','inner')
        		->where(['is_konfirmasi' => 1, 'is_block' => 0])->where('nama_tempat','like',"%$key%")->orderBy('click','desc')->limit(3)->get();
    }
    public static function vertifikasi($id)
    {
        return DB::table('pendaftarans')->select('pendaftarans.id','nama','alamat','tgl_lahir','umur','email','jenis','harga','metode','qty','total_bayar','foto')
                                ->join('jenis','jenis.id','=','pendaftarans.id_jenis')
                                ->join('jenis_masters','jenis_masters.id','=','jenis.id_jenis')
                                ->join('members','members.id','=','pendaftarans.id_member')
                                ->join('metodes','metodes.id','=','pendaftarans.id_metode')->where(['pendaftarans.id' => $id])->first();

    }
    public static function createMember($request)
    {    	
    	$member = $request->validate([
    		'nama'			=> 'required',
    		'alamat'		=> 'required',
    		'umur'			=> 'required|numeric',
    		'tgl_lahir'		=> 'required',
    		'email'			=> 'required|email',
    	]);
    	return DB::table('members')->insertGetId($member);
    }
    public static function daftar($request,$id)
    {
    	$result = $request->validate([
    		'qty'		=> 'required|numeric', 
    		'test'		=> 'required|numeric', 
    		'metode'	=> 'required|numeric', 
    	]);
    	$id_member = Client::createMember($request);
    	$harga = \App\Jenis::where(['id_tempat'	=> $id, 'id_jenis' => $result['test']])->first()->harga;
    	$data = [
    		'id_member'		=> $id_member,
    		'id_tempat' 	=> $id,
    		'id_metode'		=> $result['metode'],
    		'id_jenis'		=> $result['test'],
    		'is_sudah'		=> 0,
    		'qty'			=> $result['qty'],
    		'foto'			=> 'foo',
    		'total_bayar'	=> $result['qty'] * intval($harga)
    	];
    	return ($id = DB::table('pendaftarans')->insertGetId($data)) ? $id : false;

    }
}
