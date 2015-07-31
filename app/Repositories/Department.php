<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    
    protected $fillable = ['name','departments'];
    protected $casts = [
    	'departments'=>'json'
    ];

    public function getDepartmentsAttribute($value)
    {
        return json_decode($value);
    }
    
}
