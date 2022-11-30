<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
