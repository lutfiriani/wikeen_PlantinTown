<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $collection = 'artikel';
    protected $connection = 'mongodb';
}
