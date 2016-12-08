<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Frequency;
use App\Models\Route;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->company) {
            return redirect()->route('client.schedules.index');
        }
        return redirect()->route('admin.company.index');

    }

    public function start(Request $request)
    {

        $routes = Route::pluck('name', 'id');
        $data = $request->all();
        $schedules = collect();
        $companies = Company::all();
        $error = null;
        if ($data) {
            $dateRequest = Carbon::createFromFormat('m/d/Y', $request->get('date'));
            $date = $dateRequest->format('l') . 's';
            $frequencies = ['Daily', $date];
            $dates = Frequency::whereIn('display_name', $frequencies)->pluck('id');
            $schedules = Schedule::with('company')->where(function ($query) use ($data, $dates) {
                $query->where('origin_id', $data['origin']);
                $query->where('destination_id', $data['destination']);
                $query->whereIn('frequency_id', $dates);

            })->get()->groupBy('company_id');
            if ($schedules->isEmpty()) {
                $error = collect(['greeting' => 'No schedules available', 'summary' => 'Please select a new Schedule']);
            }

            if ( ! (Carbon::now()->addDays(3)->diffInDays($dateRequest, false) >= 0)) {
                $error = collect(['greeting' => 'Reservation not allowed', 'summary' => 'Reservation date should be at least 3 days before the schedule.']);
                $schedules = collect();
            }

        }
        return view('welcome', compact('routes', 'schedules', 'data', 'companies', 'error'));
    }

}
