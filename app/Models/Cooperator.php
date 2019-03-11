<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cooperator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'name', 'administrative_region_id'
    ];
}
