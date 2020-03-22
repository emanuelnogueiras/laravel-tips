<div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="buscar">
                    <strong>Buscar</strong>
                    @if($picked)
                        <span class="badge badge-success">Picked</span>
                    @else
                        <span class="badge badge-danger">Picked</span>
                    @endif
                </label>
                <input wire:model="buscar" 
                    wire:keydown.enter="asignarPrimero()" type="text" class="form-control" id="buscar">
                @error("buscar")                    
                    <small class="form-text text-danger">{{$message}}</small>                                    
                @else
                    @if(count($usuarios)>0)
                        @if(!$picked)
                        <div class="shadow rounded px-3 pt-3 pb-0">
                            @foreach($usuarios as $usuario)
                                <div style="cursor: pointer;">
                                    <a wire:click="asignarUsuario('{{ $usuario->name }}')">
                                        {{ $usuario->name }}
                                    </a>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        @endif
                    @else
                        <small class="form-text text-muted">Comienza a teclear para que aparezcan los resultados</small>
                    @endif
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>Resultados</strong></p>
            <p>
            @foreach($usuarios as $usuario)
                <span class="badge badge-secondary">{{ $usuario->name }}</span>
            @endforeach
            </p>
        </div>
    </div>    
</div>
