<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class AllPlayers extends Component
{
    public function render()
    {
        return view('livewire.all-players', [
            'players' => Player::all()
        ]);
    }
}
