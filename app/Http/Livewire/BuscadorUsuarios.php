<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscadorUsuarios extends Component
{
    public $buscar;
    public $usuarios;
    public $picked;

    public function mount()
    {
        $this->buscar = "";
        $this->usuarios = [];
        $this->picked = true;
    }

    public function updatedBuscar()
    {
        $this->picked = false;

        $this->validate([
            "buscar" => "required|min:2"
        ]);

        $this->usuarios = \App\User::where("name", "like", trim($this->buscar) . "%")
            ->take(3)
            ->get();
        
    }

    public function asignarUsuario($nombre)
    {        
        $this->buscar = $nombre;        
        $this->picked = true;
    }

    public function asignarPrimero()
    {
        $usuario = \App\User::where("name", "like", trim($this->buscar) . "%")->first();
        if($usuario)
        {
            $this->buscar = $usuario->name;
        }
        else
        {
            $this->buscar = "...";
        }
        $this->picked = true;
    }

    public function render()
    {
        return view('livewire.buscador-usuarios');
    }
}
