<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'image',
        'fees_egyptian',
        'fees_foreigners',
        'start_work',
        'end_work',
        'lat',
        'ing',
        'governorate_id'
    ];


    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }
}
