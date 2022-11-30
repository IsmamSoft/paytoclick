@extends('admin.master')
@section('style_css')
  {{-- Datatable --}}
  <link href="{{ asset('assets/datatable/css/dataTables.css')}}" rel="stylesheet"/>
  <script src="{{ asset('assets/datatable/js/dataTables.js')}}"></script>
 @endsection
@section('content')
<div class="container py-4">
        <div class="card">
            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="col-md-12 py-4">
    <table class="table" id="myTable">
        <thead style="text-align: center;">
          <tr>
             <th scope="col">SL.</th>
             <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">email</th>
            <th scope="col">Package</th>
            <th scope="col">Verified</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
    @foreach ($users as $key=> $item)
    <tr>
        <td> {{$users->firstItem()+$key}} </td>
        <td> {{$item->name}} </td>
        <td> {{implode(',', $item->roles()->get()->pluck('urole')->toArray()) }} </td>
        <td> {{$item->email}}</td>
        <td> {{$item->package}}</td>
        <td> @php
            if($item->verified=='on'){
                echo 'Verified';
            }else{
                echo 'Unverified';
            }
             @endphp
            {{-- {{$item->verified}} --}}
        </td>
        <td><input type="checkbox" class="toggle-class" data-id="{{ $item->id }}" data-toggle="toggle" data-on="Enabled" data-off="Disabled" {{ $item->status==true ? 'checked' : '' }}></td>
        <td>
            @can('edit-users')
            <a href="{{route('admin.users.edit', $item->id)}}"><i class="fa fa-edit"></i></a>
            @endcan
        </td>
        <td>
            @can('delete-users')

            <form action="{{ route('admin.users.destroy', $item) }}" class="float-right" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <a><i class="fa fa-trash" aria-hidden="true"></i></a>
                </form>
            @endcan
        </td>
    </tr>
    @endforeach
        </tbody>
      </table>
    {{ $item->links }}
</div>
</div>
</div>
@endsection
@section('footer_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.0/sweetalert2.all.js" integrity="sha512-IblPiNTm1j2mueZvW+KofjJvtzwq1i0mVDToVo4DHHUJ3ckekgkUqtlbYX3GvtYhlx4STuxupiNWfMbUdUhX7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script>
Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
</script> --}}

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

<script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
         on: 'Enabled',
        off: 'Disabled'
      });
    });

    $('.toggle-class').on('change', function(){
        var status=$(this).prop('checked')==true ? 1 : 0;
        var user_id=$(this).data('id');

        $.ajax({
            type:'GET',
            dataType:'json',
            url: '{{ route('changestatus')}}',
            data: {'status':status , 'user_id':user_id},
            success:function(data){
                console.log(data);
            }
        });
    });
  </script>

@endsection

{{-- 
@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @can('manage-users')
        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
            User Managment
            </a>
        @endcan

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest --}}