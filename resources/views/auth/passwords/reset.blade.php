@extends('auth.layout')

@section('head_title', 'Reset Password')

@section('content')

<div class="card card-login mx-auto mt-5">
    <div class="card-header">Reset password</div>
    <div class="card-body">
        <form method="POST" action="{{ route('password.request') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label>Email</label>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus type="email" placeholder="Enter email">
                @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>New password</label>
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" placeholder="New Password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Confirm new password</label>
                <input class="form-control" type="password" name="password_confirmation" required placeholder="Confirm New Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        </form>
    </div>
</div>
@endsection
