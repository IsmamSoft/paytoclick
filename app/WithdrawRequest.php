<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawRequest extends Model
{
    function users(){
        return $this->belongsTo(User::class);
    }
}
