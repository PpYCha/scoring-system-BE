<?php

namespace App\Http\Controllers;

use App\Models\ContestantEvent;
use App\Models\Event;
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
    public function show(string $id)
    {
        $event = Event::find($id);

        // $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'message' => 'Event not found.',
            ], 404);
        }

        return response()->json([
            'event' => $event,
        ], 200);
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
