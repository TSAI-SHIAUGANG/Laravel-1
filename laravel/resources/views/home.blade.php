@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container pt-lg">
  @if (session('status'))
  <div class="alert alert-success">{{ session('status') }}</div>
  @else
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 col-xl-5">

      <div class="card shadow zindex-100">

        <div class="card-body px-md-5 py-5">
          <div class="text-center">
            <h6 class="h3">Hello {{ Auth::user()->name }}</h6>
            <p class="text-muted mb-0">You have already signed in</p>
          </div>
        </div>
      </div>



    </div>
  </div>
  @endif
</div>
@endsection
