<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $fillable=['nama_custumer','jenis_iklan','biaya'];
    protected $table='iklan';
}
