<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class GuardiansComponent extends Component
{
    public $guardians = [];
    public $guardianFirstName;
    public $guardianLastName;
    public $guardianRelationship;
    public $guardianContactDetails;
    public $nextOfKinFirstName;
    public $nextOfKinLastName;
    public $nextOfKinRelationship;
    public $nextOfKinContactDetails;


//    protected $rules = [
//        'guardians.*.first_name' => 'required|string|max:255',
//        'guardians.*.last_name' => 'required|string|max:255',
//        'guardians.*.relationship' => 'required|string|max:255',
//        'guardians.*.contact_details' => 'required|string|max:255',
//        'first_name' => 'required|string|max:255',
//        'last_name' => 'required|string|max:255',
//        'relationship' => 'required|string|max:255',
//        'contact_details' => 'required|string|max:255',
//    ];

    protected $listeners = ['validateStep3' => 'validateStep'];
    public function render()
    {
        return view('livewire.student.profile.guardians-component');
    }

//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//    }

    public function submit()
    {
//        $this->validate();

        // Collect data
        $guardianData = [
            'student_id' => 1,
            'first_name' => $this->guardianFirstName,
            'last_name' => $this->guardianLastName,
            'relationship' => $this->guardianRelationship,
            'contact_details' => $this->guardianContactDetails,
        ];

        $nextOfKinData = [
            'student_id' => 1,
            'first_name' => $this->nextOfKinFirstName,
            'last_name' => $this->nextOfKinLastName,
            'relationship' => $this->nextOfKinRelationship,
            'contact_details' => $this->nextOfKinContactDetails,
        ];

        // Emit data to parent component
        $this->dispatch('guardiansSubmitted', $guardianData, $nextOfKinData);
    }

    public function validateStep()
    {
//        $this->validate();

        $this->submit();
    }
}
