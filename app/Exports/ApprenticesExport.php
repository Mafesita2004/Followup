<?php

namespace App\Exports;

use App\Models\Apprentice;
use Maatwebsite\Excel\Concerns\FromCollection;

class ApprenticesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Obtén todos los registros de los aprendices
        return Apprentice::all();
    }
}
