<?php

namespace App\Livewire\Student\Profile;

use App\Models\Address;
use App\Models\AddressType;
use App\Models\City;
use App\Models\Contact;
use App\Models\Country;
use App\Models\EmergencyContact;
use App\Models\Gender;
use App\Models\Guardian;
use App\Models\Identification;
use App\Models\IdentificationType;
use App\Models\NextOfKin;
use App\Models\Province;
use App\Models\Student;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditStudentComponent extends Component
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
    public $formatedDob;
    public $enrollmentDate;
    public $formatedEnrollmentDate;
    public $identificationType;
    public $identificationTypes;
    public $selectedIdentificationType;
    public $selectedIdentificationTypeId;
    public $identificationNumber;
    public $identificationDocument;
    public $issuedDate;
    public $formattedIssuedDate;
    public $expiryDate;
    public $formattedExpiryDate;
    public $emergencyFullname;
    public $emergencyRelationship;
    public $emergencyPhonenumber;
    public $emergencyEmail;

    public $address;
    public $selectedAddressId;
    public $countries;
    public $selectedCountryId;
    public $provinces;
    public $selectedProvinceId;
    public $cities;
    public $selectedCityId;
    public $addressLine1;
    public $addressLine2;
    public $addresses;
    public $guardianFirstname;
    public $guardianLastname;
    public $guardianRelationship;
    public $guardianContactDetails;
    public $nextOfKinFirstname;
    public $nextOfKinLastname;
    public $nextOfKinRelationship;
    public $nextOfKinRelationContactDetails;
    public $nextOFKinFirstname;
    public $nextOFKinLastname;
    public $nextOFKinRelationship;
    public $nextOFKinContactDetails;

    protected $studentDetailsRules = [
       'studentFirstname' => 'required|string|max:50',
       'studentLastname' => 'required|string|max:50',
    ];

    protected $studentIdentificationRules = [
        'identificationNumber' => 'required|string|max:50',
    ];

    protected $studentContactsRules = [
        'studentPhonenumber' => 'required|string|max:50',
        'studentEmail' => 'required|string|max:50',
        'emergencyFullname' => 'required|string|max:50',
        'emergencyRelationship' => 'required|string|max:50',
        'emergencyPhonenumber' => 'required|string|max:50',
        'emergencyEmail' => 'required|string|max:50',
    ];

    protected $guardiansRules = [
        'guardianFirstname' => 'required|string|max:50',
        'guardianLastname' => 'required|string|max:50',
        'guardianRelationship' => 'required|string|max:50',
        'guardianContactDetails' => 'required|string|max:50',
    ];

    protected $nextOfKinRules = [
        'nextOFKinFirstname' => 'required|string|max:50',
        'nextOFKinLastname' => 'required|string|max:50',
        'nextOFKinRelationship' => 'required|string|max:50',
        'nextOFKinContactDetails' => 'required|string|max:50',
    ];

    protected $addressRules = [

        'addressLine1' => 'required|string',
    ];


    public function mount($student)
    {

        $this->studentFirstname = $student->first_name;
        $this->studentLastname = $student->last_name;
        $this->studentPhonenumber = $student->contacts[0]->phonenumber;
        $this->studentEmail = $student->contacts[0]->email;
        $this->dateOfBirth = convertToDefaultDateFormat($student->date_of_birth);
        $this->formatedDob = convertToDefaultDateFormat($student->date_of_birth);
        $this->enrollmentDate = convertToDefaultDateFormat($student->enrollment_date);
        $this->formatedEnrollmentDate = convertToDefaultDateFormat($student->enrollment_date);
        $this->identificationNumber = $student->identifications[0]->identification_number;
        $this->identificationDocument = $student->identifications[0]->file_path;


        $this->genders = Gender::pluck('name', 'id');
        $this->selectedGenderId = $student->gender->id;

        $this->identificationTypes = IdentificationType::pluck('name', 'id');
        $this->selectedIdentificationTypeId = $student->identifications[0]->identificationType->id;

        $this->addresses = AddressType::pluck('name', 'id');
        $this->selectedAddressId = $student->addresses[0]->addressType->id;

        $this->countries = Country::pluck('name', 'id');
        $this->selectedCountryId = $student->addresses[0]->country->id;

        $this->provinces = Province::pluck('name', 'id');
        $this->selectedProvinceId = $student->addresses[0]->province->id;

        $this->cities = City::pluck('name', 'id');
        $this->selectedCityId = $student->addresses[0]->city->id;

        $this->issuedDate = convertToDefaultDateFormat($student->identifications[0]->issued_date);
        $this->formattedIssuedDate = convertToDefaultDateFormat($student->identifications[0]->issued_date);
        $this->expiryDate = convertToDefaultDateFormat($student->identifications[0]->expiry_date);
        $this->formattedExpiryDate = convertToDefaultDateFormat($student->identifications[0]->expiry_date);
        $this->identificationType = $student->identifications[0]->identificationType->name;

        $this->emergencyFullname =  $student->emergencyContact->name;
        $this->emergencyRelationship = $student->emergencyContact->relationship;
        $this->emergencyPhonenumber = $student->emergencyContact->phone_number;
        $this->emergencyEmail = $student->emergencyContact->email;
        $this->addressLine1 = $student->addresses[0]->address_line1;
        $this->addressLine2 = $student->addresses[0]->address_line2;

        $this->guardianFirstname = $student->guardian->first_name;
        $this->guardianLastname = $student->guardian->last_name;
        $this->guardianRelationship = $student->guardian->relationship;
        $this->guardianContactDetails = $student->guardian->phonenumber;

        $this->nextOFKinFirstname = $student->nextOfKin->first_name;
        $this->nextOFKinLastname = $student->nextOfKin->last_name;
        $this->nextOFKinRelationship = $student->nextOfKin->relationship;
        $this->nextOFKinContactDetails = $student->nextOfKin->phonenumber;

        $this->student = $student;
    }


    public function render()
    {
        return view('livewire.student.profile.edit-student-component');
    }

    public function updateStudentDetails(){
        $validation = $this->validate($this->studentDetailsRules);

        if($validation) {
            $convertedDateOfBirth = convertDateFormat($this->dateOfBirth);
            $convertedEnrollment = convertDateFormat($this->enrollmentDate);
            $studentData = Student::find($this->student->id);
            if ($studentData) {
                $studentData->update([
//                    'address' => $this->address,
                    'first_name' => $this->studentFirstname,
                    'last_name' => $this->studentLastname,
                    'date_of_birth' => $convertedDateOfBirth,
                    'enrollment_date' => $convertedEnrollment,
                    'gender_id' => $this->selectedGenderId,
                ]);
                request()->session()->flash('studentDataUpdated', 'Student details saved successfully submitted.');
            }
        }
    }

    public function updateIdentificationDetails()
    {
        $validation = $this->validate($this->studentIdentificationRules);

        if($validation) {
            $convertedIssuedDate = convertDateFormat($this->issuedDate);
            $convertedExpiryDate = convertDateFormat($this->expiryDate);
            $identificationData = Identification::where('student_id', $this->student->id)->first();
            if ($identificationData) {
                $identificationData->update([
//                   'address' => $this->address,
                    'identification_type_id' => $this->selectedIdentificationTypeId,
                    'identification_number' => $this->identificationNumber,
                    'issued_date' => $convertedIssuedDate,
                    'expiry_date' => $convertedExpiryDate,
                ]);
                request()->session()->flash('identificationDataUpdated', 'Identification details saved successfully submitted.');
            }
        }
    }

    public function updateStudentContactDetails() {

        $validation = $this->validate($this->studentContactsRules);

        if($validation) {

            $contactsData = Contact::where('student_id', $this->student->id)->first();
            $emergencyData = EmergencyContact::where('student_id', $this->student->id)->first();
            if ($contactsData && $emergencyData) {
                $contactsData->update([
                    'phonenumber' => $this->studentPhonenumber,
                    'email' => $this->studentEmail,
                ]);

                $emergencyData->update([
                    'name' => $this->emergencyFullname,
                    'relationship' => $this->emergencyRelationship,
                    'phone_number' => $this->emergencyPhonenumber,
                    'email' => $this->emergencyEmail,
                ]);

                request()->session()->flash('contactsDataUpdated', 'Contact details saved successfully submitted.');
            }
        }

    }

    public function updateAddressDetails() {

        $validation = $this->validate($this->addressRules);

        if($validation) {

            $addressData = Address::where('student_id', $this->student->id)->first();

            if ($addressData) {
                $addressData->update([
                    'address_type_id' => $this->selectedAddressId,
                    'country_id' => $this->selectedCountryId,
                    'address_line1' => $this->addressLine1,
                    'address_line2' => $this->addressLine2,
                    'city_id' => $this->selectedCityId,
                    'province_id' => $this->selectedProvinceId,
                ]);

                request()->session()->flash('addressDataUpdated', 'Address details saved successfully submitted.');
            }
        }
    }

    public function updateGuardianDetails() {

        $validation = $this->validate($this->guardiansRules);

        if($validation) {

            $guardianData = Guardian::where('student_id', $this->student->id)->first();

            if ($guardianData) {
                $guardianData->update([
                    'first_name' => $this->guardianFirstname,
                    'last_name' => $this->guardianLastname,
                    'relationship' => $this->guardianRelationship,
                    'phonenumber' => $this->guardianContactDetails,

                ]);

                request()->session()->flash('guardianDataUpdated', 'Guardian details saved successfully submitted.');
            }
        }
    }

    public function updateNextOfKinDetails() {

        $validation = $this->validate($this->nextOfKinRules);

        if($validation) {

            $nextOfKinData = NextOfKin::where('student_id', $this->student->id)->first();

            if ($nextOfKinData) {
                $nextOfKinData->update([
                    'first_name' => $this->nextOFKinFirstname,
                    'last_name' => $this->nextOFKinLastname,
                    'relationship' => $this->nextOFKinRelationship,
                    'phonenumber' => $this->nextOFKinContactDetails,

                ]);

                request()->session()->flash('nextOfKinDataUpdated', 'Next of kin details saved successfully submitted.');
            }
        }
    }
}
