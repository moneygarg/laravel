@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="main-login">
        <div class="col-md-4">
                
        </div>
        
        <div class="col-md-4 login-info">
                 <div class="form-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class=" control-label">E-Mail Address</label>

                           
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class=" control-label">Password</label>

                          
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
                            
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                           
                        </div>

                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary">
                                    OPEN
                                </button>
                            
<!--                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>-->
                          
                        </div>
                    </form>
                </div>
        
        </div>
            <div class="col-md-4">
                
        </div>
            </div>
    </div>
</div>
@endsection
