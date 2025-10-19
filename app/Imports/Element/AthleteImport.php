<?php

namespace App\Imports\Element;

use App\Models\Athlete;
use App\Models\Element;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AthleteImport implements ToCollection, WithHeadingRow, WithCalculatedFormulas
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if ($row->filter()->isNotEmpty()) {
                $rate = $row['gold'] * 3 + $row['silver'] * 2 + $row['bronze'];

                Athlete::firstOrCreate([
                    'first_name' => $row['first_name'],
                    'second_name' => $row['second_name'],
                    'third_name' => $row['third_name'],
                    'img_path' => $row['img_path'],
                    'rate' => $rate,
                    'gold' => $row['gold'],
                    'silver' => $row['silver'],
                    'bronze' => $row['bronze'],
                    'city' => $row['city'],
                    'country' => $row['country'],
                ]);
            }

        }
    }
}
