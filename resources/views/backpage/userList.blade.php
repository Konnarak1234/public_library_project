@extends('layout.Back-header')

<style>
  .position{
    margin-top: 100px;
  }
</style>

@section('content')
  

    <div class="container py-5 position">
        <header class="text-center text-black">
          <h1 class="display-7">User Lists</h1>
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
                            <th scope="col">UserName</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Option</th> 
                        </tr>
                        </thead>
                        <tbody>

                          @foreach($userData as $datas)
                        <tr>
                            <td scope="col">{{ $datas -> id}}</td>
                            <td scope="col">{{ $datas -> user_name}}</td>
                            <td scope="col">{{ $datas -> user_email}}</td>
                            <td scope="col">{{ $datas -> user_pwd}}</td>
                            <td scope="col">{{ $datas -> user_tel}}</td>
                            <td scope="col">
                              <a href="#">
                                <img src="{{ asset($datas -> user_img)}}" alt="image" 
                                style="width:40px; height=40px; margin-left:20%;">
                              </a></td>
                            <td scope="col">
                              <a href="{{ url('user/'.$datas -> id.'/edit')}}" class="btn btn-primary">Edit</a>
                              <a href="{{ url('user/'.$datas -> id.'/delete') }}" class="btn btn-primary">Delete</a>
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