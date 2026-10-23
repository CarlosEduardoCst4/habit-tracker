<header class="bg-white border-b-2 flex justify-between items-center p-4">
    {{-- Logo --}}
    <div>
        logo
    </div>

    {{-- GITHUB --}}
    <div>
        github

        @auth
            <form action="{{ route('auth.logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-white p-2 border-2">
                    Sair
                </button>
        @endauth

        @guest
            <a href="{{ route('site.login') }}"class="bg-white p-2 border-2">
                Login
            </a>
        @endguest
    </div>
</header>