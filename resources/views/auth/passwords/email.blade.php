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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail_outline</i>
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
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
                        <div class="input-field col s12">
                            <button type="submit" class="btn waves-effect waves-light col s12">
                                Send Password Reset Link
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
