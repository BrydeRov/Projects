@if (session('created') || session('updated') || session('destroyed'))
    

    <div class="toast show 
        @if(session('created'))
                            
        @endif
        @if(session('updated'))
            Actualizado
        @endif
        @if(session('destroyed'))
            Eliminado
        @endif  
    " role="alert" aria-live="assertive" aria-atomic="true">
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-white
            @if(session('created'))
                bg-success    
            @endif
            @if(session('updated'))
                bg-success
            @endif
            @if(session('destroyed'))
                bg-danger
            @endif          
            ">
                
                <strong class="me-auto">
                    @if(session('created'))
                        Creado
                    @endif
                    @if(session('updated'))
                        Actualizado
                    @endif
                    @if(session('destroyed'))
                        Eliminado
                    @endif
                </strong>                
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                    @if(session('created'))
                        {{session('created')}}
                    @endif
                    @if(session('updated'))
                        {{session('updated')}}
                    @endif
                    @if(session('destroyed'))
                        {{session('destroyed')}}
                    @endif
            </div>
            </div>
        </div>  
    </div>     

@endif