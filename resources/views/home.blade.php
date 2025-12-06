@extends('layout.app')

@section('content')
    <section class="home_pg">
        <h1 class="title">Que tal organizar sua rotina semanal <br>com nosso serviço de <span>anotações</span>?</h1>
        <p class="subtitle">Com nossa ferramente, você vai poder criar, organizar e gerenciar <br> todas as tarefas do seu dia de forma totalmente gratuita </p>
        <x-button class='' linkto='create-account' >Começar hoje mesmo!</x-button>

    </section>
        <br>

      <section class="home_pg">
      <div class="row">



        <div class="col-md-3 mb-4">
            <x-card
                image-url="{{ asset('imagens/casa2.jpeg') }}"
                card-title="Tarefa 3"
                card-text="Este é o terceiro card da sua coleção."
                button-link="#"
            />
        </div>

        <div class="col-md-3 mb-4">
            <x-card
                image-url="{{ asset('imagens/casa.jpeg') }}"
                card-title="Tarefa 4"
                card-text="O quarto card, completando a primeira linha."
                button-link="#"
            />
        </div>

        <div class="col-md-3 mb-4">
            <x-card
                image-url="{{ asset('imagens/casa3.jpeg') }}"
                card-title="Tarefa 5"
                card-text="Este card será jogado para a linha de baixo."
                button-link="#"
            />
        </div>

    </div>
    </section>

@endsection
