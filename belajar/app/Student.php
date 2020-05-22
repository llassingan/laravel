<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // ini adlah model Student

    //code ini untuk menandai field mana saja yang boleh di ubah/akses oleh Laravel (Keamanan)
    protected $fillable=['nama','nim','jurusan'];
}
