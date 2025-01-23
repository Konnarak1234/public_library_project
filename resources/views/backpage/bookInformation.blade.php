@extends('layout.Back-header')

<style>
  .position{
    margin-top: 100px;
  }
</style>

@section('content')

 
    <div class="container py-5 position">
        <header class="text-center text-black">
          <h1 class="display-7">Book Information Lists</h1>
        </header>
      </div>

      {{-- <div class="alert-1 alert-danger" role="alert">
        This is an informational alert message.
      </div> --}}

      <div class="container py-5">
        <div class="row py-5">
          <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
              <div class="card-body p-5 bg-white rounded">
                <div class="table-responsive">
                    <table id="table" style="width:100%" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">BookName</th>
                            <th scope="col">Category</th>
                            <th scope="col">Author</th>
                            <th scope="col">Publiser</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Source</th> 
                            <th scope="col">Option</th> 
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach( $bookData as $datas)
                        <tr>
                            <td scope="col">{{ $datas -> id}}</td>
                            <td scope="col">{{ $datas -> book_name}}</td>
                            <td scope="col">
                              @foreach($category as $cate)
                                    @if($cate -> id == $datas -> book_cate_id)
                                        {{ $cate -> cate_name}}
                                    @endif
                              @endforeach
                              
                            </td>
                            <td scope="col">{{ $datas -> book_author}}</td>
                            <td scope="col">{{ $datas -> book_publiser}}</td>
                            <td scope="col">{{ $datas -> book_description}}</td>
                            <td scope="col">
                              <a href="#">
                                <img src="{{ asset( $datas -> book_image)}}" alt="image" 
                                style="width:30px; height=30px; margin-left:20%;">
                              </a></td>
                            </td>
                            <td scope="col">{{ $datas -> book_source}}</td>
                            <td scope="col">
                              <a href="{{ url('bookInformation/'.$datas -> id.'/edit')}}" class="btn w-100 btn-primary">Edit</a>
                              <a href=" {{ url('bookInformation/'.$datas -> id.'/delete')}}" class="btn w-100 btn-danger" style="margin-top:10px">Delete</a>
                            </td>    
                        </tr> 
                        @endforeach
                        
                        </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection