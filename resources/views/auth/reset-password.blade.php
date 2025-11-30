@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
<div class="card w-96 bg-base-100 shadow-xl mx-auto mt-8">
    <div class="card-body">

        <!-- Info Text -->
        <p class="mb-4 text-sm text-base-content">
            {{ __('Reset your password by entering your email and new password.') }}
        </p>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input id="email" type="email" name="email" 
                       class="input w-full" 
                       value="{{ old('email', $request->email) }}" 
                       placeholder="@lang('Email')" required autofocus />
                @error('email')
                    <p class="label text-error mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Password -->
            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input id="password" type="password" name="password" 
                       class="input w-full" 
                       placeholder="@lang('Password')" required />
                @error('password')
                    <p class="label text-error mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Confirm Password -->
            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input id="password_confirmation" type="password" name="password_confirmation" 
                       class="input w-full" 
                       placeholder="@lang('Confirm Password')" required />
                @error('password_confirmation')
                    <p class="label text-error mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
