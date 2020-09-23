<?php

namespace App\Http\Controllers\Fun;
use \App\Http\Controllers\Fun\Auth;
use \Illuminate\Support\Facades\DB;
class Admin
{
    public static function editTempat($request,$token)
    {
    	$id_user = Auth::getId($token);
        // dd($request);
        $data = $request->validate([
            'nama_tempat'   => 'required',
            'id_fasilitas'  => 'required',
            'no_telp'       => 'required',
            'email'         => 'required|email',
            'jum_negatif'   => 'required|numeric',
            'alamat'        => 'required',
            'no_rek'        => 'required|numeric',
            'jadwal_buka1'  => 'required',
            'jadwal_buka2'  => 'required',
            'confirm'       => 'required',
        ]);
        $jadwal = $data['jadwal_buka1'].' - '.$data['jadwal_buka2'];
        $data = [
            'nama_tempat'   => $data['nama_tempat'],
            'id_fasilitas'  => $data['id_fasilitas'],
            'id_user'       => $id_user,
            'no_telp'       => $data['no_telp'],
            'email'         => $data['email'],
            'jum_negatif'   => $data['jum_negatif'],
            'alamat'        => $data['alamat'],
            'no_rek'        => $data['no_rek'],
            'jadwal_buka'   => $data['jadwal_buka1'].'-'.$data['jadwal_buka2'],
        ];
        
        if (!Auth::confirmPassword($request->confirm,$token)) {
            return ['result' => false, 'message' => 'Maaf Password Yang Anda Masukkan Tidak Dapat Ditemukan'];
        }
        if( DB::table('tempats')->join('users','users.id','=','tempats.id_user')->where(['tempats.id_user' => Auth::getId($token)])->update($data) ){
            return ['result' => true, 'message' => 'Berhasil Mengedit Data Utama'];
        }else{
            return ['result' => false, 'message' => 'Gagal Mengedit Data'];
        }
    }

    public static function editUser($request,$token)
    {
        $data = $request->validate([
            'username'          => 'required',
            'password'          => 'required',
            'confirm_password'  => 'required_with:password|same:password',
            'password_awal'     => 'required'
        ]);

        if (!Auth::confirmPassword($request->password_awal,$token)) {
            return ['result' => false, 'message' => 'Maaf Password Yang Anda Masukkan Tidak Dapat Ditemukan'];
        }else{
            if (\App\User::where(['id' => Auth::getId($token)])->update(['username' => $data['username'], 'password' => md5($data['password'])])) {
                return ['result' => true, 'message' => 'Berhasil Mengedit User'];
            }else{
                return ['result' => false, 'message' => 'Gagal Mengedit User'];
            }
        }
    }
    public static function ediDeskripsi($request,$token)
    {
        $data = $request->validate([
            'deskripsi'     => 'required'
        ]);
        if( DB::table('tempats')->join('users','users.id','=','tempats.id_user')->where(['tempats.id_user' => Auth::getId($token)])->update($data) ){
            return ['result' => true, 'message' => 'Berhasil Mengedit Data Utama'];
        }else{
            return ['result' => false, 'message' => 'Gagal Mengedit Data'];
        }
    }
    public static function editJenis($request,$token)
    {
        $id_tempat = Auth::getIdTempat($token);
        if ($request->swab == 'on') {
            $request->validate(['swab_harga' => 'required','swab_limit' => 'required']);
        }else if ($request->rapid == 'on') {
            $request->validate(['rapid_harga' => 'required','rapid_limit' => 'required']);
        }else{
            return redirect('auth/jenisRegister')->with('message','Setiap Lembaga Harus Mempunyai setidaknya 1 test');
        }
        $data = [[
            'id_tempat' => $id_tempat,
            'id_jenis'  => 1,
            'harga'     => ($request->swab_harga) ? $request->swab_harga : 0 ,
            'limit'     => ($request->swab_limit) ? $request->swab_limit : 0 ,
            'is_sedia'  => ($request->swab) ? 1 : 0 ,
        ],[
            'id_tempat' => $id_tempat,
            'id_jenis'  => 2,
            'harga'     => ($request->rapid_harga) ? $request->rapid_harga : 0 ,
            'limit'     => ($request->rapid_limit) ? $request->rapid_limit : 0 ,
            'is_sedia'  => ($request->rapid) ? 1 : 0 ,
        ]];

        $result_1 = \App\Jenis::where(['id_tempat' => $id_tempat, 'id_jenis' => 1])->update($data[0]);
        $result_2 = \App\Jenis::where(['id_tempat' => $id_tempat, 'id_jenis' => 2])->update($data[1]);
        return ($result_1 && $result_2) ? true : false;
    }
}
