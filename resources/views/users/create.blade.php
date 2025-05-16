<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah User
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <x-input-label for="name" value="Nama" />
                    <x-text-input type="text" id="name" name="name" class="w-full" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="email" value="Email" />
                    <x-text-input type="email" id="email" name="email" class="w-full" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" value="Password" />
                    <x-text-input type="password" id="password" name="password" class="w-full" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                    <x-text-input type="password" id="password_confirmation" name="password_confirmation" class="w-full" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                </div>

                <x-primary-button>Tambah User</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
