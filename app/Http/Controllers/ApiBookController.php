<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;
use App\Models\Book;

class ApiBookController extends Controller
{
    
    public function get_book(Request $request){
        $varifies = UserAccount::where('role_id', 3)->get();
        
        foreach($varifies as $varify){
                $email = 0;
                if($varify -> user_email == $request -> input('adminEmail')){
                    $email = 1;
                }

                if($email){
                    if($varify -> user_pwd == $request -> input('adminPassword')){
                        $bookData = Book::get();

                        return response()->json([
                            "message" => $bookData
                        ]);
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
