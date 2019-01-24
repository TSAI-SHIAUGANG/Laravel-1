@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container pt-lg">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">

      <div class="card shadow zindex-100">
        <div class="card-body px-md-5 py-5">
          <div class="text-center mb-5">
            <h6 class="h3">Create your free account</h6>
            <p class="text-muted mb-0">Made by developers developers</p>
          </div>
          <span class="clearfix"></span>



          <form role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="form-control-label">Name</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-user"></i></span>
                </div>
                <input name="name" type="text" class="form-control" id="input-name" placeholder="user" value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
              <span class="help-block">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="form-control-label">Email address</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input name="email" type="email" class="form-control" id="input-email" placeholder="name@example.com" value="{{ old('email') }}">
              </div>
              @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group mb-4{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="form-control-label">Password</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input name="password" type="password" class="form-control" id="input-password" placeholder="********">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="far fa-eye"></i>
                  </span>
                </div>
              </div>
              @if ($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label class="form-control-label">Confirm password</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input name="password_confirmation" type="password" class="form-control" id="input-password-confirm" placeholder="********">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-sm-7">
                <button type="submit" class="btn btn-primary mb-3 mb-sm-0">Create account</button>
              </div>
              <div class="col-sm-5 text-sm-right">
                <span class="small d-sm-block d-md-inline">Already registered?</span>
                <a href="{{ route('login') }}" class="small font-weight-bold">Sign in</a>
              </div>
            </div>
          </form>




        </div>
      </div>



    </div>
  </div>
</div>
@endsection
