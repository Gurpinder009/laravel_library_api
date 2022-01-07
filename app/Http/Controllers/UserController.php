<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        return response()->json(User::all());
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required|alpha|min:3",
            "email" => "required|email",
            "phone_num" => "required|min:10",
            "address" => "required|min:3",
            "password" => "required|min:8",
        ]);
        $user = new User();
        $user->user_name = $request->name;
        $user->user_email = $request->email;
        $user->user_phone_num = $request->phone_num;
        $user->user_password= Hash::make($request->password);
        $user->user_address = $request->address;
        return response()->json($user->save());
    }

    public function show(int $id){
        return response()->json(User::find($id));
    }

    public function update(Request $request, int $id){
        $request->validate([
            "name" => "alpha|min:3",
            "email" => "email",
            "phone_num" => "min:10",
            "address" => "min:3",
            "password" => "min:8|",
        ]);

        $user = User::find($id);
        $user->user_name = $request->name;
        $user->user_email = $request->email;
        $user->user_phone_num = $request->phone_num;
        $user->user_password= Hash::make($request->password);
        $user->user_address = $request->address;
        return response()->json($user->update());
    }

    public function destroy(int $id){
        return response()->json(User::destroy($id));
    }

    public function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8"
        ]);
        $user = User::where("user_email",$request->email)->first();
        if($user?->user_name){
            if(Hash::check($request->password, $user->user_password)){
                $token = $user->createToken($user->user_email);
                return response()->json(['token' => $token->plainTextToken]);
            }
        }
        abort(404,"invalid creditionals");
    }

    public function logout(Request $request){
        return response()->json($request->user()->currentAccessToken()->delete());   
    }
}
