<div>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="buscar"><strong>Buscar</strong></label>
                <input wire:model="buscar" type="text" class="form-control" id="buscar">
                @error("buscar")
                <small class="form-text text-danger">{{$message}}</small>
                @else
                    <small class="form-text text-muted">Comienza a teclear para que aparezcan los resultados</small>
                @enderror
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>Resultados</strong></p>
            <p>
            @foreach($usuarios ?? ["uno", "dos"] as $usuario)
                <span class="badge badge-secondary">{{ $usuario->name }}</span>
            @endforeach
            </p>
        </div>
    </div>    
</div>
