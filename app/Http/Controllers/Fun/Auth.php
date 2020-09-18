<?php

namespace App\Http\Controllers\Fun;
use \App\User;
use Illuminate\Support\Facades\DB;

class Auth
{

    public static function getId($token)
    {
        return ($id = User::where(['no_token' => $token])->first()->id) ? $id :  false;
    }

    public static function register_user($request)
    {
        $data = $request->validate([
            'username'          => 'required',
            'password'          => 'required',
            'confirm_password'  => 'required_with:password|same:password',
            'check'             => 'required'
        ]);
        $noToken = substr(str_shuffle('1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
        $data = [
            'username'  => $data['username'],
            'password'  => md5($data['password']),
            'no_token'  => $noToken,
            'posisi'  => 'admin',
        ];
        return (User::insert($data)) ? $noToken : false ;
    }
    public static function getName($token)
    {
        return User::where(['no_token' => $token])->first()->username;
    }
    public static function login($request)
    {
        $data = $request->validate([
            'username'          => 'required',
            'password'          => 'required',
        ]);
        $data = [
            'username'  => $data['username'],
            'password'  => md5($data['password']),
        ];
        $data = User::where($data)->first();
        if($data['posisi'] == 'admin'){
            $data = DB::table('tempats')->join('users','users.id','=','tempats.id_user')->where('users.id',$data['id'])->first();
            $data = ['user_token' => $data->no_token, 'posisi' => $data->posisi, 'confirm' => $data->is_konfirmasi, 'block' => $data->is_block];
        }else{
            $data = ['user_token' => $data['no_token'], 'posisi' => $data['posisi']];
        }
        return ($data) ? $data : false;
    }
    public static function createSuperAdmin()
    {
        $noToken = substr(str_shuffle('1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
        $data = [
            'username'  => 'mochjuang',
            'password'  => md5('mochjuang'),
            'no_token'  => $noToken,
            'posisi'  => 'superadmin',
        ];
        return (User::insert($data)) ? $noToken : false ;
    }
    public static function hasLogin(){
        if(!session('user_token') OR !Auth::getId(session('user_token'))){
            return redirect('/auth');
        }
    }
    public static function register_tempat($request,$token)
    {
        $id_user = Auth::getId($token);
        // dd($request);
        $data = $request->validate([
            'nama_lembaga'  => 'required',
            'deskripsi'     => 'required',
            'id_fasilitas'  => 'required',
            'no_telp'       => 'required',
            'email'         => 'required|email',
            'jum_negatif'   => 'required|numeric',
            'alamat'        => 'required',
            'no_rek'        => 'required|numeric',
            'foto'          => 'required|image|mimes:png,jpg,jpeg',
            'jadwal_buka1'   => 'required',
            'jadwal_buka2'   => 'required',
            'check'         => 'required',
        ]);
        // dd($request->foto);
        if($request->has('foto')){
            $name = time().$request->foto->getClientOriginalName();
            $path = $request->foto->storeAs('public',$name);
        }
        $jadwal = $data['jadwal_buka1'].' - '.$data['jadwal_buka2'];
        $data = [
            'nama_tempat'   => $data['nama_lembaga'],
            'deskripsi'     => $data['deskripsi'],
            'id_fasilitas'  => $data['id_fasilitas'],
            'id_user'       => $id_user,
            'no_telp'       => $data['no_telp'],
            'email'         => $data['email'],
            'jum_negatif'   => $data['jum_negatif'],
            'alamat'        => $data['alamat'],
            'no_rek'        => $data['no_rek'],
            'foto'          => $name,
            'jadwal_buka'   => $data['jadwal_buka1'].'-'.$data['jadwal_buka2'],
            'click'         => 0,
            'is_konfirmasi' => 0,
            'is_block'      => 0,
        ];
        return \App\Tempat::insert($data);
    }
}
