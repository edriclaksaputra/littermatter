<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = "categories";
    public function projects()
    {
        return $this->hasMany('App\Projects');
    }
}
