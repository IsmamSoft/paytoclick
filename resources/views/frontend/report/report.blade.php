@extends('frontend.master')
@section('style_css')

@endsection
@section('content')
<div class="container">
  <table class="table">
    {{-- <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">Cashout Report</th>
        <th scope="col">Generation Repors</th>
        <th scope="col">All Income Report</th>
      </tr>
    </thead> --}}
    <tbody>
        <tr>

            <td>Sponsor Report</td>
            <td><button class="btn btn-success" type="button">View</button></td>

          </tr>
     <tr>

        <td>Cashout Report</td>
        <td><button class="btn btn-success" type="button">View</button></td>

      </tr>
      <tr>
        <td>Generation Repors</td>
        <td><button class="btn btn-success" type="button">View</button></td>
      </tr>
      <tr>
        <td>All Income Report</td>
        <td><button class="btn btn-success" type="button">View</button></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
@section('footer_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

