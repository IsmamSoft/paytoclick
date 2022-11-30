@extends('admin.master')

@section('content')
<div class="container py-4">
        <div class="card">
           <div class="card-header"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">   Add Video
        </button>
    </div>
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
            <th scope="col">Video</th>
            <th scope="col">views</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">
            @php
                $videos = App\PTCVideo::paginate(5);
            @endphp
    @foreach ($videos as $key=> $item)
    <tr>
        <td>
        <div class="embed-responsive embed-responsive-16b93">
            <iframe class="embed-responsive-item" src="{{asset('public')}}/{{$item->video}}" controls="true" allowfullscreen></iframe>
        </div>
        </td>
        <td> {{$item->views}} </td>
        <td>  </td>
        <td>  </td>
    </tr>
    @endforeach
        </tbody>
      </table>
  
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Video</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('admin.uploadVideo') }}" enctype="multipart/form-data" >
            {{ csrf_field() }}
        <div class="modal-body">
        <input type="file" name="video" class="form-control-file">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
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
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
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
