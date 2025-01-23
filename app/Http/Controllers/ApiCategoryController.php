<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Book;
use App\Models\UserAccount;

class ApiCategoryController extends Controller
{
    

    public function get_category(Request $request){
        
        $books = Book::get();

        $varifies = UserAccount::where('role_id', 3)->get();
    
        foreach($varifies as $varify){
            $email = 0;
            if($varify -> user_email == $request -> input('adminEmail')){
                $email = 1;
            }

            if($email){
                if($varify -> user_pwd == $request -> input('adminPassword')){
                    $category = BookCategory::get();

                    return response()->json([
                        "message" => $category
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


    public function create_category(Request $request){
        $varifies = UserAccount::where('role_id', 3)->get();
    
        foreach($varifies as $varify){
            $email = 0;
            if($varify -> user_email == $request -> input('adminEmail')){
                $email = 1;
            }

            if($email){
                if($varify -> user_pwd == $request -> input('adminPassword')){

                        $category = new BookCategory();
                        $category -> create([
                            'cate_name' => $request -> input('categoryName'),
                            'cate_description' => $request -> input('categoryDescription'),
                         ]);
                         return response()->json([
                            "message" => "Book create successful"
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
