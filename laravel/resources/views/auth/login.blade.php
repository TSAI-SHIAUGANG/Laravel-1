@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container pt-lg">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-4">

      <div class="card shadow zindex-100">
        <div class="card-body px-md-5 py-5">
          <div class="text-center mb-5">
            <h6 class="h3">Welcome back</h6>
            <p class="text-muted mb-0">Sign in to your account to continue</p>
          </div>
          <span class="clearfix"></span>



          <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
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
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <label class="form-control-label">Password</label>
                </div>
                <div class="mb-2">
                  <a href="{{ route('password.request') }}" class="small text-light text-unerline--dashed">Lost password?</a>
                </div>
              </div>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input name="password" type="password" class="form-control" id="input-password" placeholder="Password">
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
            <div class="text-center mb-3">
              <button type="submit" class="btn btn-block btn-primary">Sign in</button>
            </div>
            <div class="text-center">
              <small>Not registered?</small>
              <a href="{{ route('register') }}" class="small font-weight-bold">Create account</a>
            </div>
          </form>




        </div>
      </div>



    </div>
  </div>
</div>
@endsection
