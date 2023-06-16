<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'status' => 200,
            'users' => $users,
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
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'contactNumber' => 'nullable',
            'role' => 'required',
            'status' => 'required',
            'event_id	' => 'nullable',
            'subEvent_id' => 'nullable',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to create user.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $request->only(['name', 'email', 'password', 'contactNumber', 'event_id	', 'subEvent_id', 'role', 'status']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return response()->json([
            'message' => 'User created successfully.',
            'user' => $user,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found.',
            ], 404);
        }

        return response()->json([
            'user' => $user,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable',
            'contactNumber' => 'nullable',
            'role' => 'required',
            'status' => 'nullable',
            'event_id' => 'nullable',
            'subEvent_id' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Unable to update user.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = User::findOrFail($id);

        $data = $request->only(['name', 'email', 'password', 'contactNumber', 'role', 'event_id', 'status']);

        // Check if password is provided and not empty before updating
        if ($request->has('password') && !empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        if ($user->email === $data['email']) {
            unset($data['email']);
        }

        $user = User::updateOrCreate(['id' => $id], $data);

        return response()->json([
            'message' => 'User updated successfully.',
            'user' => $user,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully.',
        ], 200);
    }

}
