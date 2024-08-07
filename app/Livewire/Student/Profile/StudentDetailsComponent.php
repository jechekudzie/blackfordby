<?php

namespace App\Livewire\Student\Profile;

use App\Models\Gender;
use App\Models\IdentificationType;
use App\Models\MaritalStatus;
use App\Models\Title;
use Exception;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentDetailsComponent extends Component
{
    use WithFileUploads;

    public $first_name, $last_name, $date_of_birth, $enrollment_date, $status, $gender_id;
    public $identificationTypeId;
    public $identificationNumber;
    public $issuedDate;
    public $expiryDate;
    public $identificationDocument;
    public $selectedTitleId;
    public $selectedMaritalStatus;

    public $birthCertificate = '';
    public $marriageCertificate = '';

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
//        'date_of_birth' => 'required|date',
//        'enrollment_date' => 'required|date',
        'status' => 'required|string',
        'gender_id' => 'required|integer',
    ];



    protected $listeners = [
        'validateStep1' => 'validateStep',
//        'dateOfBirthUpdated' => 'updateDateOfBirth',
//        'enrollmentDateUpdated' => 'updateEnrollmentDate',

    ];

    public function render() {
        $genders = Gender::pluck('name', 'id');
        $selectedGender = 0;
        $identificationTypes = IdentificationType::pluck('name', 'id');
        $selectedIdentificationType = 0;
        $titles = Title::pluck('name', 'id');
        $this->selectedTitleId = 0;
        $maritalStatus = MaritalStatus::pluck('name', 'id');
        $this->selectedMaritalStatus = 0;

        return view('livewire.student.profile.student-details-component',
            [
                'genders' => $genders,
                'selectedGender' => $selectedGender,
                'identificationTypes' => $identificationTypes,
                'selectedIdentificationType' => $selectedIdentificationType,
                'titles' => $titles,
                'maritalStatus' => $maritalStatus,
                'title_id' => $this->selectedTitleId,
                'marital_status_id' => $this->selectedMaritalStatus,
            ]);
    }




    public function updateDateOfBirth($value)
    {

        $this->date_of_birth = $value;
    }

    public function updateEnrollmentDate($value)
    {
        $this->enrollment_date = $value;
    }

    public function updatedidentificationTypeId($value)
    {


    }

    public function setDateOfBirth($date) {
        $this->date_of_birth = $date;
    }

    public function setEnrollmentDate($date) {
        $this->enrollment_date = $date;
    }

    public function submit()
    {
//        $this->validate();

        $convertedDateOfBirth = convertDateFormat($this->date_of_birth);
        $convertedEnrollment = convertDateFormat($this->enrollment_date);
        $issuedDate = convertDateFormat($this->issuedDate);
        $expiryDate = convertDateFormat($this->expiryDate);
        $file = $this->identificationDocument->store('uploads', 'public');
        $birthcertificateFile = $this->birthCertificate->store('uploads', 'public');
        $marriageFile = $this->marriageCertificate->store('uploads', 'public');
        // Collect data
        $data = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'date_of_birth' => $convertedDateOfBirth,
            'enrollment_date' => $convertedEnrollment,
            'status' => $this->status,
            'gender_id' => $this->gender_id,
            'title_id' => $this->selectedTitleId,
            'marital_status_id' => $this->selectedMaritalStatus,
        ];

        $identificationData = [
            'student_id' => 0,
            'identification_type_id' => $this->identificationTypeId,
            'identification_number' => $this->identificationNumber,
            'issued_date' => $issuedDate,
            'expiry_date' => $expiryDate,
            'file_path' => $file,
            'birth_certificate' => $birthcertificateFile,
            'marriage_certificate' => $marriageFile,
        ];



        // Emit data to parent component
        $this->dispatch('studentDetailsSubmitted', $data, $identificationData);
    }

    public function validateStep()
    {
//        $this->validate();

        $this->submit();
    }

}
