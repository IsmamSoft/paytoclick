@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="card">
           <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="{{asset('public/user')}}/{{Auth::user()->avatar}}" style="height: 80%; width:100%;" alt=""></a>
        
        </div>
        </div><!--/col-9-->
        <div class="col-md-6">
            <div class="card">
              <div class="card-body">


                <table class="table">
                  <tbody>
                    <tr>
                      <th scope="row">Name</th>
                      <td> <h5>{{Auth::user()->name}}</h5></td>
                    </tr>
                    <tr>
                      <th scope="row">Email</th>
                      <td> <h5>{{Auth::user()->email}}</h5></td>
                    </tr>
                    <tr>
                      <th scope="row">Phone</th>
                      <td> <h5>{{Auth::user()->phone}}</h5></td>
                    </tr>
                </table>
                <a href="{{url('Settings')}}/{{Auth::user()->name}}" class="btn btn-outline-success">Settings</a>


            </div>
            </div>
        </div><!--/col-9--> 
    </div><!--/row-->                                                    
    </div><!--/row-->   

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Your Profile Picture</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('update-ava')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
         <input type="file" class="form-control-file" name="avatar">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-outline-primary">Update</button>
        </div>
       </form>
      </div>
    </div>
  </div>
@endsection
