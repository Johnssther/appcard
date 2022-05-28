<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Modules\Sale;
use App\Models\Modules\Seller;
use App\Models\Modules\Customer;
use App\Models\Modules\Vehicle;
use Illuminate\Http\Request;
use DB, Log;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::get();
        return view('modules.sales.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.sales.create');
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
        $sales = new Sale;
        if ($sales->isValid($request, $data)) {
            DB::beginTransaction();
            try {
                // Validate seller
                $seller = Seller::find($request->seller_id);
                if (!$seller instanceof Seller) {
                    DB::rollback();
                    return redirect('sales/create')->withErrors([ 'msg' => 'El vendedor es obligatorio' ]);
                }

                // Validate customer
                $customer = Customer::find($request->customer_id);
                if (!$customer instanceof Customer) {
                    DB::rollback();
                    return redirect('sales/create')->withErrors([ 'msg' => 'El cliente es obligatorio' ]);
                }

                // Validate vehicle
                $vehicle = Vehicle::find($request->vehicle_id);
                if (!$vehicle instanceof Vehicle) {
                    DB::rollback();
                    return redirect('sales/create')->withErrors([ 'msg' => 'El vehículo es obligatorio' ]);
                }

                $sales->fill($data);
                $sales->name_customer = $customer->name;
                $sales->surname_customer = $customer->surname;
                $sales->name_seller = $seller->name;
                $sales->surname_seller = $seller->surname;
                $sales->save();

                DB::commit();
                return redirect()->route('sales.index');

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
     * @param  \App\Models\Modules\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        $sale->load(['seller', 'customer', 'vehicle']);
        return view('modules.sales.show', ['sale' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modules\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
