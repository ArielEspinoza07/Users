@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="glyphicon glyphicon-user"></i> {{ Auth::user()->username }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/setting')}}"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
            <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
    </li>
@endif
