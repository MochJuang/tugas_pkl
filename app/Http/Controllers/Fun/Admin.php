<?php

namespace App\Http\Controllers\Fun;
use \App\Http\Controllers\Fun\Auth;
use \App\Http\Controllers\Fun\Client;
use \Illuminate\Support\Facades\DB;
use \App\Pendaftaran as Daftar;
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
    public static function getPendaftar($token)
    {
        return DB::table('pendaftarans')->select('pendaftarans.id','nama','members.alamat','tgl_lahir','umur','members.email','jenis','harga','metode','qty','total_bayar','pendaftarans.foto')
                    ->join('jenis','jenis.id','=','pendaftarans.id_jenis')
                    ->join('jenis_masters','jenis_masters.id','=','jenis.id_jenis')
                    ->join('tempats','tempats.id','=','jenis.id_tempat')
                    ->join('members','members.id','=','pendaftarans.id_member')
                    ->join('metodes','metodes.id','=','pendaftarans.id_metode')->where(['tempats.id' => Auth::getIdTempat($token)])->get();
    }

    // Menvertifikasi pendaftaran dan memasukannya ke table antrians
    private static function getCount($id_daftar,$tgl_test)
    {
        $id_tempat = Daftar::find($id_daftar)->id_tempat;
        $data =  DB::table('antrians')->select('\count(antrians.id)\ as num \ ')
            ->join('pendaftarans','pendaftarans.id','=','antrians.id_daftar')
            ->join('tempats','tempats.id','=','pendaftarans.id_tempat')
            ->where(['is_sudah' => 1, 'tempats.id' => $id_tempat, 'antrians.tgl_test' => $tgl_test])->count();
        return $data;
    }

    private static function getLimit($id_daftar)
    {
        $jenis = Client::vertifikasi($id_daftar)->jenis;
        $data = DB::table('pendaftarans')->select('jenis.limit')
                ->join('tempats','tempats.id','=','pendaftarans.id_tempat')
                ->join('jenis','jenis.id','=','pendaftarans.id_jenis')
                ->join('jenis_masters','jenis_masters.id','=','jenis.id_jenis')
                ->where(['pendaftarans.id' => $id_daftar, 'jenis_masters.jenis' => $jenis])->first()->limit; 
        return $data;
    }
    private static function getLastAntri($id,$date){
        $id_tempat = \App\Pendaftaran::find($id)->id_tempat;
        $data = DB::table('antrians')->select('no_antrian')
                ->join('pendaftarans','pendaftarans.id','=','antrians.id_daftar')       
                ->join('tempats','tempats.id','=','pendaftarans.id_tempat')       
                ->where([ 'tempats.id' => $id_tempat, 'tgl_test' => $date])->orderBy('no_antrian','desc')->first();
        return ($data) ? $data->no_antrian : 0;
    }

    public static function putPendaftaran($id)
    {
        $num = Admin::getCount($id,date('Y-m-d'));
        $limit = Admin::getLimit($id);
        $date = date('Y-m-d');

        // return $last = Admin::getLastAntri(4,$date);
        if ($num == 0) {
            $goal = DB::table('antrians')->insert(['id_daftar' => $id, 'no_antrian' => 1, 'tgl_test' => date('Y-m-d')]);
            // return 'awal sekarang';
        }else if($num > 0 AND $num < $limit){
            $last = Admin::getLastAntri($id,date('Y-m-d'));
            $goal = DB::table('antrians')->insert(['id_daftar' => $id, 'no_antrian' => $last + 1, 'tgl_test' => date('Y-m-d')]);
            // return 'tambah sekarang';
        }else{
            $date = date('Y-m-d');
            while (true) {
                $date = date('Y-m-d',strtotime('1 days',strtotime($date)));
                $num = Admin::getCount($id,$date);
                if ($num < $limit) {
                    if ($num == 0) {
                        $goal = DB::table('antrians')->insert(['id_daftar' => $id, 'no_antrian' => 1, 'tgl_test' => $date]);
                        return 'awal besok';
                    }else{
                        $last = Admin::getLastAntri($id,$date);
                        $goal = DB::table('antrians')->insert(['id_daftar' => $id, 'no_antrian' => $last + 1, 'tgl_test' => $date]);
                        // return 'tambah besok';
                    }
                    break;
                }
            }
        }
        \App\Pendaftaran::find($id)->update(['is_sudah' => 1]);
        return $goal;
    }
}
