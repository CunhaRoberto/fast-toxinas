
@extends('layout.app')

@section('content')
    <section class="form_pg">
        <h1 class="title">Crie sua conta</h1>
        <div class="form_righ">
            <form action="{{ route('insert-account') }}" method="POST">
                @csrf

                @error('name')
                <p class="field_error">{{ $message }}</p>
                @enderror
                <input type="text" name="name" placeholder="Seu nome" value="{{old('name')}}" class="@error('name') field_error @enderror" />

                @error('email')
               <p class="field_error">{{ $message }}</p>
                @enderror
                <input type="text" name="email" placeholder="seu-email@email.com" autocomplete="off" value="{{ old('email') }}" class="@error('email') field_error @enderror"/>

                @error('password')
                    <p class="field_error">{{ $message }}</p>
                @enderror
                <input type="password" name="password" placeholder="Sua senha" value="{{ old('password') }}" class="@error('password') field_error @enderror"/>

                <span>Já tem uma conta? <a href="{{ route('login') }}">Entrar</a></span>

                <button type="submit" class="btn_fullwidt">Criar</button>

            </form>
        </div>
    </section>
@endsection
