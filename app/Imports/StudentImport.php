<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Student([
            'nis'     => $row['nis'],
            'name'    => $row['name'],
            'gender'  => $row['gender'],
        ]);
    }

    public function rules(): array
    {
        return [
            'nis' => 'required|numeric',
            'name' => 'required',
            'gender' => 'required|in:L,P,B,G',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nis.required' => 'NIS wajib diisi',
            'nis.numeric' => 'NIS harus berupa angka',
            'name.required' => 'Nama wajib diisi',
            'gender.required' => 'Jenis kelamin wajib diisi',
            'gender.in' => 'Jenis kelamin harus L,P,B, atau G',
        ];
    }
}