<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
        public function group(){
            return $this->belongsTo(Group::class);
    }
}
