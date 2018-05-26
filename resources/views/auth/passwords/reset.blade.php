@extends('layouts.app')

@section('titulo')
    Reset Password
@stop

@section('conteudo')
    <br>
    <div class="container">
        <div class="row">
            <div class="col s3"></div>
            <div class="col s6">
                <div class="card-content black-text">
                    <span class="card-title centered"><h5>Reset Password</h5></span>
                </div>
            </div>
            <div class="col s3"></div>
        </div>

        <div class ="row">
            <div class="col s3"></div>
            <div class="col s12 m6 l6 z-depth-6 card-panel hoverable"><br>
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person_outline</i>
                                <label for="email" data-error="wrong" data-success="right">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
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
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="input-field col s12" >
                                <i class="material-icons prefix">lock_outline</i>
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light col s12">
                                Reset Password
                            </button>
                        </div>
                    </div>

                    <br>
                </form>
            </div>
            <div class="col s3"></div>
        </div>
    </div>

@endsection
