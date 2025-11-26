@extends('layout.app')

@section('content')
    <section class="form_pg">

        @if (session('status'))
            <div id="error-danger" class="alert alert-danger">
                {{ session('status') }}
            </div>

            <script>
                const errorAlert = document.getElementById('error-danger');

                setTimeout(function() {
                    if (errorAlert) {
                        errorAlert.style.display = 'none';
                    }
                }, 5000);
            </script>
        @endif



        <h1 class="title">Fazer login</h1>
        <div class="form_righ">
            <form action="{{route('auth')}}" method="POST">
                @csrf

                @error('email')
                <p class="field_error">{{ $message }}</p>
                @enderror
                 <input type="text" name="email" placeholder="seu-email@email.com" autocomplete="off" value="{{ old('email') }}" class="@error('email') field_error @enderror"/>


                @error('password')
                <p class="field_error">{{ $message }}</p>
                @enderror
                <input type="password" name="password" placeholder="Sua senha" autocomplete="off"/>


                <span>Esqueceu sua senha? <a href="{{route('forgot-password')}}">Redefinir</a></span>
                <x-button class='btn_fullwidt' linkto='auth' >
                    Enviar
                </x-button>
            </form>
        </div>
    </section>
@endsection
