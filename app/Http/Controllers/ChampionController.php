<?php

namespace App\Http\Controllers;

use App\Http\Resources\Champion\ChampionResource;
use App\Http\Resources\Event\EventResource;
use App\Models\Champion;
use App\Models\Event;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ChampionResource::collection(Champion::all())->resolve();

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
    public function show(Champion $champion)
    {
        return ChampionResource::make($champion)->resolve();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Champion $champion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Champion $champion)
    {
        //
    }
}
