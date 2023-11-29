<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class ForumModel extends Model
{
    protected $fillable = [
        'judul', 'deskripsi', 'penulis', 'comment' // Tambahkan nama kolom yang disebutkan
    ];

    protected $collection = 'forum';
    protected $connection = 'mongodb';
}
