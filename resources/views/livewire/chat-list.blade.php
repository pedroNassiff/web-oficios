
<div class="row no-gutters">   
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
        <div class="users-container">
            <div class="chat-search-box">
                <div class="input-group">
                    <input class="form-control" placeholder="Buscar">
                    <div class="input-group-btn">
                        <button type="button" class="btn-info btn hw-btn hvr-sweep-to-right">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="users">
                @foreach($userChatList as $userList) 
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
                @endforeach      
            </ul>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
        <div class="selected-user">
            <span>Para: <span class="name">Patricia Alejandra González</span></span>
        </div>
        <div class="chat-container">
            <ul class="chat-box chatContainerScroll">
                @foreach($mensajes as $mensaje) 
                    @if($mensaje["recibido"])
                        <li class="chat-left">
                            <div class="chat-avatar">
                                <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                                <div class="chat-name">Patricia</div>
                            </div>
                            <div class="chat-text">Hello, I'm Patricia.
                                <br>How can I help you today?</div>
                            <div class="chat-hour">08:55</div>
                        </li>
                    @else 
                        <li class="chat-right">
                            <div class="chat-hour">08:56</div>
                            <div class="chat-text">Hi, Patricia
                                <br> I need more information about Developer Plan.</div>
                            <div class="chat-avatar">
                                <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                <div class="chat-name">Sam</div>
                            </div>
                        </li>
                    @endif    
                @endforeach      
            </ul>
            
                @livewire("chat-form")
 
        </div>
    </div>
    <script>
        
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
  
        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });
        
        var channel = pusher.subscribe('chat-channel');
        
        channel.bind('chat-event', function(data) {            
            window.livewire.emit('mensajeRecibido', data);
        });
        
        setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    </script>

</div>