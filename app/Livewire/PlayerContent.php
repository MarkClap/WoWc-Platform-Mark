<?php

namespace App\Livewire;

use Livewire\Component;

class PlayerContent extends Component
{
    public $content = "main.player.character";

    public function updateContent($newContent)
    {
        $this->content = $newContent;
    }

    public function render()
    {
        return view('livewire.player-content');
    }
}
