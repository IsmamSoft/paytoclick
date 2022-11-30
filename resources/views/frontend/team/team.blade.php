@extends('frontend.master')
@section('style_css')

@endsection
@section('content')
<div class="container">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Direct Affiliate Member</h5>
                </div>
          <div class="card-body">
           <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                @php
                                $AffiliateMember = DB::table('users')
                                ->where('reffer_code', Auth::user()->reffer_code)
                                ->get()
                        @endphp
                               <thead>
                                  <tr>
                                      <th>Date</th>
                                      <th>Login</th>
                                      <th>Fullname</th>
                                      <th>Type</th>
                                  </tr>
                              </thead>
                                  <tbody>
                                     @if (count($AffiliateMember) > 0)
                                         @foreach($AffiliateMember as $member)

                                              <tr>
                                          <td>{{ $member->created_at}}</td>
                                          <td>{{ $member->name}}</td>

                                          <td>{{ $member->email}}</td>
                                           <td>{{ $member->package}}</td>
                                      </tr>




                                  @endforeach
                                     @else
                                     <tr>
                                         <td colspan="3">No Data Found</td>
                                      </tr>

                                     @endif


                                  </tbody>
                              </table>
                          </div>
                             </div>
          </div>
          </div>
        </div>
      </div>
    <div class="container-fluid">
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Affiliate Members
                </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                            <tbody>

                                <tr>
                                    <td>Direct Affiliate Member</td>

                                    <td>
                                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">{{ count($AffiliateMember) }}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Non Affiliate Member</td>
                                    <td>

                                            <button class="btn btn-success" type="button">{{ count($AffiliateMember) }}</button>

                                    </td>
                                 </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


  {{-- <table class="table">
      <tbody>
      <tr>
        <td>
          @php
          $user = App\User::all();
            if($user = Auth::user()->reffer_code){
              echo 'One of your Friend Just Registered Here.';
            }
          @endphp
        </td>
      </tr>
    </tbody>
  </table> --}}
</div>
@endsection
@section('footer_js')

@endsection

