<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{

    protected $fillable = [
        'name',
        'location',
        'region',
    ];

    public function originSchedules()
    {
        return $this->hasMany(Schedule::class, 'origin_id');
    }

    public function destinationSchedules()
    {
        return $this->hasMany(Schedule::class, 'destination_id');
    }


}
