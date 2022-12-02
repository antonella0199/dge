<?php

namespace App\Exports;

use App\Models\Reporte;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ReporteExports implements FromView
{
    public function view(): View
    {
    
    return view('reportes/exportReportes', [

        'reportes' => Reporte::all()
    ]);
    }
}