<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\RouteStoreRequest;
use App\Models\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoutesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all();
        return view('routes.index', compact('routes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('routes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RouteStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RouteStoreRequest $request)
    {
        Route::create($request->all());
        return redirect()->route('client.routes.index')->with('success', 'Successfully created a route!');
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
    public function edit(Route $route)
    {
        return view('routes.edit', compact('route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RouteStoreRequest|Request $request
     * @param Route $route
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(RouteStoreRequest $request, Route $route)
    {

        $route->update($request->all());
        return redirect()->route('client.routes.index')->with('success', 'Successfully updated a route!');
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
