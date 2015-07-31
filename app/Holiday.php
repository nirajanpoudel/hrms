<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    protected $table = 'holidays';


    public function scopeMonth($query,$month){
    	return $query->whereRaw("MONTH(date) = $month");
    }
}
