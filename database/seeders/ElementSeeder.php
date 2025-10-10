<?php

namespace Database\Seeders;

use App\Imports\Element\ElementImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ElementImport(), Storage::disk('local')->path('elements.xlsx'));
    }
}
