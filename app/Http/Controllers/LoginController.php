<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    // ------------ [ User Login ] -------------------
    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
                "email" => "required|email",
                "password" => "required",

            ]
        );

        if ($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        // check if entered email exists in db
        $email_status = User::where("email", $request->email)->first();

        // if email exists then we will check password for the same email

        if (!is_null($email_status)) {

            if (Hash::check($request->password, $email_status->password)) {
                $isActive_status = User::where("email", $request->email)->where("status", "Active")->first();
                $user = $this->userDetail($request->email);

                if (!is_null($isActive_status)) {

                    return response()->json(["status" => 200, "success" => true, "message" => "You have logged in successfully.", "data" => $user]);
                } else {

                    return response()->json(["status" => "failed", "success" => false, "message" => "Account is Banned. Please contact the administrator"]);

                }
            } else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Incorrect password."]);
            }
        } else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Email doesn't exist."]);
        }
    }

    // ------------------ [ User Detail ] ---------------------
    public function userDetail($email)
    {
        $user = array();
        if ($email != "") {
            $user = User::where("email", $email)->first();
            return $user;
        }
    }
}