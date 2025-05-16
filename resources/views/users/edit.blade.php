<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-input-label for="name" value="Nama" />
                    <x-text-input type="text" id="name" name="name" class="w-full"
                        value="{{ old('name', $user->name) }}" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="email" value="Email" />
                    <x-text-input type="email" id="email" name="email" class="w-full"
                        value="{{ old('email', $user->email) }}" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" value="Password (kosongkan jika tidak diubah)" />
                    <x-text-input type="password" id="password" name="password" class="w-full" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password_confirmation" value="Konfirmasi Password" />
                    <x-text-input type="password" id="password_confirmation" name="password_confirmation" class="w-full" />
                </div>

                <x-primary-button>Update</x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
