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

     public function register (Request $request):JsonResponse{
        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'c_password'=> 'required|same:password',
            'rol_id'=> 'required',

        ]);

        if ($validator->fails()){
            return $this->sendError('Validation Error.',
            $validator->errors());
        }
        
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendRequest($success,'User register successfully.');
    }

    public function login(Request $request):JsonResponse{
        if (Auth::attempt(['email' => $request->email, 'password'=>$request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;
            $success['rol_id'] = $user->rol_id;
         



            return $this->sendRequest($success,
            'User login successfully.');
        }else{
            return $this->sendError('Unauthorized.',
            ['error'=>'Unauthorized']);
        }
    }
}