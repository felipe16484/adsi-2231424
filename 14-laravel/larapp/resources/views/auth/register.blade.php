<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <header class="w-full font-semibold bg-emerald-600 text-white py-5 px-6 sm:rounded-md text-center">
            {{ __('general.title-register') }}
        </header>

        <form class="mt-5" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="fullName" :value="__('general.fullname')" />

                <x-input id="fullName" class="block mt-1 w-full" type="text" name="fullName" :value="old('fullName')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('general.email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('general.phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <x-label for="date" :value="__('general.birthdate')" />

                <x-input id="date" class="block mt-1 w-full" type="date" name="birthday" :value="old('date')" required />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <x-label for="gender" :value="__('general.gender')" />

                <select name="gender" id="gender" class="block mt-1 w-full rounded-md">
                    <option value="" @if(!old('gender')) selected @endif disabled>---</option>
                    <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
                    <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('general.address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('general.password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('general.confirm-password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('general.already-registered') }}
                </a>

                <x-button class="ml-4">
                    {{ __('general.register-btn') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
