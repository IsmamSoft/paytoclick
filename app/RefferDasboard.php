<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefferDasboard extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
