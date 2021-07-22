<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    //
    protected $fillable = [
        'nama_rak', 'lokasi_rak', 'id_buku', 'status_rak',
    ];



    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
