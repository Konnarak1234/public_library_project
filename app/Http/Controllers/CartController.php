<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Book;
use App\Models\Authenticator;
use App\Models\UserAccount;
use App\Models\Cart;

class CartController extends Controller
{
    
    public function addCart(int $id){
        $auth = Authenticator::findOrFail(1);
        $book = Book::findorFail($id);
        $user = UserAccount::findOrFail($auth->user_id);
        $carts = Cart::get();

        if($auth -> role_id == 1){

                return redirect()->back()->with('fail', 'fail');
                // $error = 1;
                // return view('frontpage.bookReviewCart', compact('book', 'category', 'error'));

        } else {
            
                $available = 0;
                foreach($carts as $cart){
                        if($cart -> book_id == $book -> id and $cart -> user_id == $user -> id){ // fix the bug
                            $available++;
                        }
                }

                if($available){
                        return redirect()->back()->with('available', 'available');
                        // return view('frontpage.bookReviewCart', compact('book', 'category', 'available'));
                } else{
                    $addCart = new Cart();
                    $addCart -> create([
                        'user_id' => $user -> id,
                        'book_id' => $book -> id
                    ]);

                        return redirect()->back()->with('message', 'hello');
                }
        }
    }


    public function getCart(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth->user_id);
        $carts = Cart::where('user_id', $user -> id)->get();
        $category = BookCategory::get();

        $allBook = array();
        foreach($carts as $cart){
            $allBook[] = Book::findOrFail($cart -> book_id);
        }

        return view('frontpage.bookCart', compact('allBook', 'category', 'auth'));
    }

    public function removeCart(int $user, int $book){
        $carts = Cart::where('user_id', $user)->get();
        foreach($carts as $cart){
            if($cart -> book_id == $book){
                $cart -> delete();
                return redirect()->back();
            }
        }
    }



}
