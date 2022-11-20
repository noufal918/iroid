<?php

namespace App\Http\Controllers\Api\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' =>  'required|email',
            'password'   => 'required',
        ]);

        // if validation fails
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 400);
        }

        // auth attempt
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $token =  $authUser->createToken($authUser->name . '-MyToken')->plainTextToken;

            // employees with company details
            $employees = Employee::with('company')->get();

            return response()->json([
                'message' => "You have successfully logged in!",
                'user' => $authUser,
                'employees' => $employees,
                'token' => $token,
            ], 200);
        } else {
            return response()->json([
                'message' => "Wrong credentials. Please try again."
            ], 400);
        }
    }
}
