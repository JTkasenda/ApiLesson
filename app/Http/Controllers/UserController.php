<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){

        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

    $token = $user->createToken('my-app-token')->plainTextToken;

    $response = [
        "user" => $user,
        "token" => $token
    ];

    return response($response, 201);
    }

}
