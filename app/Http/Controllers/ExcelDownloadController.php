<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ApprenticesExport; // Asegúrate de que la clase de exportación exista

class ExcelDownloadController extends Controller
{
  
    public function download()
    {
        // Genera y descarga el archivo Excel
        return Excel::download(new ApprenticesExport, 'apprentices.xlsx');
    }
}
   

