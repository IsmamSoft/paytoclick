@extends('admin.master')
@section('style_css')
<style>
    .sh{
    -webkit-box-shadow: 1px 4px 11px -1px #000000; 
    box-shadow: 1px 4px 11px -1px #000000;}
</style>
@endsection
@section('content')
<div class="container py-4">
    <div class="row">

       <div class="col-8">
        <div class="card sh">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Oparetor</th>
                    <th scope="col">Wallet Amount</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($amount as $amm)     
                  <tr>
                    <td>{{ $amm->mobile }}</td>
                    <td>{{ $amm->name }}</td>
                    <td>{{ $amm->email }}</td>
                    <td>{{ $amm->oparetor }}</td>
                    <td>{{ $amm->wallet_amount }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
       </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="announce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Today's Announcement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('admin.announce')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">New Message</label>
                <input type="text" class="form-control" placeholder="New Message" name="new_message">
            </div>
            <div class="mb-3">
                <label class="form-label">Package</label>
                <select style="border-radius: 25px;" name="package" class="form-control">
                    <option selected>Select One..</option>
                    <option value="play">Play</option>
                    <option value="silver">Silver</option>
                    <option value="gold">Gold</option>
                    <option value="diamond">Diamond</option>
                    <option value="vip">VIP</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Offer</label>
                <input type="text" class="form-control" placeholder="Offer" name="offer">
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-primary" style="border-radius: 25px;">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
