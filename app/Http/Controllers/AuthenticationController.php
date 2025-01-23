<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticator;
use App\Models\UserAccount;
use Illuminate\Support\Facades\File;


class AuthenticationController extends Controller
{
    public function profile(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.profile', compact('auth', 'user'));
    }

    public function account(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.account', compact('auth', 'user'));
    }

    public function adminAccount(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('backpage.account', compact('auth', 'user'));
    }

    public function uploadProfile(Request $request, int $id){
            $user = UserAccount::findOrFail($id);
            $path = 'upload/userProfile/';

        if($request -> has('profile')){
            if($user -> user_img != $path."root.jpg"){
                File::delete($user -> user_img);
            }

            $file = $request -> file('profile');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move($path, $filename);
        }  

        $user -> update(
            [
                "user_img" => $path.$filename
            ]
        );
        
        return redirect()->back();
    }

    
}
