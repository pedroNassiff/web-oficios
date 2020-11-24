<div class="form-group mt-3 mb-0 d-flex justify-content-center align-items-center">
    <textarea 
        wire:model="mensaje" 
        wire:keydown.enter="enviarMensaje"
        id="mensaje" 
        class="form-control w-75" 
        rows="3" 
        placeholder="Escribe un mensaje...">
    </textarea>
    <button 
        class="send-msn ml-3" 
        wire:click="enviarMensaje" 
        wire:loading.attr="disabled"
        wire:offline.attr="disabled">
        <i class="fas fa-paper-plane"></i>

    </button>
    <script>
        // Esto lo recibimos en JS cuando lo emite el componente
        // El evento "enviadoOK"
        $(document).ready(function() {
            window.livewire.on('enviadoOK', function() {
                $("#avisoSuccess").fadeIn("slow");
                setTimeout(function() {
                    $("#avisoSuccess").fadeOut("slow");
                }, 3000);
            });
        });
    </script>
</div>