<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $data=['name'=>'aditya Maurya','No.'=>'8638665064'];
        return view('livewire.contact',['data'=>$data]);
    }
}
