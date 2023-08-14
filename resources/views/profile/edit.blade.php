<x-app-layout>
    <x-slot name="header">
            {{ __('Profile') }}
    </x-slot>


                    @include('profile.partials.update-profile-information-form')



                    @include('profile.partials.update-password-form')


                    @include('profile.partials.delete-user-form')

</x-app-layout>
