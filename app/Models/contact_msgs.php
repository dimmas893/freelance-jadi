<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_msgs extends Model
{
    use HasFactory;
    protected $table= 'contact_msgs';

    public function places()
    {
        return $this->belongsTo(places::class, 'place_id', 'id');
    }
}
