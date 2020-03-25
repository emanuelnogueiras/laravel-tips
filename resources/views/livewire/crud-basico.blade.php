<div>
    <div class="form-group">
        <label for="titulo"><strong>Título</strong></label>
        <div class="input-group">
            <input type="test" class="form-control" id="titulo"
                wire:model.debounce.250ms="titulo"
                wire:keydown.enter="crearNota()"                
                wire:target="crearNota"
                wire:key="inputTitulo">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"
                    wire:click="crearNota()">Aceptar</button>
            </div>
        </div>               
        <div>@error("titulo")
            <small class="form-text text-danger">{{$message}}</small>
        @else
            <small class="form-text text-muted">Cuéntanos algo curioso...</small>
        @enderror</div>
        
    </div>
    <hr>
    <div class="mt-3">
        <p class=""><strong>Últimas notas</strong></p>
        @if(count($notas)>0)
            @foreach($notas as $nota)
                <div class="alert alert-secondary" 
                    wire:key="{{ $nota->id }}"
                    wire:transition.slide.down.1s>

                    <span class="badge badge-success"><small><strong>{{ $nota->created_at->diffForHumans() }}</strong></small></span>
                    <span class="float-right">
                        <button class="btn btn-warning btn-sm"
                            wire:click="editarNota({{$nota->id}})">editar</button>
                        <button class="btn btn-danger btn-sm"
                            wire:click="eliminarNota({{$nota->id}})">eliminar</button>
                    </span>
                    <p class="mb-0 text-info">{{ $nota->titulo}}</p>

                </div>
            @endforeach
        @else
            <small class="text-danger">aún no se ha creado ninguna...</small>
        @endif
    </div>
    <hr>
    
    <div wire:poll.10s="eliminarNotasViejas">
        <small class="text-muted">Fecha actual: {{ now() }}</small>
    </div>
    
    @if (session()->has('message'))
    <div class="alert alert-danger" 
        style="position: absolute; bottom: 10px; right: 10px;">
        {{ session('message') }}
    </div>
    @endif

</div>
