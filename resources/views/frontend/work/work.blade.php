@extends('frontend.master')
@section('style_css')

@endsection
@section('content')

<div class="container">
    <div class="row">
      <div class="col-8">
        <div class="card">

        @foreach ($videos as $video)

        <video id="video{{$video->id}}" class="vd" src="{{asset('').$video->video}}" height="200" width="200" style="margin-left: 10%;">
        </video>
        @endforeach
      </div>
      </div>


        <div class="col-4">
        <div class="card">
        <div class="card-body">


        <!--<div class="embed-responsive embed-responsive-16by9">-->
        <video id="vdo2" style="width:100%; height:350px;" class="embed-responsive-item" controls="true"></video>
        <br/>
        <!--</div>-->
         <form action="{{url('addmoney')}}/{{Auth::user()->id}}" method="POST">
          @csrf
          <input type="hidden" name="remarks" value="Watching vedio">
          <button id="btn" class="btn btn-outline-success" disabled>Submit</button>
        </form>
        Submit After 5 second


        </div>
        </div>
        </div>


    </div>
</div>



@endsection
@section('footer_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var slctVdo;
    $('.vd').click(function(){
        slctVdo = this.id;
        console.log(slctVdo);

        var video = document.getElementById(slctVdo).getAttribute('src');
        var source = document.getElementById('vdo2');
        source.setAttribute('src', video);

        source.ontimeupdate = (event) => {
            if (source.currentTime >5){
                console.log("5 seconds has elapsed!");
                document.getElementById('btn').disabled= false;
            }
        };
    });
</script>
@endsection

