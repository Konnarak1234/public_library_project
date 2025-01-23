    <!-- Navigation -->
@extends('layout.Front-header')
<style>  
    body {
        margin: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        box-sizing: border-box;
        min-height: 100vh;
        background-color: #f8f9fa;
    }
    
    nav .navbar {
        width: 100%;
        height: 85px;
        background-color: #202c64;
    }
    
    img {
        width: 200px;
        height: 69px;
        margin-left: 10px;
    }
    
    .navbar .bar {
    
        margin-top: 5x;
        background-color: rgb(205, 229, 250);
        width: 50%;
        height: 40px;
        border-radius: 10px;
        margin-bottom: 5px;
    }
    
    .navbar .bar a {
        float: right;
        color: rgb(0, 0, 0);
        font-family: 'Bayon', sans-serif;
        text-align: center;
        margin-right: 80px;
        margin-top: 10px;
        font-weight: 900;
        text-decoration: none;
    }
    
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 190px;
        
    }
    
    .form {
        width: 100%;
        max-width: 500px;
        background-color: #fff;
        border-radius: 15px;
        padding: 30px;
        box-shadow: rgba(21, 113, 204, 0.4) 0px 2px 4px,
                    rgba(10, 121, 181, 0.3) 0px 7px 13px -3px,
                    rgba(0, 135, 245, 0.2) 0px -3px 0px inset;
    }
    
    h2 {
        text-align: center;
        margin-bottom: 40px;
    }
    
    input[type=email], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border-radius: 5px;
        background: #f1f1f1;
        border: 2px solid #ccc;
    }
    
    input[type=char]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        border: 2px solid #ccc;
    }
    
    button {
        float: right;
        background-color: #555;
        padding: 10px 15px;
        color: #00ddff;
        border-radius: 50px;
        margin-right: 10px;
        border: none;
    }
    
    button:hover {
        opacity: .7;
        border-radius: 10px;
    }
    
    .ca {
        font-size: 20px;
        display: inline-block;
        padding: 10px;
        text-decoration: none;
        color: #444;
    }
    
    .ca:hover {
        text-decoration: underline;
    }
    
    @media (max-width: 768px) {
        .form {
            padding: 20px;
        }
    
        input[type=char], input[type=password] {
            padding: 10px;
        }
    }
    
    </style>
@section('content')
    <!-- Style -->
   

@if($auth -> role_id != 1)
    <div class="form-container ">
        <div class="form ">
            <form action="/form" method="post">
                @csrf
                <h2 style="font-size:x-large;">Login</h2>
                @if(session('error'))
                <div class="alert alert-danger">
                    Login fail
                </div>
                @endif
                <label>Email</label>
                <input type="email" name="userEmail" placeholder="Useremail" value={{ $user -> user_email}}><br>
                <label>Password</label>
                <input type="Password" name="Password" placeholder="Password" value={{ $user -> user_pwd}}><br>
                <button type="submit">Login</button>
                <a href="{{ url('register')}}" class="ca">Register</a>
            </form>
        </div>
    </div>
@else
    <div class="form-container ">
        <div class="form ">
            <form action="/form" method="post">
                 @csrf
                <h2 style="font-size:x-large;">Login</h2>
                @if(session('error'))
                <div class="alert alert-danger">
                    Login fail
                </div>
                @endif
                <label>Email</label>
                <input type="email" name="userEmail" placeholder="Useremail"><br>
                <label>Password</label>
                <input type="Password" name="Password" placeholder="Password"><br>
                <button type="submit">Login</button>
                <a href="{{ url('register')}}" class="ca">Register</a>
            </form>
        </div>
    </div>
@endif

    @endsection
    <!-- Footer -->

