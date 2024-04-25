<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-10 h-10 fill-current text-gray-500" /> Registrasi Pengguna
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            
            <!-- no_telp -->
            <div class="mt-4">
                <x-label for="no_telp" :value="__('No_telp')" />

                <x-input id="no_tep" class="block mt-1 w-full" type="text" name="no_telp" :value="old('no_telp')" required />
            </div>

            <!-- no_sim -->
            <div class="mt-4">
                <x-label for="no_sim" :value="__('No_sim')" />

                <x-input id="no_sim" class="block mt-1 w-full" type="text" name="no_sim" :value="old('no_sim')" required />
            </div>

            <!-- alamat -->
            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>