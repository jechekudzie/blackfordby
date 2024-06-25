<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class IdentificationComponent extends Component
{

    public $identifications = [];
    public $identification_type_id, $identification_number, $issued_date, $expiry_date, $file_path;

    protected $rules = [
        'identifications.*.identification_type_id' => 'required|integer',
        'identifications.*.identification_number' => 'required|string|max:255',
        'identifications.*.issued_date' => 'nullable|date',
        'identifications.*.expiry_date' => 'nullable|date',
        'identifications.*.file_path' => 'required|string|max:255',
        'identification_type_id' => 'required|integer',
        'identification_number' => 'required|string|max:255',
        'issued_date' => 'nullable|date',
        'expiry_date' => 'nullable|date',
        'file_path' => 'required|string|max:255',
    ];
    public function render()
    {
        return view('livewire.student.profile.identification-component');
    }
}
