@extends('layout.Front-header')
    <!-- Style -->
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        } */

        .container {
            margin-top: 120px;
            width: 30%;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-pic {
            margin-right: 20px;
        }

        .profile-pic img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .info {
            margin-top: 10px;
        }

        .info h2 {
            margin: 0;
            font-size: 1.5em;
        }

        .info table {
            margin-top: 10px;
            border-collapse: collapse;
            width: 100%;
        }

        .info table th,
        .info table td {
            text-align: left;
            padding: 8px;
        }

        .info table th {
            width: 30%;
            color: #555;
        }

        .info table td {
            width: 70%;
            color: #000;
        }

        .info table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .info .header {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
    </style>

<!-- Navigation -->
@section('content')

@if($auth -> role_id != 1)
    <div class="container">
        <div class="profile-pic">
            <a href="Uaccount"><img src="{{ asset( $user -> user_img)}}" alt="Profile Picture"></a>
        </div>
        <div class="info">
            <h2>{{ $user -> user_name}}</h2>
            <div class="header">Personal Information</div>
            <table>
                <tr>
                    <th>ID</th>
                    <td>{{ $user -> id}}</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>{{ $user -> user_name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user -> user_email}}</td>
                </tr>
                <tr>
                    <th>Phone-number</th>
                    <td>{{ $user -> user_tel}}</td>
                </tr>
                <tr>
                    <th>Card-holder</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Membership</th>
                    <td>User</td>
                </tr>
            </table>
        </div>
    </div>
@else
    <div class="container">
        <div class="profile-pic">
            <a href="Uaccount"><img src="{{ asset( $user -> user_img)}}" alt="Profile Picture"></a>
        </div>
        <div class="info">
            <h2>User Name</h2>
            <div class="header">Personal Information</div>
            <table>
                <tr>
                    <th>ID</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Phone-number</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Card-holder</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Membership</th>
                    <td>Guess</td>
                </tr>
            </table>
        </div>
    </div>
@endif

@endsection
<!-- Footer -->
