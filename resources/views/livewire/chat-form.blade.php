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
                <li class="person" data-chat="person1">
                    <div class="user">
                        <img src="https://image.freepik.com/foto-gratis/alegre-mujer-mediana-edad-cabello-rizado_1262-20859.jpg" alt="Retail Admin">
                        <span class="status busy"></span>
                    </div>
                    <p class="name-time">
                        <span class="name">María Elena Perez</span>
                        <span class="time">15/02/2019</span>
                    </p>
                </li>
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
                <li class="person" data-chat="person3">
                    <div class="user">
                        <img src="https://image.freepik.com/foto-gratis/retrato-guapo-sonriente-elegante-joven-modelo-vestido-camisa-cuadros-roja-hombre-moda-posando_158538-4910.jpg" alt="Retail Admin">
                        <span class="status busy"></span>
                    </div>
                    <p class="name-time">
                        <span class="name">Joseph Larson</span>
                        <span class="time">11/02/2019</span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
        <div class="selected-user">
            <span>To: <span class="name">Patricia Alejandra González</span></span>
        </div>
        <div class="chat-container">
            <ul class="chat-box chatContainerScroll">
                <li class="chat-left">
                    <div class="chat-avatar">
                        <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                        <div class="chat-name">Patricia</div>
                    </div>
                    <div class="chat-text">Hello, I'm Patricia.
                        <br>How can I help you today?</div>
                    <div class="chat-hour">08:55</div>
                </li>
                <li class="chat-right">
                    <div class="chat-hour">08:56</div>
                    <div class="chat-text">Hi, Patricia
                        <br> I need more information about Developer Plan.</div>
                    <div class="chat-avatar">
                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                        <div class="chat-name">Sam</div>
                    </div>
                </li>
                <li class="chat-left">
                    <div class="chat-avatar">
                        <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                        <div class="chat-name">Patricia</div>
                    </div>
                    <div class="chat-text">Are we meeting today?
                        <br>Project has been already finished and I have results to show you.</div>
                    <div class="chat-hour">08:57</div>
                </li>
                <li class="chat-right">
                    <div class="chat-hour">08:59</div>
                    <div class="chat-text">Well I am not sure.
                        <br>I have results to show you.</div>
                    <div class="chat-avatar">
                        <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                        <div class="chat-name">Sam</div>
                    </div>
                </li>
            </ul>
            <small>{{$usuario}}</small>
            <div class="form-group mt-3 mb-0">
                <textarea class="form-control" id="usuario" rows="3" placeholder="Type your message here..." wire:model="usuario"></textarea>
            </div>
            <div class="row">
                <div class="col-6">  
                    <div style="position: absolute;"
                        class="alert alert-success collapse" 
                        role="alert" 
                        id="avisoSuccess">
                        Se ha enviado
                    </div>        
                </div>    
                <div class="col-6 pt-2 text-right">
                    <button 
                        class="btn btn-primary" 
                        wire:click="enviarMensaje"
                        wire:loading.attr="disabled"
                        wire:offline.attr="disabled"            
                    >Enviar Mensaje</button>
                </div>        
            </div>
        </div>
    </div>

    <script>
        $( document ).ready(function() {
            window.livewire.on('enviadoOK', function () {
                console.log('asdasdasdasd');
                $("#avisoSuccess").fadeIn("slow");                
                setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);                                
            });
        });
        
    </script>
    
</div>