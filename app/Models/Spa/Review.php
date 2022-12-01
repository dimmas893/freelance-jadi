<?php

namespace App\Models\Spa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "reviews";

    /**
     * Get the list of spa.
     */
    public function spa()
    {
        return $this->belongsTo(Spa::class, 'place_id', 'place_id');
    }
}
