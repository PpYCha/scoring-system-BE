<?php

namespace App\Http\Controllers;

use App\Models\SubEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subEvents = SubEvent::all();
        return response()->json([
            'status' => 200,
            'subEvents' => $subEvents,
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',
            'event_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to create sub event.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->only([
            'title',
            'date',
            'event_id',
        ]);

        $subEvent = SubEvent::create($data);

        return response()->json([
            'message' => 'SubEvent created successfully.',
            'subEvent' => $subEvent,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubEvent $subEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubEvent $subEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',
            'event_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to update SubEvent.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $subEvent = SubEvent::findOrFail($id);

        $data = $request->only(['title', 'date', 'event_id']);

        $subEvent = SubEvent::updateOrCreate(['id' => $id], $data);

        return response()->json([
            'message' => 'Event updated successfully.',
            'subEvent' => $subEvent,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subEvent = SubEvent::find($id);
        $subEvent->delete();

        if (!$subEvent) {
            return response()->json([
                'message' => 'subEvent not found.',
            ], 404);
        }

        return response()->json([
            'message' => 'Criteria deleted successfully.',
        ], 200);

    }
}