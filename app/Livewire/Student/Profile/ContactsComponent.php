<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class ContactsComponent extends Component
{
    public $contacts = [];
    public $contact_type_id, $value;

    public function render()
    {
        return view('livewire.student.profile.contacts-component');
    }
}
