<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Schedule;
use App\Notifications\ReservationCreated;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $schedule = Schedule::find($data['schedule_id']);
        $schedule->setReserved(Carbon::createFromFormat('m/d/Y', $data['date'])->format('Y-m-d'));

        return view('reservations.create', compact('schedule', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReservationRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservationRequest $request)
    {
        $data = $request->all();
        $data['reservation_date'] = Carbon::createFromFormat('m/d/Y', $data['reservation_date'])->format('Y-m-d');
        $reservation = Reservation::create($data);
        $client = Client::firstOrCreate(['email' => $data['email']]);
        $client->update([
            'first_name' => $data['last_name'],
            'last_name'  => $data['first_name']
        ]);
        $client->reservations()->save($reservation);
        $client->notify(new ReservationCreated($reservation));

        return redirect()->back()->with('success-reserved', $data['email']);

    }

    public function confirm(Reservation $reservation)
    {
        $reservation->status = 'confirmed';
        $reservation->save();
        return view('reservations.confirm', compact('reservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
