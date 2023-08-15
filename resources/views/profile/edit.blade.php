<x-app-layout>
    <x-slot name="header">
            {{ __('Profile') }}
    </x-slot>
                    @include('profile.partials.update-profile-information-form')
<hr>

                    @include('profile.partials.update-password-form')
<hr>

                    @include('profile.partials.delete-user-form')

</x-app-layout>
