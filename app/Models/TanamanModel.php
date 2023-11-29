<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class TanamanModel extends Model
{
    protected $collection = 'tanaman';
    protected $connection = 'mongodb';
}
