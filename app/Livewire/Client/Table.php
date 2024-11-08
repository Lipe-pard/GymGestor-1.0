<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $clients = Client::paginate(10)->sortBy('name');

        return view('livewire.client.table', compact('clients'));
    }
}
