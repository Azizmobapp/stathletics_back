<?php

namespace App\Http\Controllers;

use App\Http\Requests\Element\IndexRequest;
use App\Http\Resources\Athlete\AthleteResource;
use App\Http\Resources\Element\ElementResource;
use App\Models\Athlete;
use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $elements = Element::where('section_idx', $data['section_idx'])
            ->orderBy('section_idx', 'ASC')
            ->orderBy('group_idx', 'ASC')
            ->get()
            ->groupBy('group_idx')
        ->map(function($elemsGroup) {
            return ElementResource::collection($elemsGroup)->resolve();
        });
        return $elements;
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
