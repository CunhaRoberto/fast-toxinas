@extends('layout.app')

@section('content')
    <section class="form_pg">
        <h1 class="title">Fazer login</h1>
        <div class="form_righ">
            <form action="{{route('auth')}}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="seu-email@email.com" autocomplete="off"/>
                <input type="password" name="password" placeholder="Sua senha"/>
                <span>Esqueceu sua senha? <a href="{{route('forgot-password')}}">Redefinir</a></span>
                <x-button class='btn_fullwidt' linkto='auth' >
                    Enviar

                </x-button>
            </form>
        </div>
    </section>
@endsection
