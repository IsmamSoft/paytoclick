<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyPackage extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
