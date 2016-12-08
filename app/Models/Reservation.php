<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [

        'schedule_id',
        'reservation_date',
        'quantity',
        'fare',
        'total',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();
    }


    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function scopeConfirmed($q)
    {
        return $q->where('status', 'confirmed');
    }
}
