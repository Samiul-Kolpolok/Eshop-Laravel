@extends('master')


@section('content')

<div class="container mt-5">
  <div class="row justify-content-center mt-5">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">login</h1>
        </div>
        <div class="card-body">
          @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
              {{ Session::get('message') }}
            </div>
          @endif
          <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
              <div class="d-grid">
                <button class="btn btn-primary">login</button>
              </div>
            </div>
          </form>
          <a class="d-flex justify-content-center" href="{{route('register')}}"><span>Register Here</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection