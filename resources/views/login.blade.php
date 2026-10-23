<x-layout>
    <main class="py-10">
        <h1>Login</h1>

        <section class="mt-4">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="carlos@gmail.com"
                    required
                    class="bg-white p-2 border-2"
                >

                <input
                    type="password"
                    name="password"
                    placeholder="********"
                    required
                    class="bg-white p-2 border-2"
                >

                <button type="submit" class="bg-white border-2 p-2">Entrar</button>
            </form>

            <div>
                @error('email')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
                @error('password')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>
        </section>
    </main>
</x-layout>
