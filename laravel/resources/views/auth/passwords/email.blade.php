@extends('layouts.app')

@section('title', 'Pass Reset')

@section('content')
<div class="container pt-lg">
  @if (session('status'))
  <div class="alert alert-success">{{ session('status') }}</div>
  @else
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-5">

      <div class="card shadow zindex-100">
        <div class="card-body px-md-5 py-5">
          <div class="text-center mb-5">
            <h6 class="h3">Password reset</h6>
            <p class="text-muted mb-0">Enter your email below to proceed</p>
          </div>
          <span class="clearfix"></span>



          <form role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="form-control-label">Email address</label>
              <div class="input-group input-group-transparent">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-envelope"></i></span>
                </div>
                <input name="email" type="email" class="form-control" id="input-email" placeholder="name@example.com" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="text-center mb-3">
              <button type="submit" class="btn btn-block btn-primary">Send Password Reset Link</button>
            </div>
          </form>

        </div>
      </div>



    </div>
  </div>
  @endif
</div>
@endsection
