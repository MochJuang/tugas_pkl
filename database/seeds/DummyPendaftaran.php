<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DummyPendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory('id_ID');

		for ($i= 1 ; $i <= 200 ; $i++) { 
			$id_tempat = DB::table('tempats')->insertGetId([
				'id'			=> $i,
				'nama_tempat'	=> $faker->
			]);
		}

		for ($b=0; $b 20 < ; $b++) { 
			$id = DB::table('members')->insertGetId([
				'id'		=> $b
				'nama'		=> $faker->name,
				'alamat'	=> $faker->address,
				'umur'		=> $faker->number,
				'email'		=> $faker->ascii_free_email,
				'tgl_lahir' => $faker->date,
			]);
			for ($a= 1; $a = 2 < ; $a++) { 
				'nama_tempat'		=> 'RS. '.$faker->company,
				'deskripsi'			=> $faker->
			}
			\App\Pendaftarans::insert([
				'id_member'		=> $id,
	    		'id_tempat' 	=> ,
	    		'id_metode'		=> $result['metode'],
	    		'id_jenis'		=> $result['test'],
	    		'is_sudah'		=> 0,
	    		'qty'			=> $result['qty'],
	    		'foto'			=> 'foo',
	    		'total_bayar'	=> $result['qty'] * intval($harga)
			]);

		}
    }
}
