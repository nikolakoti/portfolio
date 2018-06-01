@extends('auth.layout')

@section('head_title', 'Forgot Password')

@section('content')

<div class="card card-login mx-auto mt-5">
    <div class="card-header">Reset Password</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"  name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
        </form>
    </div>
</div>
@endsection
