<?php

namespace App\Exports;

use App\Models\Modules\Seller;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class SellerExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        $query = Seller::query();
        $query->with('sales.vehicle');

        return $query;
    }
}
