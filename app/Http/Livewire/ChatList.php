<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Chat;
use App\User;

class ChatList extends Component
{
    public $usuario;
    public $mensajes;
    public $userChatList;
    protected $ultimoId;
        
    protected $listeners = ['mensajeRecibido', 'cambioUsuario'];
    
    public function mount()
    {
        $ultimoId = 0;
        $this->usuario = Auth::user();
        $this->mensajes = [];

        $this->userChatList = Chat::select(
                                'users.name', 
                                'users.lastname',
                                'users.id',
                            )
                            ->join('users', 'users.id', '=', 'chat.send_user_id')
                            ->where('chat.send_user_id', '=', $this->usuario->id)->get();  
                       
    }

    public function  mensajeRecibido($data)
    {        
        $this->actualizarMensajes($data);
    }

    public function cambioUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function seleccionarChat($id)
    {
        $this->mensajes =  Chat::where([['received_user_id','=',$id],['send_user_id','=', $this->usuario->id]])
                                ->orWhere([['send_user_id','=',$id],['received_user_id','=', $this->usuario->id]])
                            ->orderBy("created_at", "desc")->take(5)->get(); 
    }

    public function actualizarMensajes($data)
    {                
        if($this->usuario != "")
        {
            // El contenido de la Push
            $data = \json_decode(\json_encode($data));
            
            $mensajes = Chat::orderBy("created_at", "desc")->take(5)->get();
            //$this->mensajes = [];            

            foreach($mensajes as $mensaje)
            {
                if($this->ultimoId < $mensaje->id)
                {
                    $this->ultimoId = $mensaje->id;
                    
                    $item = [
                        "id" => $mensaje->id,
                        "usuario" => $mensaje->usuario,
                        "mensaje" => $mensaje->mensaje,
                        "recibido" => ($mensaje->usuario != $this->usuario),
                        "fecha" => $mensaje->created_at->diffForHumans()
                    ];
    
                    //array_unshift($this->mensajes, $item);                
                    array_push($this->mensajes, $item);                
                }
                
            }

            if(count($this->mensajes) > 5)
            {
                array_pop($this->mensajes);
            }
        }
        else
        {            
            $this->emit('solicitaUsuario');
        }
    }

    public function resetMensajes()
    {
        $this->mensajes = [];
        $this->actualizarMensajes();
    }

    public function dydrate()
    {
        if($this->usuario == "")
        {
            // Le pedimos el uisuario al otro componente
            $this->emit('solicitaUsuario');
        }
    }

    public function render()
    {        
        return view('livewire.chat-list');
    }
}