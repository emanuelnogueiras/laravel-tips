@extends("layout.general")

@section("title")
    Laravel Tips
@endsection("title")

@section("content")

    <div class="container mt-3">
        <h4 class="m-0 p-0"><strong>Menú Principal</strong></h4>
        <h1 class="m-0 p-0"><strong>Laravel Tips</strong></h1>
        <hr>                

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0"><strong>Tip #1 | LaraTips</strong></h5>                        
                    </div>
                    <div class="card-body">
                        <h3 class=" m-0 card-title">
                            <strong>
                                Buscador con Auto-Completar
                            </strong>
                        </h3>                        
                        <small class="text-muted">Creado el 21 de marzo de 2020.</small>
                        <p class="mt-1">
                            Se trata de un ejemplo en el que, utilizando Livewire, 
                            podemos realizar una búsqueda en Tiempo Real sin tener 
                            que recargar la página. 
                        </p>                        
                    </div>
                    <div class="card-footer text-center">
                        <a href="/tips/01" class="btn btn-primary">Acceder Tip #1</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0"><strong>Tip #2 | LaraTips</strong></h5>                        
                    </div>
                    <div class="card-body">
                        <h3 class=" m-0 card-title">
                            <strong>
                                CRUD con Livewire
                            </strong>
                        </h3>                        
                        <small class="text-muted">Creado el 22 de marzo de 2020.</small>
                        <p class="mt-1">
                            Se trata de un ejemplo en el que, utilizando Livewire, 
                            podemos realizar la creación, edición y también eliminar notas. 
                        </p>                        
                    </div>
                    <div class="card-footer text-center">
                        <a href="/tips/02" class="btn btn-primary">Acceder Tip #2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection("content")