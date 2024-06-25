<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class StudentFormStepperComponent extends Component
{
    public $currentStep = 1;
    public function render()
    {
        return view('livewire.student.profile.student-form-stepper-component');
    }

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }
}
