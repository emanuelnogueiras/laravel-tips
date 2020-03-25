@extends("layout.general")

@section("title")
    Tip #2 | Laravel Tips
@endsection("title")

@section("content")

    <div class="container mt-3">
        <h4 class="m-0 p-0"><strong>Tip #2</strong></h4>
        <h1 class="m-0 p-0"><strong>Laravel Tips</strong></h1>
                      
        <nav class="mt-3 mb-4">
            <ol class="breadcrumb bg-white">
              <li class="breadcrumb-item"><a href="/">Menú Principal</a></li>
              <li class="breadcrumb-item active" aria-current="page">LaraTip #2</li>
            </ol>
        </nav>

        <div class="row">

            <!-- Requisitos -->
            <div class="col-lg-6">
                <h5><strong>Requisitos</strong></h5>
                <p>Para el correcto funcionamiento, tenemos que:
                    <ul>
                        <li>Instalar el paquete: <a href="https://github.com/livewire/livewire" target="_blank">livewire/livewire</a></li>
                        <li><span class="text-danger">[opcional]</span> Instalar el paquete: <a href="https://github.com/Laraveles/spanish" target="_blank">laraveles/spanish</a>.</li>                        
                        <li>Ejecutar la Migración de la tabla <code>notas</code></li>                
                    </ul>
                </p>
            </div>

            <!-- Funcionamiento -->
            <div class="col-lg-6">
                <h5><strong>Funcionamiento</strong></h5>
                <p>
                    Vamos a crear una aplicación en la que podamos añadir, modificar y eliminar notas.
                    Los usuarios no deben estar registrados ni tampoco haber iniciado sesión, ese punto lo dejo
                    a ti para que puedas realizar tus propios controles y validaciones.
                </p>
            </div>

        </div>   
                 
        <!-- El Ejemplo -->
        <hr>
        <h5><strong>Ejemplo</strong></h5>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-lg-6 col-md-8">
                <div class="card-body shadow bg-white rounded">
                    @livewire("crud-basico")
                </div>
            </div>
        </div>

        <hr>        
        <p class="text-muted">
            Este ejemplo se ha realizado bajo <a href="https://es.wikipedia.org/wiki/Licencia_MIT" target="_blank">Licencia MIT</a>.
        </p>
    </div>
    

@endsection("content")