<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Modules\Vehicle;
use Illuminate\Http\Request;
use DB, Log;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::get();
        return view('modules.vehicles.index', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $vehicles = new Vehicle;
        if ($vehicles->isValid($request, $data)) {
            DB::beginTransaction();
            try {
                $vehicles->fill($data);
                $vehicles->save();
                DB::commit();
                return redirect()->route('vehicles.index');

            } catch (\Exception $e) {
                DB::rollback();
                Log::error($e->getMessage());
                return abort(500);
            }
        }
        return abort(500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modules\Vehicle  $vehicles
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('modules.vehicles.show', ['vehicle' => $vehicle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules\Vehicle  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modules\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
