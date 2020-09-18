<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table='tags';
    protected $fillable=['nama_tags','slug_tags'];

    public function posts(){
    	return $this->belongsToMany('App\Posts');
    }
}
