<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class NextOfKinComponent extends Component
{
    public $next_of_kins = [];
    public $first_name, $last_name, $relationship, $contact_details;

    protected $rules = [
        'next_of_kins.*.first_name' => 'required|string|max:255',
        'next_of_kins.*.last_name' => 'required|string|max:255',
        'next_of_kins.*.relationship' => 'required|string|max:255',
        'next_of_kins.*.contact_details' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'relationship' => 'required|string|max:255',
        'contact_details' => 'required|string|max:255',
    ];
    public function render()
    {
        return view('livewire.student.profile.next-of-kin-component');
    }
}
