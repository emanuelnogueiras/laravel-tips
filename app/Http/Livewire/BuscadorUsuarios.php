<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscadorUsuarios extends Component
{
    public $buscar;
    public $usuarios;

    public function mount()
    {
        $this->buscar = "";
        $this->usuarios = [];
    }

    public function updatedBuscar()
    {
        $this->validate([
            "buscar" => "required|min:2"
        ]);

        $this->usuarios = \App\User::where("name", "like", "%" . trim($this->buscar) . "%")
            ->take(10)
            ->get();
    }

    public function render()
    {
        return view('livewire.buscador-usuarios');
    }
}
