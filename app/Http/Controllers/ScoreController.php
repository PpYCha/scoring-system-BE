<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = Score::all();
        return response()->json([
            'status' => 200,
            'scores' => $scores,
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
            'score' => 'required',
            'contestant_id' => 'required',
            'judge_id' => 'required',
            'criteria_id' => 'required',
            'event_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to create score.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->only([
            'score',
            'contestant_id',
            'judge_id',
            'criteria_id',
            'event_id',
        ]);

        $score = Score::create($data);

        return response()->json([
            'message' => 'Score created successfully.',
            'score' => $score,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        $score->delete();

        return response()->json([
            'message' => 'Score deleted successfully.',
        ], 200);
    }
}