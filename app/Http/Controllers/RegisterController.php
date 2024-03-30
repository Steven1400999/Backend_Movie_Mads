<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class RegisterController extends ResponseController
{
    /**
     * Display a listing of the resource.
     */

    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendError(
                'Validation Error.',
                $validator->errors()
            );
        }
        $existingemail = User::where('email', $request->email)->first();

        if ($existingemail) {
            return response()->json(['message' => 'Email already exists'], 409);
        }


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('MyApp')->accessToken;
        
        return response()->json([
            'token'=> $token,
            'id'=>$user->id,
            'name'=>$user->name,
            'role'=>$user->role,
            'messagge' =>'Register succesful'],200);

    }

    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            Cookie::queue('access_token', $token, 60);

            return response()->json([
                'token'=> $token,
                'id'=>$user->id,
                'name'=>$user->name,
                'role'=>$user->role,
                'messagge' =>'Login succesful'],200);
    
        } else {
            return $this->sendError(
                'Unauthorized.',
                ['error' => 'Unauthorized']
            );
            alert('Invalid Email or password.');
        }
    }
}