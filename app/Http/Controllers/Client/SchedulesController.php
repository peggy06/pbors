<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\ScheduleRequest;
use App\Models\Frequency;
use App\Models\Route;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class SchedulesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $schedules = Schedule::all();
        if ($user->company) {
            $schedules = Schedule::where('company_id', $user->company_id)->get();
        }

        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $busTypes = Schedule::BUS_TYPE;
        $frequencies = Frequency::pluck('display_name', 'id');
        $routes = Route::pluck('name', 'id');

        return view('schedules.create', compact('frequencies', 'busTypes', 'routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ScheduleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScheduleRequest $request)
    {
        $user = $request->user();
        $data = $request->all();
        $data['company_id'] = $user->company_id;
        Schedule::create($data);

        return redirect()->route('client.schedules.index')->with('success', 'Successfully created a Schedule!');

    }

    public function export(Schedule $schedule)
    {
        $now = Carbon::now();
        $reservationsByDate = $schedule->reservations()->where('reservation_date', '>=', $now->toDateString())->get()->groupBy('reservation_date');
        Excel::create('Schedules', function ($excel) use ($reservationsByDate) {
            if ($reservationsByDate->isEmpty()) {
                $data = new Collection();
                $processed = [];
                $processed['Itinerary'] = "None";
                $processed['Email'] = "None";
                $processed['First Name'] = "None";
                $processed['Last Name'] = "None";
                $processed['Seats Reserved'] = "None";
                $processed['Confirmed'] = "None";
                $processed['Fare'] = "None";
                $processed['Payment Due'] = "None";
                $data->push($processed);
                $excel->sheet('No Reservations', function ($sheet) use ($data) {
                    $sheet->cells('A1:H1', function ($row) {
                        $row->setFontWeight('bold');

                    });
                    $sheet->fromArray($data);
                });
            }

            foreach ($reservationsByDate as $key => $reservations) {
                $data = new Collection();
                foreach ($reservations as $reservation) {

                    $processed = [];
                    $processed['Itinerary'] = $reservation->schedule->itinerary;
                    $processed['Email'] = $reservation->client->email;
                    $processed['First Name'] = $reservation->client->first_name;
                    $processed['Last Name'] = $reservation->client->last_name;
                    $processed['Seats Reserved'] = $reservation->quantity;
                    $processed['Confirmed'] = $reservation->status == 'confirmed' ? "Yes" : "No";
                    $processed['Fare'] = $reservation->fare;
                    $processed['Payment Due'] = $reservation->total;
                    $data->push($processed);

                }
                $excel->sheet($key, function ($sheet) use ($data) {
                    $sheet->cells('A1:H1', function ($row) {
                        $row->setFontWeight('bold');

                    });
                    $sheet->fromArray($data);
                });
            }

            // Set the title
            $excel->setTitle('Schedule Reservations');

            // Chain the setters
            $excel->setCreator('JohnelSamJuby')
                ->setCompany('PBORS');

            // Call them separately

        })->download('xls');

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
     * @param Schedule $schedule
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Schedule $schedule)
    {
        $busTypes = Schedule::BUS_TYPE;
        $frequencies = Frequency::pluck('display_name', 'id');
        $routes = Route::pluck('name', 'id');

        return view('schedules.edit', compact('schedule', 'busTypes', 'frequencies', 'routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Schedule $schedule
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(ScheduleRequest $request, Schedule $schedule)
    {
        $schedule->update($request->all());
        return redirect()->route('client.schedules.index')->with('success', 'Successfully updated schedule!');
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
