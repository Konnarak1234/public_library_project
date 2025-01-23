<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAccount;


class UserController extends Controller
{
    //
    public function index(){
        return view('frontpage.register');
    }

    // public function store(Request $request){

    //     UserAccount::create([
    //         'user_name' => $request -> input('userName'),
    //         'user_email'=> $request -> input('userEmail'),
    //         'user_pwd'=> $request -> input('userPassword'),
    //         'user_tel'=> $request -> input('phoneNumber'),
    //         'role_id'=>2
    //     ]);

    //     return redirect() -> back() -> with('message', 'hello');
    // }

    public function get_user(){
        $userData = UserAccount::where('role_id', 2)->get();
        return view ('backpage.userList', compact('userData'));

    }

    public function edit(int $id){
        $editUser = UserAccount::findOrFail($id);
        return view ('backpage.userEdit', compact('editUser'));
    }

    public function update(Request $request, int $id){

        $updateUser = UserAccount::findOrFail($id);
        $updateUser -> update([
            'user_name' => $request -> input('userName'),
            'user_email'=> $request -> input('userEmail'),
            'user_pwd'=> $request -> input('userPassword'),
            // 'user_img' => "upload/userProfile/root.webp",
            'user_tel'=> $request -> input('phoneNumber')
            
        ]);

        return redirect()->back()->with('message', 'Hello');
    }

    public function delete(int $id){
        UserAccount::findOrFail($id) -> delete();
        return redirect() -> back();
    }

}
