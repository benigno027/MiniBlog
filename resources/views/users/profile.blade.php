@extends('layouts.master')

@section('title', 'Dashboard')

@section('blog_body')

    <h5>Profile: {{ $user->name }} | 
        <small>{{ $user->email }}</small>
    </h5>
    <hr>
    <h5>New password</h5>
    <form method="POST" action="{{ route('newpassword') }}">
        @csrf

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>

@endsection