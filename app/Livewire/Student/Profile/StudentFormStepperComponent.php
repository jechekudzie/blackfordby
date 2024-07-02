<?php

namespace App\Livewire\Student\Profile;

use App\Models\Address;
use App\Models\Contact;
use App\Models\EmergencyContact;
use App\Models\Guardian;
use App\Models\Identification;
use App\Models\Language;
use App\Models\NextOfKin;
use App\Models\Student;
use Livewire\Component;
use PhpParser\Node\Scalar\String_;

class StudentFormStepperComponent extends Component
{
    public $currentStep = 1;

    // Variables to store data from each step
    public $studentDetails = [];
    public $contacts = [];
    public $addresses = [];
    public $guardians = [];
    public $nextOfKins = [];
    public $identifications = [];
    public $emergencyContacts = [];
    public $languages = [];

    protected $listeners = [
    'studentDetailsSubmitted' => 'storeStudentDetails',
    'contactsSubmitted' => 'storeContacts',
    'addressSubmitted' => 'storeAddresses',
    'guardiansSubmitted' => 'storeGuardians',
    'nextOfKinSubmitted' => 'storeNextOfKins',
    'identificationSubmitted' => 'storeIdentifications',
    'emergencyContactsSubmitted' => 'storeEmergencyContacts',
    'languagesSubmitted' => 'storeLanguages',
    'previousStep' => 'previousStep',
    'initializeData' => 'initializeData',
];

    public function render()
{
    return view('livewire.student.profile.student-form-stepper-component');
}



    public function nextStep()
{
    $this->dispatch('validateStep' . $this->currentStep);
}

    public function previousStep()
{
    $this->currentStep--;
}

    public function stepValidated()
{
    $this->currentStep++;
}

    // Store data from each step
    public function storeStudentDetails($data, $identificationData)
{

    $this->identifications = $identificationData;
    $this->studentDetails = $data;
    $this->stepValidated();
}

    public function storeContacts(
        $studentContactdata,
        $emergencyContacts,
        $address)
    {

        $this->contacts = $studentContactdata;
        $this->emergencyContacts = $emergencyContacts;
        $this->addresses = $address;
        $this->stepValidated();
    }

    public function storeAddresses($data)
{
    $this->addresses = $data;
    $this->stepValidated();
}

    public function storeGuardians($guardianData, $nextOfKinData)
{
    $this->guardians = $guardianData;
    $this->nextOfKins = $nextOfKinData;
    $this->stepValidated();
}

    public function storeNextOfKins($data)
{

    $this->nextOfKins = $data;
    $this->stepValidated();
}

    public function storeIdentifications($data)
{
    $this->identifications = $data;
    $this->stepValidated();
}

    public function storeEmergencyContacts($data)
{
    $this->emergencyContacts = $data;
    $this->stepValidated();
}

    public function storeLanguages($data)
{
    $this->saveAllData($data);
}

    // Save all data to the database
    public function saveAllData($data)
    {
        $student = Student::create($this->studentDetails);
        $newStudentId = $student->id;

        $updatedContactsArray = $this->updateStudentIdInArray($this->contacts, $newStudentId);
        Contact::create($updatedContactsArray);

        $updatedAddressesArray = $this->updateStudentIdInArray($this->addresses, $newStudentId);
        Address::create($updatedAddressesArray);

        $updatedGuardiansArray = $this->updateStudentIdInArray($this->guardians, $newStudentId);
        Guardian::create($updatedGuardiansArray);

        $updatedNextOfKinsArray = $this->updateStudentIdInArray($this->nextOfKins, $newStudentId);
        NextOfKin::create($updatedNextOfKinsArray);

        $updatedIdentificationsArray = $this->updateStudentIdInArray($this->identifications, $newStudentId);
        Identification::create($updatedIdentificationsArray);

        $updatedEmergencyContactsArray = $this->updateStudentIdInArray($this->emergencyContacts, $newStudentId);
        EmergencyContact::create($updatedEmergencyContactsArray);

        $updatedLanguagesArray = $this->updateStudentIdInArray($data, $newStudentId);
        Language::create($updatedLanguagesArray);

        // Redirect or show a success message
        session()->flash('message', 'Student information saved successfully.');
        return redirect()->route('view_students');
    }


    public function updateStudentIdInArray(array $data, int $studentId)
    {
        // Update the student_id in the array using the value from $this->studentDetails
        $data['student_id'] = $studentId;
        return $data;
    }
}
