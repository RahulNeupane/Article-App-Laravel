@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 m-auto p-3">

                <form class="form form-control p-3" action="{{ route('login-user') }}" method="POST">
                    @csrf
                    <h3 class="text-center mb-5">Login</h3>
                    @if (Session::has('fail'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ Session::get('fail') }}
                        </div>
                    @endif                
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3 d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
