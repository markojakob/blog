@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
    <div class="card w-96 bg-base-100 shadow-xl mx-auto mt-8">
        <div class="card-body">

            <p class="mb-4 text-sm text-base-content">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <fieldset class="fieldset mb-4">
                    <legend class="fieldset-legend">@lang('Password')</legend>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="input w-full"
                        required
                        autocomplete="current-password"
                    />
                    @error('password')
                        <p class="label text-error mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Button -->
                <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
