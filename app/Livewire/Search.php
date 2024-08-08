<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    /**
     * Summary of message
     * @var string
     */
    public $message="Start";
    public function render()
    {
        return view('livewire.search');
    }
}
