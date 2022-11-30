<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PTCVideo extends Model
{
    protected $table = 'p_t_c_videos';
    protected $fillable = [
        'views', 'video'
    ];
}
