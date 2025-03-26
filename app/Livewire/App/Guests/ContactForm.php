<?php

namespace App\Livewire\App\Guests;

use Livewire\Component;
use Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $notification = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10'
    ];

    public function send()
    {
        $this->validate();

        try {
            $this->dispatch('show-loading'); // Mostrar modal de carga

            // Mail::to('contacto@tu-sitio.com')->send(new ContactMessage($this->name, $this->email, $this->message));

            $this->reset('name', 'email', 'message');
            $this->dispatch('hide-loading'); // Ocultar modal de carga
            $this->notification = 'Mensaje enviado correctamente';
        } catch (\Exception $e) {
            $this->dispatch('hide-loading');
            $this->notification = 'Error al enviar mensaje: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.app.guests.contact-form');
    }
}
