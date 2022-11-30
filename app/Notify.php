<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
