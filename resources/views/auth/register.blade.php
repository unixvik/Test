@extends('../layout.master')

@section('content')
    <link rel="stylesheet" href="{!! asset('css/form.css') !!}">
    <div class="container-fluid">
        <div class="row centered-form ">
            <div class="col-sm-5 form-box col-sm-offset-3 top15">
                <div class="form-top">
                    <div class="form-top-left top10">
                        <h3>Sign up here</h3>

                        @if (count($errors) > 0)
                            <p>
                            <div class="alert alert-danger">
                                {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            </p>
                        @endif

                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil blue"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form   method="post" class="registration-form" role="form" method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="sr-only" for="form-first-name">Username</label>
                            <input type="text"  name="username" value="{{ old('username') }}" placeholder="Username..." class="form-first-name form-control" id="form-first-name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="password" placeholder="Password..." class="form-last-name form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Password</label>
                            <input type="password" name="password_confirmation" placeholder="Password..." class="form-last-name form-control" id="repeat_password">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First name..." class="form-last-name form-control" id="fn">
                        </div> <div class="form-group">
                            <label class="sr-only" for="form-last-name">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}"placeholder="Last name..." class="form-last-name form-control" id="ln">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-last-name">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}"placeholder="Email" class="form-last-name form-control" id="fn">
                        </div>
                        <button type="submit" class="btn">Register</button>

                        {{--<a class="btn btn-link " href="{{ url('/password/email') }}">Forgot Your Password?</a>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection