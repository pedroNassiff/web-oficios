<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\PostNotificacion;
use Illuminate\Support\Facades\Auth;
use App\User;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $mensaje = Mensaje::create($data);

        //auth()->user()->notify(new PostNotificacion($post));
        
        User::all()
            ->except($mensaje->user_id)
            ->each(function(User $user) use ($mensaje){
                $user->notify(new postNotificacion($mensaje));
            });

        return redirect()->back()->with('message', 'Mensaje enviado satisfactoriamente');
    }
}
