<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function blogs(){
        return $this->hasmany(Blog::class);
    }
    public function abouts(){
        return $this->hasmany(About::class);
    }
}
