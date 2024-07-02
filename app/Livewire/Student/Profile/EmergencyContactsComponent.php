<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class EmergencyContactsComponent extends Component
{

    public $emergency_contacts = [];
    public $name, $relationship, $phone_number, $email, $priority;

//    protected $rules = [
//        'emergency_contacts.*.name' => 'required|string|max:255',
//        'emergency_contacts.*.relationship' => 'required|string|max:255',
//        'emergency_contacts.*.phone_number' => 'required|string|max:15',
//        'emergency_contacts.*.email' => 'required|email|max:255',
//        'emergency_contacts.*.priority' => 'required|integer',
//        'name' => 'required|string|max:255',
//        'relationship' => 'required|string|max:255',
//        'phone_number' => 'required|string|max:15',
//        'email' => 'required|email|max:255',
//        'priority' => 'required|integer',
//    ];

    public function render()
    {
        return view('livewire.student.profile.emergency-contacts-component');
    }
}
