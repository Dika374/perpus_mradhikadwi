<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bukuw extends Model
{
    protected $table = "buku";
    protected $fillable = [
        "judul",
        "pengarang",
        "jml_halaman"
    ];
}
