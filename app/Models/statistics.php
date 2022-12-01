<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistics extends Model
{
    use HasFactory;
    protected $table = 'statistics';
    public function place()
    {
        return $this->belongsTo(places::class, 'place_id', 'id');
    }
}
