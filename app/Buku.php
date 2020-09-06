<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table    = "buku";
    protected $fillable = [
        'id_kategori', 'nama', 'pengarang', 'penerbit', 'kota', 'tahun_terbit'
    ];
}
