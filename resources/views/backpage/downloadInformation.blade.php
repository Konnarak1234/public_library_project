@extends('layout.Back-header')

<style>
  .position{
    margin-top: 100px;
  }
</style>

@section('content')

 
    <div class="container py-5 position">
        <header class="text-center text-black">
          <h1 class="display-7">Download Information Lists</h1>
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
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Year</th> 
                            <th scope="col">Edit/Delete</th> 
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col"></td>
                            <td scope="col">
                            ">Delete</a>
                        </td>    
                        </tr> 
                        
                        </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection