<?php

namespace App\Http\Controllers;

use App\Models\ContestantEvent;
use Illuminate\Http\Request;

class ContestantEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contestantsEvents = ContestantEvent::all();
        return response()->json([
            'status' => 200,
            'data' => $contestantsEvents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ContestantEvent $contestantEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContestantEvent $contestantEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContestantEvent $contestantEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContestantEvent $contestantEvent)
    {
        //
    }
}