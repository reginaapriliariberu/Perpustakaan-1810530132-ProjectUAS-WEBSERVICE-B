<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul_buku' =>  'Biologi IPA',

            'penulis_buku' =>  'Tia',
            'penerbit_buku' =>  'Tia',
            'tahun_terbit' =>  '2002',
            'stok' =>  '20'
        ]);
        Buku::create([
            'judul_buku' =>  'Biologi IPA10',

            'penulis_buku' =>  'Tia',
            'penerbit_buku' =>  'Tia',
            'tahun_terbit' =>  '2002',
            'stok' =>  '20'
        ]);
        Buku::create([
            'judul_buku' =>  'Biologi IPA11',

            'penulis_buku' =>  'Tia',
            'penerbit_buku' =>  'Tia',
            'tahun_terbit' =>  '2002',
            'stok' =>  '20'
        ]);
        Buku::create([
            'judul_buku' =>  'Biologi IPA12',

            'penulis_buku' =>  'Tia',
            'penerbit_buku' =>  'Tia',
            'tahun_terbit' =>  '2002',
            'stok' =>  '20'
        ]);
        // for ($i = 1; $i < 10; $i++) {
        //     $data = array(
        //         'judul_buku' =>  'Biologi',

        //         'penulis_buku' =>  'Tia',
        //         'penerbit_buku' =>  'Tia',
        //         'tahun_terbit' =>  '2002',
        //         'stok' =>  '20',

        //     );

        //     Buku::created($data);
        // }
        // factory(\App\Buku::class, 3)->create();

    }
}
