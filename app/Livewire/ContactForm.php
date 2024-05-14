<?php

namespace App\Livewire;

use App\Models\ContactDetail;
use Livewire\Component;

class ContactForm extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'subject' => 'required',
    ];


    
    public function submitForm()
    {
        $validatedData = $this->validate();

        ContactDetail::create($validatedData);

        session()->flash('message', 'Contact details submitted successfully.');

        $this->reset([
            'first_name',
            'last_name',
            'email',
            'phone',
            'subject',
            'message',
        ]);
    }




    public function render()
    {
        return view('livewire.contact-form');
    }
}
