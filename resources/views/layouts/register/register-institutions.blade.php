<x-guest-layout>
    <x-authentication-header>

        @section('helper_text_button', __('Already have an account?'))
            
        <x-slot name="button">
            <x-anchor-button href="{{ route('login') }}">
                <p>{{ __('Log in') }}</p>
            </x-anchor-button>
        </x-slot>

    </x-authentication-header>

    <x-authentication-card>
        <x-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="text-3xl mt-2 mb-4  flex justify-center text-yellow-500 font-semibold sm:text-2xl">Create account as an institution</h2>
            <div>
                <x-label for="institution_name" value="{{ __('Institution name') }}" />
                <x-input id="institution_name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="institution_name" placeholder="Institution name"/>
            </div>

            <div class="mt-4">
                <x-label for="phone number" value="{{ __('Phone_number') }}" />
                <x-input id="phone_number" class="block mt-1 w-full" type="text"
                    name="phone_number" required autocomplete="" placeholder="Phone number"/>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email"
                    name="maternal_surname" required autocomplete="" placeholder="Email"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password"
                    name="password" required autocomplete="" placeholder="Password"/>
            </div>


            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="transition-colors duration-200 underline text-sm text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 dark:focus:ring-offset-neutral-800">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="transition-colors duration-200 underline text-sm text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 dark:focus:ring-offset-neutral-800">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="transition-colors duration-200 underline text-sm text-neutral-600 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 dark:focus:ring-offset-neutral-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
