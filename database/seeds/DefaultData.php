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
        $dataMetode = ['Transfer','Langsung'];
        foreach ($dataFasilitas as $key => $value) {
            \App\Fasitilas_master::insert(['fasilitas' => $value]);
        }
        foreach ($dataJenis as $key => $value) {
            \App\Jenis_master::insert(['jenis' => $value]);
        }
        foreach ($dataJenis as $key => $value) {
            \App\Jenis_master::insert(['jenis' => $value]);
        }
        for ($bulan=1; $bulan <= 12; $bulan++) { 
            if ($bulan <= 9) {
                $bulan = '0'.$bulan;
            }

            for ($hari=1; $hari <= 30; $hari++) { 
                if ($hari <= 9) {
                    $hari = '0'.$hari;
                }
                \App\Tgl_test::insert(['tanggal' => "2020-$bulan-$hari"]);
            }
        }

    }
}
