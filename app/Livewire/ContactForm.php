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

        // Optionally, you can emit an event here to notify the parent component or redirect the user.

        

        session()->flash('message', 'Contact details submitted successfully.');

        $this->resetFormFields();
    }

    private function resetFormFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
