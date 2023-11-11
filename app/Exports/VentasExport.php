<?php

namespace App\Exports;

use App\Models\Venta;
use Maatwebsite\Excel\Concerns\FromCollection;

class VentasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Venta::all();
    }
}
