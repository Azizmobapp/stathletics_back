<?php

namespace Database\Seeders;

use App\Imports\Element\AthleteImport;
use App\Imports\Element\ElementImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new AthleteImport(), Storage::disk('local')->path('athletes.xlsx'));
    }
}
