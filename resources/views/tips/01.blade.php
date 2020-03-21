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
                        <li>Instalar el paquete: <code>composer require livewire/livewire</code></li>
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
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card-body bg-white rounded">
                    @livewire("buscador-usuarios")
                </div>
            </div>
        </div>
        
    </div>
    

@endsection("content")