<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;

class RegisterController extends Controller
{
    public function register(Request $request){
        $userData = UserAccount::where('role_id', 2)->get();

        foreach($userData as $user){
            if($user -> user_email == $request -> input('userEmail')){
                $error = 1;
                return view('frontpage.registerAgain', compact('request', 'error'));
            }
        } // check if the email exist
         
        UserAccount::create([
            'user_name' => $request -> input('userName'),
            'user_email'=> $request -> input('userEmail'),
            'user_pwd'=> $request -> input('userPassword'),
            'user_tel'=> $request -> input('phoneNumber'),
            'role_id'=>2
        ]);

        return redirect() -> back() -> with('message', 'hello');
        
    }
}
