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
        <x-validation-errors class="mb-4 " />
        <form method="POST" action="{{ route('register') }}" >
            @csrf
            <h2 class="text-3xl  mb-2  flex justify-center text-yellow-500 font-semibold sm:text-2xl">Create account as an users</h2>
            <div class="mb-3">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="name"/>
            </div>

            <div class=" gap-2">
                <x-label for="paternal_surname" value="{{ __('surnames') }}" />
                <div class="flex flex-row gap-2">
                <x-input id="paternal_surname" class="block mt-1 w-full" type="text"
                    name="paternal_surname" required autocomplete="" placeholder="paternal_surname"/>
                <x-input id="maternal_surname" class="block mt-1 w-full" type="text"
                    name="maternal_surname" required autocomplete="" placeholder="maternal_surname"/>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="username" value="{{ __('Username') }}" />
                <x-input id="username" class="block mt-1 w-full" type="text"
                    name="username" required autocomplete="" placeholder="username"/>
            </div>


            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="email" placeholder="email"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="password"/>
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
