@extends('layouts.app')

@section('title', 'Pass Reset')

@section('content')
<div class="container pt-lg">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-5">

      <div class="card shadow zindex-100">
        <div class="card-body px-md-5 py-5">
          <div class="text-center mb-5">
            <h6 class="h3">Password reset</h6>
            <p class="text-muted mb-0">Enter your email below to proceed</p>
          </div>
          <span class="clearfix"></span>



          <form role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="form-control-label">Email address</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input name="email" type="email" class="form-control" id="input-email" placeholder="name@example.com" value="{{ $email or old('email') }}" required>
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
            <div class="text-center mb-3">
              <button type="submit" class="btn btn-block btn-primary">Reset password</button>
            </div>
          </form>

        </div>
      </div>



    </div>
  </div>
</div>
@endsection
