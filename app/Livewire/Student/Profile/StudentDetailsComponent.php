<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class StudentDetailsComponent extends Component
{
    public $first_name, $last_name, $date_of_birth, $enrollment_date, $status, $gender_id;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'enrollment_date' => 'required|date',
        'status' => 'required|string',
        'gender_id' => 'required|integer',
    ];
    public function render()
    {
        return view('livewire.student.profile.student-details-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
