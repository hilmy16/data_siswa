<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
     * Mendapatkan data yang akan diexport.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Ambil semua data mahasiswa dari model Student
        return Student::all(['id', 'nis', 'name', 'gender', 'rombel_id']); // Sesuaikan dengan kolom yang ada
    }

    /**
     * Menambahkan header ke file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Id', 
            'Nis', 
            'Name', 
            'Gender', 
            'Rombel',
        ];
    }
}
