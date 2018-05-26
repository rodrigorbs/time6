@extends('layouts.app')

@section('titulo')
    Register
@stop

@section('conteudo')
<br>
<div class="container">
    <div class="row">
        <div class="col s3"></div>
        <div class="col s6">
            <div class="card-content black-text">
                <span class="card-title centered"><h5>Register</h5></span>
            </div>
        </div>
        <div class="col s3"></div>
    </div>

    <div class ="row">
        <div class="col s3"></div>
        <div class="col s12 m6 l6 z-depth-6 card-panel hoverable"><br>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_outline</i>
                            <label for="name" data-error="wrong" data-success="right">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_outline</i>
                            <label for="email" data-error="wrong" data-success="right">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <label for="password" class="col-md-4 control-label" >Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-field col s12" >
                            <i class="material-icons prefix">lock_outline</i>
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light col s12">
                            Register
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <a class="btn waves-effect waves-light col s12" href="{{ route('login') }}">
                            Come Back
                        </a>
                    </div>
                </div>
                <br>
            </form>
        </div>
        <div class="col s3"></div>
    </div>
</div>

@endsection
