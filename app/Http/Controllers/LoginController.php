<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticator;
use App\Models\UserAccount;

class LoginController extends Controller
{
    public function login(Request $request){

        $userData = UserAccount::get(); // get all user data to select the authentication

        foreach($userData as $user){

            if($user->user_email == $request->input('userEmail')){
                $authenticate = $user; // get that user data by email

                if($authenticate->user_pwd != $request -> input('Password')){
                    return redirect()->back()->with('error', 'error');
                } else{

                    $currentAuth = Authenticator::findOrFail(1);
                    $currentAuth -> update([
                        'user_id' => $authenticate -> id,
                        'role_id' => $authenticate -> role_id
                    ]);
                    
                } // get the current authenticator

                if($currentAuth -> role_id == 2){
                    return redirect('/');
                }
                else if($currentAuth -> role_id == 3){
                    return redirect('/backhomepage');
                }
            }

        }   

        return redirect()->back()->with('error', 'error email');
    }

    public function loginPage(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.form', compact('user', 'auth'));
    }

    public function logout(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);
        $auth -> update([
            'user_id' => 1,
            'role_id' => 1
        ]);

        return view('frontpage.form', compact('user', 'auth'));

    }


}
