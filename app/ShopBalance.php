<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopBalance extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
