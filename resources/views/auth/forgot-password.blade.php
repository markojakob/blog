@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
    <div class="card w-96 bg-base-100 shadow-xl mx-auto mt-8">
        <div class="card-body">

            <!-- Info Text -->
            <p class="mb-4 text-sm text-base-content">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <!-- Session Status -->
            @if (session('status'))
                <div role="alert" class="alert alert-success mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input id="email" type="email" name="email" class="input w-full" value="{{ old('email') }}" placeholder="@lang('Email')" required autofocus />
                    @error('email')
                        <p class="label text-error mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
