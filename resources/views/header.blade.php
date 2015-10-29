<nav class="navbar backgroundBlue opacity50">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand handwrite white inline"  href="/"><i class="fa fa-cog fa-spin fa-2x right5 text-danger"></i><span class="title">Website</span>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse lato-regularr" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                <li><a href="{{ url('contact') }}">Contact!</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                @if (Auth::user())
                <li class="dropdown white">
                    <a href="#" class="dropdown-toggle white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user right10 "></i> {{ $user->first_name }} {{ $user->last_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu backgroundBlue white">
                        <li><a href="#" class="white"><i class="fa fa-cogs right10 "></i>Settings</a></li>
                        <li><a href="#" class="white"><i class="fa fa-user right10 white"></i>Account</a></li>
                        @if ($user->admin == 1)
                            <li role="separator" class="divider backgroundTransparent"></li>
                            <li><a href="#" class="white"><i class="fa fa-wrench right10" red></i>Admin Panel</a></li>
                         @endif
                        <li role="separator" class="divider backgroundTransparent"></li>
                        <li><a href="auth/logout" class="red"><i class="fa fa-sign-out right10"></i>Logout</a></li>
                    </ul>
                </li>
                    @else
                    <li class="white {{ Request::is('auth/login') ? 'active' : '' }}"><a href="{{ url('auth/login') }}"><i class="fa fa-user right10"></i>Login</a></li><li><a href="{{ url('auth/register') }}"><i class="fa fa-pencil right10"></i>Register</a></li>
                    @endif
            </ul>
            </div>
        </div>

</nav>