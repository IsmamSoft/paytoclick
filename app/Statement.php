<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
