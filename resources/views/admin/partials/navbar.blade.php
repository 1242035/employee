<ul class="nav navbar-nav">
    <li class="active"><a href="/">Home</a></li>
    @if (Auth::check())
        <li @if (Request::is('admin/Department*')) class="active" @endif>
            <a href="/admin/departments">Departments</a>
        </li>
    @endif
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
            <li><a href="/auth/logout">Logout</a></li>
            <li><a href="/auth/adduser">Add Admin</a></li>
        </ul>
    </li>
  @endif
</ul>