<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-200 via-white to-blue-100">
        <div class="w-full max-w-md bg-white shadow-2xl rounded-2xl p-8">
            
            {{-- Logo --}}
            <div class="flex justify-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Toko" class="h-16 w-16">
            </div>

            {{-- Teks Sambutan --}}
            <h1 class="text-2xl font-bold text-center text-gray-700 mb-2">
                Selamat Datang di <span class="text-blue-600">Toko MankGarox</span>
            </h1>
            <p class="text-center text-gray-500 mb-6">
                Silakan login untuk melanjutkan
            </p>

            {{-- Login Form --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                {{-- Password --}}
                <div class="mt-4">
                    <label for="password" class="block font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                {{-- Remember Me --}}
                <div class="mt-4 flex items-center">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">Ingat saya</label>
                </div>

                {{-- Tombol Login --}}
                <div class="mt-6">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition">
                        Login
                    </button>
                </div>

                {{-- Link Register --}}
                <div class="mt-4 text-center">
                    <a href="{{ route('register') }}" class="text-sm text-blue-600 hover:underline">
                        Belum punya akun? Daftar sekarang
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
