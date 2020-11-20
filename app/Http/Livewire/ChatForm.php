<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat;
use App\Events\NuevoMensaje;
use Illuminate\Support\Facades\Auth;

class ChatForm extends Component
{
    // Estas propiedades son publicas

    public $mensaje;
    public $usuario;
    

    // Cuando se Inicia el Componente (antes de Render)
    public function mount()
    {                
        $this->usuario = Auth::user();     
        $this->mensaje = "";
    }
     
    // Se produce cuando se actualiza cualquier dato por Binding
    public function updated($field)
    {
        // Solo validamos el campo que genera el update
        $validatedData = $this->validateOnly($field, [
            'mensaje' => 'required',
        ]);
    }

    public function enviarMensaje()
    {                
        $validatedData = $this->validate([
            'mensaje' => 'required',
        ]);

        // Guardamos el mensaje en la BBDD
        Chat::create([
            "send_user_id" => $this->usuario->id,
            "received_user_id" => $this->usuario->id,
            "mensaje" => $this->mensaje
        ]);
        
        // Generamos el evento para Pusher
        // Enviamos en la "push" el usuario y mensaje (aunque en este ejemplo no lo utilizamos)
        // pero nos vale para comprobar en PusherDebug (y por consola) lo que llega...
        event(new NuevoMensaje($this->usuario, $this->mensaje));
        
        // Este evento es para que lo reciba el componente
        // por Javascript y muestre el ALERT BOOSTRAP de "enviado"
        $this->emit('enviadoOK', $this->mensaje);
        
        // Creamos un nuevo texto aleatorio (para el próximo mensaje)
        $this->mensaje = "";
    
    }    

    public function render()
    {
        return view('livewire.chat-form');
    }
}