<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{


    CONST BUS_TYPE = [
        'Deluxe'   => 'Deluxe',
        'Premium'  => 'Premium',
        'Ordinary' => 'Ordinary'
    ];


    protected $dateReserved = "";

    protected $appends = [
        'seats_remaining',
        'destination_name',
        'origin_name',
        'itinerary',
        'frequency_name'
    ];

    protected $fillable = [
        'bus_type',
        'frequency_id',
        'origin_id',
        'destination_id',
        'company_id',
        'departure',
        'fare',
        'seats',
    ];

    public function setReserved($reserve)
    {
        $this->dateReserved = $reserve;
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function origin()
    {
        return $this->belongsTo(Route::class, 'origin_id');
    }

    public function destination()
    {
        return $this->belongsTo(Route::class, 'destination_id');
    }

    public function frequency()
    {
        return $this->belongsTo(Frequency::class);
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function getFrequencyNameAttribute()
    {
        return $this->frequency->display_name;
    }

    public function getItineraryAttribute()
    {
        return "{$this->origin_name} - {$this->destination_name}";
    }

    public function getOriginNameAttribute()
    {
        return $this->origin->name;
    }

    public function getDestinationNameAttribute()
    {
        return $this->destination->name;
    }

    public function getSeatsRemainingAttribute()
    {
        $seats = $this->seats - $this->reservations()->where('reservation_date', $this->dateReserved)->confirmed()->get()->sum('quantity');
        return $seats;
    }
}
