<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Crud extends Component
{
    public $pets, $name, $age, $color, $pet_id;

    public function index()
    {
        $this->pets=Pet::all();
        return view('livewire.crud', compact('pets'));
    }
}
