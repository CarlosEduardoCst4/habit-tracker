<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
             <h1 class="font-bold text-3xl">
                Faça Login
            </h1>

             <p>
                Insira seus dados para acessar
            </p>
            <form action="{{ route('auth.login') }}" method="POST" CLASS="flex flex-col">
                @csrf
                <div class="flex flex-col gap-2 mb-2">
                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="carlos@gmail.com"
                        required
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class="bg-red-500 p-0.5">
                            {{ $message }}
                        </p>
                    @enderror
                    
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>
                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        required
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                    >

                    @error('password')
                        <p class="bg-red-500 p-0.5">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

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
