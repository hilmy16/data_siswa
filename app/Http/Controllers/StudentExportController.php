<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class StudentExportController extends Controller
{
    /**
     * Mengekspor data mahasiswa ke file Excel.
     *
     * @return \Illuminate\Support\Facades\Response
     */
    public function export()
    {
        // Ekspor data mahasiswa dengan menggunakan StudentsExport
        return Excel::download(new StudentsExport, 'students.xlsx');
    }
}
