<?php

namespace App\Livewire\Student\Profile;

use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewStudentComponent extends Component
{

    public Student $student;

    public $isEditStudentProfile = false;

    public function mount($student)
    {

        $this->student = $student;


    }

    public function render()
    {

        return view('livewire.student.profile.view-student-component');
    }

    #[On('setProfileEditMode')]
    public function setProfileEditMode() {

        $this->isEditStudentProfile = true;
    }


}
