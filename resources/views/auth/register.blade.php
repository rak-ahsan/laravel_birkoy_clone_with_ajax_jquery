<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- number -->
        <div class="mt-4">
            <x-input-label for="number" :value="__('Number')" />
            <x-text-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')"
                required autofocus autocomplete="number" />
            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- location -->
        <div class="mt-4">
            <x-input-label for="location" :value="__('Location')" />
            <select id="location" class="block mt-1 w-full" type="location" name="location" :value="old('location')"
                required autocomplete="location" style="border:1px solid #D1D5DB;border-radius:5px">
                <option>Open this select menu</option>
                @foreach ($loc as $row)
                <option value="{{ $row->loc_id }}" {{ old('location') == $row->loc_id ? 'selected' : '' }}>{{ $row->loc_name }}</option>
                @endforeach
            </select>
        </div>

        <!--for image -->
        <div class="mt-4">
            <x-input-label for="user_img" :value="__('Image Upload')" />
            <x-text-input id="user_img" class="block mt-1 w-full" type="file" name="user_img" required
            autocomplete="user_img" />
        <x-input-error :messages="$errors->get('user_img')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
