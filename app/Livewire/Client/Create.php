<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public $isOpen = false;

    public $name, $cpf, $phone, $zip_code, $street, $neighborhood, $number, $birth_date, $due_day;

    protected $rules = [
        'name' => 'required|max:255',
        'cpf' => 'required|min:14',
        'phone' => 'required|min:15',
        'zip_code' => 'required|min:9',
        'street' => 'required|max:255',
        'neighborhood' => 'required|max:255',
        'number' => 'required|max:10',
        'birth_date' => 'required|date',
        'due_day' => 'required'
    ];

    protected $messages = [
        'name.required' => 'O campo nome é obrigatório.',
        'name.max' => 'O nome não pode ter mais de 255 caracteres.',

        'cpf.required' => 'O campo CPF é obrigatório.',
        'cpf.min' => 'O CPF não pode ter menos de 14 caracteres.',

        'phone.required' => 'O campo celular é obrigatório.',
        'phone.min' => 'O celular não pode ter menos de 15 caracteres.',

        'zip_code.required' => 'O campo CEP é obrigatório.',
        'zip_code.min' => 'O CEP não pode ter menos de 9 caracteres.',

        'street.required' => 'O campo rua é obrigatório.',
        'street.max' => 'A rua não pode ter mais de 255 caracteres.',

        'neighborhood.required' => 'O campo bairro é obrigatório.',
        'neighborhood.max' => 'O bairro não pode ter mais de 255 caracteres.',

        'number.required' => 'O campo número é obrigatório.',
        'number.max' => 'O número não pode ter mais de 10 caracteres.',

        'birth_date.required' => 'O campo de data de nascimento é obrigatório.',
        'birth_date.date' => 'A data de nascimento deve ser uma data válida.',

        'due_day.required' => 'O campo do dia de vencimento é obrigatório.',
    ];

    public function open()
    {
        $this->isOpen = true;
        $this->resetForm();
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.client.create');
    }

    public function store(){

        Client::create($this->validate());
        session()->flash('message-success', 'Cliente adicionado com sucesso!');
        $this->resetForm();
        $this->close();
    }

    public function resetForm(){
        $this->name = '';
        $this->cpf = '';
        $this->phone = '';
        $this->zip_code = '';
        $this->street = '';
        $this->neighborhood = '';
        $this->number = '';
        $this->birth_date = '';
        $this->due_day = '';
    }
}
