<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{

    public $usuario;
    public $mensaje;

    public function mount(){
        $this->usuario = "";
    }

    public function enviarMensaje()
    {                
        $this->emit('enviadoOK', $this->mensaje);
        
    }   


    public function render()
    {
        return view('livewire.chat-form');
    }
}
