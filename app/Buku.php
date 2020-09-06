<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'id_kategori', 'name', 'pengarang', 'penerbit', 'kota', 'tahun_terbit'
    ];
}
