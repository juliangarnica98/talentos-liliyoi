<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];

    public function vacants()
    {
        return $this->hasMany('App\Vacant');
    }
}
