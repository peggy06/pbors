<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{

    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
