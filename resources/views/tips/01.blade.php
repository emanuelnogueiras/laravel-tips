@extends("layout.general")

@section("title")
    Tip#1 | Laravel Tips
@endsection("title")

@section("content")

    <div class="container mt-3">
        <h4 class="m-0 p-0"><strong>Tip #1</strong></h4>
        <h1 class="m-0 p-0"><strong>Laravel Tips</strong></h1>
                      
        <nav class="mt-3 mb-4">
            <ol class="breadcrumb bg-white">
              <li class="breadcrumb-item"><a href="/">Menú Principal</a></li>
              <li class="breadcrumb-item active" aria-current="page">LaraTip #1</li>
            </ol>
        </nav>

        <div class="row">

            <!-- Requisitos -->
            <div class="col-lg-6">
                <h5><strong>Requisitos</strong></h5>
                <p>Para el correcto funcionamiento, tenemos que:
                    <ul>
                        <li>Instalar el paquete: <a href="https://github.com/livewire/livewire" target="_blank">livewire/livewire</a></li>
                        <li><span class="text-danger">[opcional]</span> Instalar el paquete: <a href="https://github.com/Laraveles/spanish" target="_blank">laraveles/spanish</a> para disponer de los mensajes de validación en castellano.</li>
                        <li>Ejecutar la Migración de la tabla <code>users</code></li>
                        <li>Crear varios registros en la tabla <code>users</code></li>                
                    </ul>
                </p>
            </div>

            <!-- Funcionamiento -->
            <div class="col-lg-6">
                <h5><strong>Funcionamiento</strong></h5>
                <p>
                    Vamos a realizar una búsqueda de Usuarios en Tiempo Real utilizando un componente creado 
                    con Livewire, por lo que necesitamos que la tabla <code>users</code> disponga de varios
                    registros para que el ejemplo sea útil.
                </p>
            </div>

        </div>   
                 
        <!-- El Ejemplo -->
        <hr>
        <h5><strong>Ejemplo</strong></h5>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-12">
                <div class="card-body shadow bg-white rounded">
                    @livewire("buscador-usuarios")
                </div>
            </div>
        </div>
        
        <hr>
        <p class="text-muted">
            Este ejemplo se ha realizado bajo <a href="https://es.wikipedia.org/wiki/Licencia_MIT" target="_blank">Licencia MIT</a>.
        </p>
    </div>
    

@endsection("content")