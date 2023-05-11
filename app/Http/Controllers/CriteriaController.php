<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criterias = Criteria::all();
        return response()->json([
            'status' => 200,
            'criterias' => $criterias,
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
            'description' => 'required',
            'percentage' => 'required',
            'category_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to create criteria.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->only([
            'description',
            'percentage',
            'category_id',
        ]);

        $criteria = Criteria::create($data);

        return response()->json([
            'message' => 'Criteria created successfully.',
            'criteria' => $criteria,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $criteria = Criteria::find($id);

        if (!$criteria) {
            return response()->json([
                'message' => 'criteria not found.',
            ], 404);
        }

        return response()->json([
            'criteria' => $criteria,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criteria $criteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Criteria $criteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $criteria = Criteria::find($id);
        $criteria->delete();

        if (!$criteria) {
            return response()->json([
                'message' => 'criteria not found.',
            ], 404);
        }

        return response()->json([
            'message' => 'Criteria deleted successfully.',
        ], 200);
    }
}