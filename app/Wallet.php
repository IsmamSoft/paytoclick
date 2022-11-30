<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }    
}
