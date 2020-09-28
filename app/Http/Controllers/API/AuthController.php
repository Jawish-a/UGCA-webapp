<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // register function
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'ends_with:aou.edu.sa,arabou.edu.sa'],
            'password' => ['required', 'string', 'min:8'],
            'device_name' => ['required', 'string'],
            'student_id' => ['required', 'string', 'unique:users']
        ]);
        // 1
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        // 2
        $input = $request->all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'student_id' => $input['student_id'],
            'role_id' => '1',
        ]);
        // 3
        $token = $user->createToken($request->device_name)->plainTextToken;
        // 4
        return response()->json(['token' => $token], 200);
    }


    // log in function
    public function token(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'device_name' => ['required', 'string']
        ]);
        // 1
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        // 2
        $user = User::where('email', '=', $request->email)->first();
        // 3
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'the provided credentials are incorrent'], 422);
        }
        // 4
        return response()->json(['token' => $user->createToken($request->device_name)->plainTextToken]);
    }
}
