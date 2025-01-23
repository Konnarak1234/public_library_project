@extends('layout.Back-header')

  <!-- Styles -->
  <style>
        .body {
            font-family: Arial, sans-serif;
            margin-top:50px;
        }
        .section {
            margin-top: 100px;
        }
        .section h2 {
            color: green;
        }
        .books {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth; /* Optional: Adds smooth scrolling effect */
            padding: 10px;
        }
        .books img {
            width: 200px;
            height: 250px;
            margin-right: 10px;
            flex: 0 0 auto; /* Ensures the images don't shrink and stay in a row */
            background-color: #E3E3E3;
        }
        .resources {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .resources img {
            width: 100px;
            width: 150px;
            height: 200px;
            margin-right: 10px;
            flex: 0 0 auto; /* Ensures the images don't shrink and stay in a row */
            background-color: #E3E3E3;
        }
    </style>
  <!-- Navigation -->


@section('content') 


@foreach($category as $cate)
    <div class="section">
        <h2>{{ $cate -> cate_name}}</h2>
        <p>{{ $cate -> cate_description}}</p>

        
            <div class="scroll-container">
                    <div class="books" id="">
                        @foreach($books as $book)
                            @if($book -> book_cate_id == $cate -> id)

                                <a href="{{ url('adminBookReview/'.$book -> id.'/view')}}">
                                    <img src="{{ $book -> book_image }}" alt="image">
                                </a>
                            
                            @endif

                        @endforeach
                    </div>
            
            </div>
      
    </div>   
 @endforeach



    @endsection

    <!-- Footer -->
