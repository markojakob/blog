@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
    <div class="card w-96 bg-base-100 shadow-xl mx-auto mt-8">
        <div class="card-body">

            <p class="mb-4 text-sm text-base-content">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mb-4">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="flex justify-between mt-4">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <!-- Log Out -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
