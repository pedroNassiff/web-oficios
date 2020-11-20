{{-- 
    <h3><strong>Últimos 5 mensajes</strong></h3>    

    <div class="card">        
        <div class="card-body">
            @foreach($mensajes as $mensaje)        
                <div>
                    
                    @if($mensaje["recibido"])
                        <div class="alert alert-warning" style="margin-right: 50px;">
                            <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                            <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                        </div>
                    @else
                        <div class="alert alert-success" style="margin-left: 50px;">
                            <strong>{{$mensaje["usuario"]}}</strong><small class="float-right">{{$mensaje["fecha"]}}</small>
                            <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                        </div>
                    @endif
                    
                </div>        
            @endforeach 
        </div>
    </div>    
 --}}


<div class="selected-user">
    <span>Para: <span class="name">Patricia Alejandra González</span></span>
</div>
<div class="chat-container">
    <ul class="chat-box chatContainerScroll">
        @foreach($mensajes as $mensaje)

            @if($mensaje["recibido"])
            <li class="person" data-chat="person1">
                <div class="user">
                    <img src="https://image.freepik.com/foto-gratis/hombre-negocios-dueno-empresa-oficina_1303-15851.jpg" alt="Retail Admin">
                    <span class="status offline"></span>
                </div>
                <p class="name-time">
                    <span class="name">Steve Bangalter</span>
                    <span class="time">15/02/2019</span>
                </p>
            </li>
            <li class="person active-user" data-chat="person2">
                <div class="user">
                    <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                    <span class="status away"></span>
                </div>
                <p class="name-time">
                    <span class="name"> Patricia Alejandra Gonzalez</span>
                    <span class="time">12/02/2019</span>
                </p>
            </li>
            @else
            <li class="person" data-chat="person1">
                <div class="user">
                    <img src="https://image.freepik.com/foto-gratis/hombre-negocios-dueno-empresa-oficina_1303-15851.jpg" alt="Retail Admin">
                    <span class="status offline"></span>
                </div>
                <p class="name-time">
                    <span class="name">Steve Bangalter</span>
                    <span class="time">15/02/2019</span>
                </p>
            </li>
            <li class="person active-user" data-chat="person2">
                <div class="user">
                    <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                    <span class="status away"></span>
                </div>
                <p class="name-time">
                    <span class="name"> Patricia Alejandra Gonzalez</span>
                    <span class="time">12/02/2019</span>
                </p>
            </li>
            @endif
            
        @endforeach 
    </ul>
    <div class="form-group mt-3 mb-0 d-flex justify-content-center align-items-center">
        @livewire('chat-form')
    </div>
</div>

<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{ env('
        PUSHER_APP_KEY ') }}', {
            cluster: '{{ env('
            PUSHER_APP_CLUSTER ') }}',
            forceTLS: true
        });

    var channel = pusher.subscribe('chat-channel');

    channel.bind('chat-event', function(data) {
        console.log('========= 111 ===========');
        window.livewire.emit('mensajeRecibido', data);
    });

    setTimeout(function() {
        window.livewire.emit('solicitaUsuario');
    }, 100);

</script>
