<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class VideoModel extends Model
{
    protected $collection = 'vidio';
    protected $connection = 'mongodb';
}
