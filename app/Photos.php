<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    public $table = "photos";
    public function projects()
    {
    	return $this->belongsTo('App\Projects');
    }
}
