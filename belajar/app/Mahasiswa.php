<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // penggunaan protected utk akses tabel yang tidak sesuai aturan Eloquent

    protected $table = 'Mahasiswa'; 
}
