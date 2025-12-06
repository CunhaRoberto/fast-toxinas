<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $imageUrl;
    public $cardTitle;
    public $cardText;
    public $buttonLink;

    /**
     * Cria uma nova instância do componente.
     * @param string $imageUrl O caminho da imagem.
     * @param string $cardTitle O título do card.
     * @param string $cardText O texto principal do card.
     * @param string $buttonLink O link do botão.
     * @return void
     */
    public function __construct($imageUrl, $cardTitle, $cardText, $buttonLink = '#')
    {
        $this->imageUrl = $imageUrl;
        $this->cardTitle = $cardTitle;
        $this->cardText = $cardText;
        $this->buttonLink = $buttonLink;
    }

    /**
     * Pega a view / conteúdos que representam o componente.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
