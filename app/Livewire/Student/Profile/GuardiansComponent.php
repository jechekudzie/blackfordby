<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class GuardiansComponent extends Component
{
    public $guardians = [];
    public $first_name, $last_name, $relationship, $contact_details;

    protected $rules = [
        'guardians.*.first_name' => 'required|string|max:255',
        'guardians.*.last_name' => 'required|string|max:255',
        'guardians.*.relationship' => 'required|string|max:255',
        'guardians.*.contact_details' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'relationship' => 'required|string|max:255',
        'contact_details' => 'required|string|max:255',
    ];
    public function render()
    {
        return view('livewire.student.profile.guardians-component');
    }
}
