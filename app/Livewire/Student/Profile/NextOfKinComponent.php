<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class NextOfKinComponent extends Component
{
    public $next_of_kins = [];
    public $firstName, $lastName, $relationship, $contactDetails;

//    protected $rules = [
//        'next_of_kins.*.first_name' => 'required|string|max:255',
//        'next_of_kins.*.last_name' => 'required|string|max:255',
//        'next_of_kins.*.relationship' => 'required|string|max:255',
//        'next_of_kins.*.contact_details' => 'required|string|max:255',
//        'first_name' => 'required|string|max:255',
//        'last_name' => 'required|string|max:255',
//        'relationship' => 'required|string|max:255',
//        'contact_details' => 'required|string|max:255',
//    ];

    protected $listeners = ['validateStep5' => 'validateStep'];

    public function render()
    {
        return view('livewire.student.profile.next-of-kin-component');
    }

    //    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//    }

    public function submit()
    {
//        $this->validate();

        // Collect data
        $data = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'relationship' => $this->relationship,
            'contact_details' => $this->contactDetails,
        ];

        // Emit data to parent component
        $this->dispatch('nextOfKinSubmitted', $data);
    }

    public function validateStep()
    {
//        $this->validate();

        $this->submit();
    }


}
