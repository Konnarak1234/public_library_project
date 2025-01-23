@extends('layout.Front-header')
    <!-- Style -->
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
    input[type=password],
    input[type=email]{
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
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
</style>


<!-- Navigation -->
@section('content')

<body>
    <!-- Content -->
    <div class="main-box">
        <form action="register" method="POST" style="border:1px solid #ccc;" class="form-box">
            @csrf
            <div class="container">
                <h1 style="font-weight: bold; font-size:x-large;margin-bottom:10px;">Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                @if( session('message') )
                <div class="alert alert-success">
                     Created Success
                </div>
                @endif
                <hr>

                <label for="Username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="userName" required>

                <label for="Email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="userEmail" required>

                <label for="Password"><b>Password</b></label>
                <input type="Password" placeholder="Enter Password" name="userPassword" required>

                <label for="Password"><b>Telephone</b></label>
                <input type="text" placeholder="phone number" name="phoneNumber" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

                <p>By creating an account you agree to our <a href="" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <a href="/" class="btn w-100 btn-danger" style="color:white;">
                        @if(session('message'))
                            Back
                        @else
                            Cancel 
                        @endif
                    </a>
                    <button type="submit" class="signupbtn" style=" background:#1AB7FC;">Sign Up</button>
                </div>
            </div>
        </form>

    </div>

@endsection
<!-- Footer -->
