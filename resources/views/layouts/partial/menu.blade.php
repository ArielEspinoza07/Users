@if(!Auth::guest())
<ul class="nav navbar-nav">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="glyphicon glyphicon-tasks"></i> Security <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="{{url('/user')}}"><i class="glyphicon glyphicon-user"></i> Users</a></li>
      <li><a href="{{url('/role')}}"><i class="glyphicon glyphicon-sort-by-alphabet"></i> Roles</a></li>
      <li><a href="{{url('/permission')}}"><i class="glyphicon glyphicon-list-alt"></i> Permission</a></li>
    </ul>
  </li>
</ul>
@endif
