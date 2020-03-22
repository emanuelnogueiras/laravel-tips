<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudBasico extends Component
{
    public $notas;
    public $titulo;
    
    public function mount()
    {
        $this->notas = [];    
        $this->titulo = "";

        $this->obtenerUltimasNotas();
    }

    public function render()
    {
        return view('livewire.crud-basico');
    }

    /* Funciones Propias */

    public function updatedTitulo()
    {
        $this->validate([
            "titulo" => "required|min:3"
        ]);
    }

    public function obtenerUltimasNotas($cuantas = 5)
    {
        $notas = \App\Notas::orderBy("created_at", "desc")
            ->take($cuantas)
            ->get();

        $this->notas = $notas;
    }

    public function crearNota()
    {
        $this->validate([
            "titulo" => "required|min:3"
        ]);

        $nota = new \App\Notas;
        $nota->titulo = $this->titulo;
        $nota->save();

        $this->obtenerUltimasNotas();
        $this->titulo = "";
    }    

    public function eliminarNotasViejas()
    {
        try
        {
            \App\Notas::where("created_at", "<", \Carbon\Carbon::now()->subMinutes(1))
            ->delete();

            $this->obtenerUltimasNotas();
        }
        catch(\Exception $e)
        {
            session()->flash("error", $e->getMessage());
        }
        
    }

}
