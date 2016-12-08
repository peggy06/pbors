<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{

    protected $fillable = [
        'display_name',
    ];


    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
