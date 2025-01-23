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
            align-items: flex-start;
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

        .book-image{
            margin-right: 10px;
        }
        .book-button{
            margin-top:10px;
        }
    </style>

@section('content')

    <div class="container">
        <div class="book">
            <div class="book-image">
                <img src="{{ asset($book -> book_image)}}" alt="image">
                <div class="book-button">

                    @if(session('message'))
                        <div class="alert alert-success text-center">
                            Add to Cart
                        </div>
                    @elseif(session('available'))
                        <div class="alert alert-warning text-center">
                            Book Exist
                        </div>
                    @elseif(session('fail'))
                        <div class="alert alert-danger text-center">
                            Create Account first
                        </div>
                    @endif
                   <a href="{{ url('add/cart/'.$book -> id)}}" class="btn w-100 btn-primary">Add to Cart</a>

                    @if( !($book -> book_source))
                    <a href="#" class="btn w-100 btn-success" style="margin-top:6px;">Download</a>
                    @else

                   <a href="{{ url( $book -> book_source )}}" class="btn w-100 btn-success" style="margin-top:6px;">Download</a>
                   @endif
                </div>
            </div>{{--Book image--}}
            <div class="book-info">
                <h2>{{ $book -> book_name}}</h2> {{--Book name--}}
                <table>
                    <tr>
                        <th>ID</th>
                        <td>#{{ $book -> id}}</td>{{--ID number--}}
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $category -> cate_name}}</td>{{--Category name--}}
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>{{ $book -> book_author}}</td>{{--Author name--}}
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td>{{ $book -> book_publiser}}</td>{{--Publiser name--}}
                    </tr>
                    <tr>
                        <th>Update at</th>
                        <td>{{ $book -> updated_at}}</td>{{--create--}}
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $book -> book_description}}</td>{{--Description--}}
                    </tr>
                    <tr>
                        <th>Available</th>
                        <td>
                            @if( $book -> book_source)
                                Available
                            @else
                                Not Available
                            @endif
                        </td>{{--Available--}}
                    </tr>
                </table>
            </div>
        </div>

    </div>

@endsection
