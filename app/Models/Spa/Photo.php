<?php

namespace App\Models\Spa;

use App\Models\places;
use App\Models\Region\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "photos";
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'photo_id';

    /**
     * Get the city of spa.
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function places()
    {
        return $this->belongsTo(places::class, 'photo_id', 'place_id');
    }
}
