<?php

namespace App\Livewire;

use Livewire\Component;

class ContactTesting extends Component
{


    public $form = [
        'name' => '',
        'email' => '',
        'message' => '',
    ];

    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.email' => 'required|email',
        'form.message' => 'required|string',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        ContactTesting::create($validatedData);


        // Handle form submission logic
        session()->flash('message', 'Form submitted successfully.');

        // Reset form fields
        $this->form = [
            'name' => '',
            'email' => '',
            'message' => '',
        ];
    }



    public function render()
    {
        return view('livewire.contact-testing');
    }
}
