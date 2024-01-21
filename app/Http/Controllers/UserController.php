<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator; 

class UserController extends Controller
{
    public function loginuser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        $input = $request->all();
        
        if(Auth::attempt($input)){
            $user = Auth::user();
            $token = $user->createToken('Token Name')->accessToken;
            return response()->json(['status' => 200, 'token'=> $token, 'message' => 'Login Successful', 'user' => $user]);
        }
        
        
        return response()->json(['status' => false, 'message' => 'Invalid credentials']);
     

        

    }
}
