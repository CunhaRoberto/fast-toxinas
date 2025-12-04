<header>
    <div class="head_left">
        <img src="{{ asset('imgs/logo2.png') }}" alt="Logo Eduteka" title="Fast  Toxinas">
    </div>

    <div class="head_right">
        @auth
            <x-button class='btn_login' linkto='logout'>Sair</x-button>
        @endauth

        @guest
            <x-button class='' linkto='create-account' >Criar conta</x-button>
            <x-button class='btn_login' linkto='login'>Login</x-button>
        @endguest
    </div>
</header>
