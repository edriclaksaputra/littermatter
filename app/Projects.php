<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public $table = "projects";
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }

    public function photos()
    {
    	return $this->hasMany('App\Photos');
    }
}
