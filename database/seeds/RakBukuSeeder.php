<?php

use App\RakBuku;
use Illuminate\Database\Seeder;

class RakBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RakBuku::create([
            'nama_rak' =>  'Biologi IPA Rak',

            'lokasi_rak' =>  'Tia',
            'status_rak' => 'Terisi Penuh',

            'id_buku' =>  '2'
        ]);
        RakBuku::create([
            'nama_rak' =>  'Biologi IPA Rak1',

            'lokasi_rak' =>  'Tia',
            'status_rak' => 'Terisi Penuh',

            'id_buku' =>  '2'
        ]);
        RakBuku::create([
            'nama_rak' =>  'Biologi IPA Rak2',

            'lokasi_rak' =>  'Tia',
            'status_rak' => 'Terisi Penuh',

            'id_buku' =>  '2'
        ]);
        // for ($i = 1; $i < 10; $i++) {
        //     $data = array(
        //         'nama_rak' =>  'Biologi',

        //         'lokasi_rak' =>  'Tia',
        //         'status_rak' => 'Terisi Penuh',

        //         'id_buku' =>  '2',


        //     );

        //     RakBuku::created($data);
        // }
    }
}
