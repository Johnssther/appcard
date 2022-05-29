<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Modules\Seller;
use Illuminate\Http\Request;
use App\Exports\SellerExport;
use Maatwebsite\Excel\Facades\Excel;
use DB, Log;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::get();
        return view('modules.sellers.index', ['sellers' => $sellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.sellers.create');
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
        $sellers = new Seller;
        if ($sellers->isValid($request, $data)) {
            DB::beginTransaction();
            try {
                $sellers->fill($data);
                $sellers->save();
                DB::commit();
                return redirect()->route('sellers.index');

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
     * @param  \App\Models\Modules\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        $seller->load('sales.vehicle');
        return view('modules.sellers.show', ['seller' => $seller]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modules\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function export(Seller $seller)
    {
        return Excel::download(new SellerExport, 'sellers.xlsx');
    }
}
