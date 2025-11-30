<section class="space-y-4">

    <header class="mb-2">
        <h2 class="text-lg font-medium text-base-content">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-base-content">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Current Password')</legend>
            <input id="update_password_current_password" name="current_password" type="password" class="input w-full mt-1" autocomplete="current-password" />
            @error('current_password')
                <p class="label text-error mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('New Password')</legend>
            <input id="update_password_password" name="password" type="password" class="input w-full mt-1" autocomplete="new-password" />
            @error('password')
                <p class="label text-error mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Confirm Password')</legend>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="input w-full mt-1" autocomplete="new-password" />
            @error('password_confirmation')
                <p class="label text-error mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
