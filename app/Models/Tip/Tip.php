<?php

namespace App\Models\Tip;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "tips";
    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'page_id';
}
