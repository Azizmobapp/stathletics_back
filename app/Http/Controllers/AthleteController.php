<?php

namespace App\Http\Controllers;

use App\Http\Resources\Athlete\AthleteResource;
use App\Http\Resources\Event\EventResource;
use App\Models\Athlete;
use App\Models\Event;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AthleteResource::collection(Athlete::orderBy('rate', 'DESC')->get())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Athlete $champion)
    {
        return AthleteResource::make($champion)->resolve();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Athlete $champion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Athlete $champion)
    {
        //
    }
}
