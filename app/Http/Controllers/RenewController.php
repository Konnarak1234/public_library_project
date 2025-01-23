<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticator;
use App\Models\UserAccount;


class RenewController extends Controller
{
    
    public function renamePage(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.rename', compact('user', 'auth'));
   
    }

    public function rename(Request $request){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        if($request->input('userNewName') != $request->input('confirmNewName')){
            return redirect()->back()->with('fail', 'fail');
        } 
        else{
            $user -> update([
                'user_name' => $request->input('userNewName')
            ]);
        }

        return redirect()->back()->with('success', 'hello');
    }

    public function renewPasswordPage(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.newPassword', compact('user', 'auth'));
    }

    public function renewPassword(Request $request){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        if($request->input('userNewPassword') != $request->input('confirmNewPassword')){
            return redirect()->back()->with('fail', 'fail');
        } 
        else{
            $user -> update([
                'user_pwd' => $request->input('userNewPassword')
            ]);
        }

        return redirect()->back()->with('success', 'hello');
    }

    public function renewTelephonePage(){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        return view('frontpage.newTelephone', compact('user', 'auth'));
    }

    public function renewTelephone(Request $request){
        $auth = Authenticator::findOrFail(1);
        $user = UserAccount::findOrFail($auth -> user_id);

        if($request->input('userNewPhoneNumber') != $request->input('confirmNewPhoneNumber')){
            return redirect()->back()->with('fail', 'fail');
        } 
        else{
            $user -> update([
                'user_tel' => $request->input('userNewPhoneNumber')
            ]);
        }

        return redirect()->back()->with('success', 'hello');
    }
}
