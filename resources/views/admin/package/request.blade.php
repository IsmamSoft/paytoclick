@extends('admin.master')
@section('style_css')
<style>
    .sh{
    -webkit-box-shadow: 1px 4px 11px -1px #000000;
    box-shadow: 1px 4px 11px -1px #000000;
    }
</style>
@endsection
@section('content')
<div class="container py-4">

    <div class="row">

       <div class="card sh">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Quote</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Package</th>
                    <th scope="col">Oparetor</th>
                    <th scope="col">Number</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @php
                    $buypack = App\buyPackage::where('status',null)->orderBy('id', 'DESC')->get()
                @endphp
                <tbody>
                @foreach ($buypack as $buy)

                  <tr>
                    <td>{{$buy->quote}}</td>
                    <td>{{$buy->name}}</td>
                    <td>{{$buy->email}}</td>
                    <td>{{$buy->package}}</td>
                    <td>{{$buy->oparetor}}</td>
                    <td>{{$buy->number}}</td>
                    <td> <a href="{{route('admin.users.edit', $buy->id)}}"><i class="fa fa-edit"></i> Update </a> </td>
                    <td>
                    <form action="{{route('admin.package.approve',['id' => $buy->id])}}" method="POST">
                        @csrf
                        <input value="{{$buy->email}}" name="email" type="hidden">
                        <input value="{{$buy->package}}" name="name" type="hidden">
                        <button type="submit" class="btn btn-outline-success"> Approve </button>
                    </form>

                    </td>
                </tr>

                @endforeach
                </tbody>
              </table>
        </div>
       </div>

    </div>
</div>



@endsection
