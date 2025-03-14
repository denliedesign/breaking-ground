<?php

namespace App\Imports;

use App\Models\DanceClass;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithUpserts;

class DanceClassesImport implements ToModel, WithUpserts
{
    public function uniqueBy()
    {
        return 'id';
    }

    /**
     * @param array $row
     *
     * @return DanceClass|null
     */
    public function model(array $row)
    {
        return new DanceClass([
            'id' => $row[1], // Assuming the ID is in the first column of your Excel file
            'name' => $row[4],
            'age_requirement' => $row[5],
            'dance_style' => $row[6],
            'day_of_week' => $row[2],
            'time' => $row[3],
            // Add more fields as needed
        ]);
    }
}
