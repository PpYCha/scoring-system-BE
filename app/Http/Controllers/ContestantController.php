<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contestants = Contestant::all();
        return response()->json([
            'status' => 200,
            'contestants' => $contestants,
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
            'name' => 'required',
            'municipality' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'shoeSize' => 'required',
            'swimsuitSize' => 'required',
            'bust' => 'required',
            'waist' => 'required',
            'hips' => 'required',
            'nickname' => 'required',
            'dateOfBirth' => 'required',
            'birthPlace' => 'required',
            'event_id' => 'required',
            'cotestant_number' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to create contestant.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->only([
            'name',
            'municipality',
            'age',
            'weight',
            'height',
            'shoeSize',
            'swimsuitSize',
            'bust',
            'waist',
            'hips',
            'nickname',
            'dateOfBirth',
            'birthPlace',
            'event_id',
            'cotestant_number',
        ]);

        $contestant = Contestant::create($data);

        return response()->json([
            'message' => 'Contestant created successfully.',
            'contestant' => $contestant,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contestant $contestant)
    {
        $contestant->delete();

        return response()->json([
            'message' => 'Contestant deleted successfully.',
        ], 200);
    }
}