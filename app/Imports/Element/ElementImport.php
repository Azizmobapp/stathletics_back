<?php

namespace App\Imports\Element;

use App\Models\Element;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ElementImport implements ToCollection, WithHeadingRow, WithCalculatedFormulas
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if ($row->filter()->isNotEmpty()) {
                Element::firstOrCreate([
                    'section_idx' => $row['section'],
                    'group_idx' => $row['group'],
                    'title' => $row['title'],
                    'point' => $row['point'],
                ]);
            }

        }
    }
}
