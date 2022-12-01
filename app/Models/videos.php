<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    use HasFactory;
    public function place()
    {
        return $this->belongsTo(places::class, 'place_id', 'id');
    }
}
