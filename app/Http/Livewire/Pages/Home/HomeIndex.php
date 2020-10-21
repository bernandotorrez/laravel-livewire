<?php

namespace App\Http\Livewire\Pages\Home;

use Livewire\Component;

class HomeIndex extends Component
{

    public $count = 1;

    public function render()
    {
        return view('livewire.pages.home.home-index');
    }

    public function increment()
    {
        $this->count++;
    }
}
