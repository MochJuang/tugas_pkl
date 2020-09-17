<?php

use Illuminate\Database\Seeder;

class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataFasilitas = ['Rumah Sakit','Klinik','Puskesmas','Lab','Lainnya'];
        $dataJenis = ['SWAB','RAPID'];
        foreach ($dataFasilitas as $key => $value) {
            \App\Fasitilas_master::insert(['fasilitas' => $value]);
        }
        foreach ($dataJenis as $key => $value) {
            \App\Jenis_master::insert(['jenis' => $value]);
        }

    }
}
