<?php

namespace App\Livewire\Student\Profile;

use App\Models\Gender;
use App\Models\Student;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewStudentComponent extends Component
{

    public Student $student;

    public $isEditStudentProfile = true;

    //Edit Student variables
    public $studentFirstname;
    public $studentLastname;
    public $studentPhonenumber;
    public $studentEmail;
    public $selectedGenderId;
    public $genders;
    public $dateOfBirth;
    public $enrollmentDate;


    public function mount($student)
    {
//        $this->studentFirstname = $student->first_name;
//        $this->studentLastname = $student->last_name;
//        $this->studentPhonenumber = $student->contacts[0]->phonenumber;
//        $this->studentEmail = $student->contacts[0]->email;
//        $this->dateOfBirth = $student->date_of_birth;
//        $this->enrollmentDate = $student->enrollment_date;

        $this->genders = Gender::pluck('name', 'id');
        $this->selectedGenderId = $student->gender->id;

        $this->student = $student;


    }

    public function render()
    {
        return view('livewire.student.profile.view-student-component');
    }

    #[On('setProfileEditMode')]
    public function setProfileEditMode() {

        $this->isEditStudentProfile = false;
    }

    public function getHumanDate($date) {
        return convertDateToHumanFormat($date);
    }




}
