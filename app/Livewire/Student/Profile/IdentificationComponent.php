<?php

namespace App\Livewire\Student\Profile;

use App\Models\IdentificationType;
use Livewire\Component;
use Livewire\WithFileUploads;

class IdentificationComponent extends Component
{
    use WithFileUploads;

    public $identifications = [];
    public $identificationTypeId;
    public $identificationNumber;
    public $issuedDate;
    public $expiryDate;
    public $identificationDocument;

//    protected $rules = [
//        'identifications.*.identification_type_id' => 'required|integer',
//        'identifications.*.identification_number' => 'required|string|max:255',
//        'identifications.*.issued_date' => 'nullable|date',
//        'identifications.*.expiry_date' => 'nullable|date',
//        'identifications.*.file_path' => 'required|string|max:255',
//        'identification_type_id' => 'required|integer',
//        'identification_number' => 'required|string|max:255',
//        'issued_date' => 'nullable|date',
//        'expiry_date' => 'nullable|date',
//        'file_path' => 'required|string|max:255',
//    ];

    protected $listeners = ['validateStep6' => 'validateStep'];
    public function render()
    {
        $identificationTypes = IdentificationType::pluck('name', 'id');
        $selectedIdentificationType = 0;
        return view('livewire.student.profile.identification-component',
        [
            'identificationTypes' => $identificationTypes,
            'selectedIdentificationType' => $selectedIdentificationType
        ]);
    }

    public function submit()
    {
//        $this->validate();
        // Collect data

        $docs = $this->identificationDocument->store('uploads', 'public');
        $data = [
            'identification_type_id' => $this->identificationTypeId,
            'identification_number' => $this->identificationNumber,
            'issued_date' => $this->issuedDate,
            'expiry_date' => $this->expiryDate,
            'identificationDocument' => $docs,
        ];
        // Emit data to parent component
        $this->dispatch('identificationSubmitted', $data);
    }

    public function validateStep()
    {
//        $this->validate();

        $this->submit();
    }




}
