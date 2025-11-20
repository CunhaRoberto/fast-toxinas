@extends('layout.app')

@section('content')
    <section class="form_pg">

        @if (session('status'))
            <div id="success-alert" class="alert alert-success">
                {{ session('status') }}
            </div>

            <script>
                const successAlert = document.getElementById('success-alert');

                setTimeout(function() {
                    if (successAlert) {
                        successAlert.style.display = 'none';
                    }
                }, 10000);
            </script>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <h1 class="title">Fazer login</h1>
        <div class="form_righ">
            <form action="{{route('auth')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="seu-email@email.com" autocomplete="off" value="{{ old('email') }}"/>

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input type="password" name="password" placeholder="Sua senha"/>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <span>Esqueceu sua senha? <a href="{{route('forgot-password')}}">Redefinir</a></span>
                <x-button class='btn_fullwidt' linkto='auth' >
                    Enviar
                </x-button>
            </form>
        </div>
    </section>
@endsection
