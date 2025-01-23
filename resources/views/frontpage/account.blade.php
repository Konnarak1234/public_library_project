@extends('layout.Front-header')

<style>
    * {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .main-box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
        padding: 20px;
    }

    .form-box {
        width: 100%;
        max-width: 500px;
        padding: 30px;
        background-color: white;
        border-radius: 15px;
        box-shadow: rgba(21, 113, 204, 0.4) 0px 2px 4px, rgba(10, 121, 181, 0.3) 0px 7px 13px -3px, rgba(0, 135, 245, 0.2) 0px -3px 0px inset;
    }

    h1 {
        text-align: center;
    }

    p {
        text-align: center;
    }


    input[type=text],
    input[type=password] {
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 0;
        border-radius: 5px;
    }


    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    button {
        float: right;
        background-color: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
    }

    button:hover {
        opacity: .7;
    }

    .cancelbtn {
        background-color: #f44336;
        border-radius: 10px;
    }

    .cancelbtn,
    .signupbtn {
        float: none;
        width: 100%;
        height: 40px;
        border-radius: 10px;
        margin: 5px 0;
    }

    .container {
        padding: 16px;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .input-con{
        margin-top: 15px;
    }
</style>


@section('content')

@if($auth -> role_id != 1)
    <div class="main-box">
        <div  style="border:1px solid #ccc;" class="form-box">
            <div class="container">
                    <div style="display:flex; flex-direction:column;">
                        <div style="display:flex; justify-content:center; flex-direction:column; align-items:center;">
                        
                            <img src={{ asset($user -> user_img)}} alt="Profile Picture"
                            style=" border-radius: 50%; width:100px; height:100px; margin-right:10px">

                            {{-- <img src={{asset('external-images/Thelostandfound.jpg')}} alt="Profile Picture"
                            style=" border-radius: 50%; width:100px; height:100px; margin-right:10px"> --}}

                            <div style="display:flex; justify-content:center">
                                <label for="Name" style="font-weight:bold">{{ $user -> user_name}}</label>
                            </div>

                            <form action={{ url('uplaod/profile/'.$auth -> user_id)}} method="post" enctype='multipart/form-data'>
                                @csrf
                                <input type="file" name="profile" style="width:300px; height:70px; margin-top:-80px; opacity:0;">
                                <button type="submit" style="margin-top: 20px;" class="btn w-100 btn-primary">Upload</button>
                            </form>

                        </div>

                        <div style="height:20px;">

                        </div>

                      {{-- here --}}
                        
                
                    </div>
                

                <hr style="border-color: #333">

                
                <div class="input-con">
                    <label for="Username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="userName" required value={{ $user -> user_name}} readonly>
                    <a href="rename">change name</a>
                </div>

                <div class="input-con">
                    <label for="Email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="userEmail" required value={{ $user -> user_email}} readonly>
                </div>

            
                <div class="input-con">
                    <label for="Password"><b>Password</b></label>
                    <input type="Password" placeholder="Enter Password" name="userPassword" required value={{ $user -> user_pwd}} readonly>
                    <a href="newPassword">change password</a>
                </div>
                
                <div class="input-con">
                    <label for="telephone"><b>Telephone</b></label>
                    <input type="text" placeholder="phone number" name="phoneNumber" required value={{ $user -> user_tel}} readonly>
                    <a href="newTelephone">change PhoneNumber</a>
                </div>
                

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

                <p>By creating an account you agree to our <a href="" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    {{-- <button type="button" class="cancelbtn" style="background:#FE5E3C; "><a href="{{ url('userList') }}">Cancel</a></button> --}}

                        <a href="/logout" class="btn w-100 btn-danger ">Log out</a>
                    
                </div>
            </div>
        </div>

    </div>
    
    </div>
@else
    <div class="main-box">
        <div style="border:1px solid #ccc;" class="form-box">
            <div class="container">
                    <div style="display:flex; flex-direction:column;">
                        <div style="display:flex; justify-content:center; flex-direction:column; align-items:center;">
                        
                            <img src="{{ asset($user -> user_img)}}" alt="Profile Picture"
                            style=" border-radius: 50%; width:100px;">
                            <form action="#" method="post">
                                <input type="file" style="width:300px; height:70px; margin-top:-80px; opacity:0;">
                            </form>

                        </div>

                        <div style="height:20px;">

                        </div>

                        <div style="display:flex; justify-content:center">
                        <label for="Name" style="font-weight:bold">User Name</label>
                        </div>
                        
                
                    </div>
                

                <hr style="border-color: #333">

                
                <div class="input-con">
                    <label for="Username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="userName" readonly>
                    <a href="rename">change name</a>
                </div>

                <div class="input-con">
                    <label for="Email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="userEmail" readonly>
                </div>

            
                <div class="input-con">
                    <label for="Password"><b>Password</b></label>
                    <input type="Password" placeholder="Enter Password" name="userPassword" readonly>
                    <a href="newPassword">change password</a>
                </div>
                
                <div class="input-con">
                    <label for="telephone"><b>Telephone</b></label>
                    <input type="text" placeholder="phone number" name="phoneNumber" readonly>
                    <a href="newTelephone">change PhoneNumber</a>
                </div>
                

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

                <p>By creating an account you agree to our <a href="" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    {{-- <button type="button" class="cancelbtn" style="background:#FE5E3C; "><a href="{{ url('userList') }}">Cancel</a></button> --}}

                        <a href="/logout" class="btn w-100 btn-danger ">Log out</a>
                    
                </div>
            </div>
        </div>

    </div>
    
    </div>
@endif

@endsection