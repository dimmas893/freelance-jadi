<?php

namespace App\Models;

use App\Models\Region\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rel_place_cat extends Model
{
    use HasFactory;
    protected $table = 'rel_place_cat';

    public function place()
    {
        return $this->belongsTo(places::class, 'place_id', 'id');
    }

    public function cat()
    {
        return $this->belongsTo(places::class, 'cat_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
