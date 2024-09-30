<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news'; // Nama tabel
    protected $primaryKey = 'ID_NEWS'; // Primary key
    public $timestamps = false; // Tidak menggunakan timestamps

    // Daftar kolom yang dapat diisi
    protected $fillable = ['NEWS_HEAD', 'NEWS_SUBHEAD', 'NEWS_IMAGE'];
}
