<div class="col-md-4">
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Personal Settings</div>

    <!-- List group -->
    <ul class="list-group">
      <li class="list-group-item"><a href="{{url('setting')}}">Profile</a></li>
      <li class="list-group-item"><a href="{{URL::to('setting/' . Auth::user()->id . '/edit')}}">Account settings</a></li>
    </ul>
  </div>
</div>
