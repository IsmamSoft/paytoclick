<ul class="list-group">
    <li class="list-group-item"><a href="{{url('profile/general')}}/{{Auth::user()->name}}">General</a></li>
    <li class="list-group-item"><a href="{{url('profile/contact')}}/{{Auth::user()->name}}">Email and Phone</a></li>
    <li class="list-group-item"><a href="{{url('change-password')}}">Security</a></li>
  </ul>