<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;

class ApiUserController extends Controller
{
    public function testing(){
        $userData = UserAccount::where('role_id', 2)->get();
        return $userData;
    }
    
    //
    public function get_user(Request $request){
        $varifies = UserAccount::where('role_id', 3)->get();
        $userData = UserAccount::where('role_id', 2)->get();
    
        foreach($varifies as $varify){
            $email = 0;
            if($varify -> user_email == $request -> input('adminEmail')){
                $email = 1;
            }

            if($email){
                if($varify -> user_pwd == $request -> input('adminPassword')){
                    $userData = UserAccount::where('role_id', 2)->get();

                    return response()->json([
                        "message" => $userData
                    ]);
                } else{
                    return response()->json([
                        "message" => "Incorrect password"
                    ]);
                }
            }
        } 

        return response()->json([
            "message" => $userData
        ]);

    }

    public function create_admin(Request $request){
        $varifies = UserAccount::where('role_id', 3)->get();
    
        foreach($varifies as $varify){
            $email = 0;
            if($varify -> user_email == $request -> input('adminEmail')){
                $email = 1;
            }

            if($email){
                if($varify -> user_pwd == $request -> input('adminPassword')){

                    if($varify -> user_email == $request -> input('createEmail')){
                        return response()->json([
                            "message" => "Email already exist!"
                        ]);
                    } else{
                            $newAdmin = new UserAccount(); 
                            $newAdmin -> create([
                            'user_name' => $request -> input('createName'),
                            'user_email'=> $request -> input('createEmail'),
                            'user_pwd'=> $request -> input('userPassword'),
                            'user_tel'=> $request -> input('phoneNumber'),
                            'role_id'=>3
                        ]);

                        return response()->json([
                            "message" => "Admin Create success!"
                        ]); // logic start here
                    }
                    
                } else{
                    return response()->json([
                        "message" => "Incorrect password"
                    ]);
                }
            }
        } 

        return response()->json([
            "message" => "Incorrect email"
        ]);
    }

  

}


