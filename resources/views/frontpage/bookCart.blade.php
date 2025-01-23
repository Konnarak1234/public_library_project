@extends('layout.Front-header')
    <style>
        body {
            padding-top: 150px;
            font-family: Arial, sans-serif;
            justify-content: center;
            margin-top: 1200px;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 120px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 60%;
            margin-top: 20px;
        }

        .book {
            display: flex;
            margin-bottom: 40px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .book img {
            width: 150px;
            height: 200px;
            margin-right: 20px;
            border-radius: 10px;
        }

        .book-info {
            width: calc(100% - 170px);
        }

        .book-info h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
        }

        .book-info table {
            border-collapse: collapse;
            width: 100%;
        }

        .book-info table th,
        .book-info table td {
            text-align: left;
            padding: 8px;
            vertical-align: top;
        }

        .book-info table th {
            width: 30%;
            color: #555;
        }

        .book-info table td {
            width: 70%;
            color: #000;
        }

        .book-info table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .book-info .header {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .description {
            margin-top: 10px;
            color: #333;
        }
    </style>

@section('content')



<div class="container" style="background-color: black; border-radius:5%">
        <div>
            <header class="text-center text-white">
                <h1 class="display-7">User Books Cart</h1>
              </header>
        </div>
        <div style="height:50px;">

        </div>
     
    @foreach($allBook as $book)
        
        <div class="book">
            <div style="margin-right:10px;">
                <img src="{{ asset($book -> book_image)}}" alt="Atomic Habits">
                <div>
                    <a href="{{ url('remove/cart/'.$auth -> user_id.'/'.$book -> id)}}" class="btn w-100 btn-danger" style="margin-top:20px;">Remove</a>
                    <div class="btn w-100 btn-success" style="margin-top:10px;">Download</div>
                </div>
                
            </div>        
            <div class="book-info">
                <h2>{{ $book -> book_name}}</h2>
                <table>
                    <tr>
                        <th>Authors</th>
                        <td>{{ $book -> book_author}}</td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td>{{ $book -> book_publisher}}</td>
                    </tr>
                    <tr>
                        <th>Categories</th>
                        @foreach($category as $cate)
                            @if($cate -> id ==  $book -> book_cate_id)
                                <td>{{ $cate -> cate_name}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>Language</th>
                        <td>English</td>
                    </tr>
                    <tr>
                        <th>Available</th>
                        <td>828</td>
                    </tr>
                </table>
                <div class="description">
                    {{ $book -> book_description}}
                </div>
            </div>
        </div>
        @endforeach

</div>



@endsection
