<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function menus(){
        return $this->hasmany(Menu::class);
    }
}
