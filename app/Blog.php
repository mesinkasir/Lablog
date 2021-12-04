<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function group(){
        return $this->belongsTo(Group::class);
    }
}
