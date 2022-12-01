<?php

namespace App\Models;

use App\Models\Region\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    use HasFactory;
    protected $table = 'places';

    // public function city()
    // {
    //     return $this->belongsTo(City::class, 'place_id', 'city_id');
    // }

    // public function state()
    // {
    //     return $this->belongsTo(City::class, 'state_id', 'state_id');
    // }
}
