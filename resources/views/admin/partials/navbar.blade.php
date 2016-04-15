<ul class="nav navbar-nav">
    <li @if (Request::is('/departments/*')) class="active" @endif>
        <a href="/departments">Departments</a>
    </li>
    <li @if (Request::is('employees*')) class="active" @endif>
        <a href="/employees">Employees</a>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
  @else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="/auth/adduser">Add Admin</a></li>
            <li><a href="/auth/logout">Logout</a></li>
            <li><a href="/change-password">Change Password</a></li>
        </ul>
    </li>
  @endif
</ul>