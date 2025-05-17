<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class governorate extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'image',
    ];

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
