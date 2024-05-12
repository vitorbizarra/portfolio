<?php

namespace App\Livewire\Web\Components;

use App\Livewire\Forms\ContactForm;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Contact extends Component
{
    use Interactions;
    
    public ContactForm $form;

    public function save()
    {
        $this->form->store();

        $this->finishContact();
    }

    private function finishContact()
    {
        $this->dialog()->success('Sucesso!', 'Contato realizado com sucesso! Em breve entrarei em contato com você! :)')->send();
        $this->form->reset();
    }
}
