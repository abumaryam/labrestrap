<section>
    <header>
        <h2>
            {{ __('Profile Information') }}
        </h2>

        <p>
            {{ __("Update your account's profile information and email addressss.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" style="margin-top: 1.5rem; margin-top: 1.5rem;">
        @csrf
        @method('patch')
        <div style="margin-bottom: 0.75rem;">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="email" name="name" type="text" class="form-control" :value="old('email', $user->name)" required autocomplete="username" aria-describedby="nameHelp"/>
            <x-input-error style="margin-top: 0.5rem;" :messages="$errors->get('name')" />
        </div>


        <div style="margin-bottom: 0.75rem;">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error style="margin-top: 0.5rem;" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p style="font-size: 0.875rem; margin-top: 0.5rem; color: #2d3748; ">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" style="text-decoration: underline; font-size: 0.875rem; color: #4A5568; border-radius: 0.375rem;">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p style="margin-top: 0.5rem; font-weight: 500; font-size: 0.875rem; color: #059669;">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div style="display: flex; align-items: center; gap: 1rem;">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" style="font-size: 0.875rem; color: #4A5568;">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>