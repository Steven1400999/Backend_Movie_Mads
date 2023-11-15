<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'rol_id' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendError(
                'Validation Error.',
                $validator->errors()
            );
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('MyApp')->accessToken;
        
        return response()->json([
            'token'=> $token,
            'id'=>$user->id,
            'name'=>$user->name,
            'rol_id'=>$user->rol_id,
            'messagge' =>'Register succesful'],200);

    }

    public function login(Request $request): JsonResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json([
                'token'=> $token,
                'id'=>$user->id,
                'name'=>$user->name,
                'rol_id'=>$user->rol_id,
                'messagge' =>'Login succesful'],200);
    
        } else {
            return $this->sendError(
                'Unauthorized.',
                ['error' => 'Unauthorized']
            );
        }
    }
}