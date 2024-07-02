<?php

namespace App\Livewire\Student\Profile;

use App\Models\AddressType;
use App\Models\City;
use App\Models\ContactType;
use App\Models\Country;
use App\Models\Province;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use function Laravel\Prompts\select;

class ContactsComponent extends Component
{
    public $contactTypeId;
    public $studentId;
    public $contact;

    public $studentPhonenumber;

    public $email;
    public $emergencyContactFullname;

    public $relationship;
    public $emergencyPhonenumber;
    public $emergencyEmail;

    public $addressTypeId;
    public $countryId;
    public $provinceId;
    public $cityId;

    public $addressLineOne;
    public $addressLineTwo;
    public $city;
    public $provinces;
    public $cities = [];

    public $addressTypes;
    public $addressTypeSelected = 0;
    public $contacts;
    public $selectedContactType;
    public $countries;
    public $selectedCountry;

    public $selectedProvince;
    public $selectedCity;

    protected $rules = [];

    protected $listeners = [
        'validateStep2' => 'validateStep',
    ];

    public function mount()
    {
        $this->contacts = ContactType::pluck('name', 'id');
        $this->selectedContactType = 0;
        $this->addressTypes = AddressType::pluck('name', 'id');
        $this->addressTypeSelected = 0;
        $this->countries = Country::pluck('name', 'id');
        $this->selectedCountry = 0;
        $this->provinces = Province::pluck('name', 'id');
        $this->selectedProvince = 0;
        $this->cities = City::pluck('name', 'id');
        $this->selectedCity = 0;
    }


    public function updatedProvinceId($newValue)
    {
        $this->cities = City::where('province_id', $newValue)
            ->pluck('name', 'id');
        $this->cityId = null; // Reset cityId when province changes
    }

    public function render()
    {
        return view('livewire.student.profile.contacts-component');
    }


    public function submit(){
        $studentContactdata = [
            'student_id' => 1,
            'phonenumber' => $this->studentPhonenumber,
            'email' => $this->email,
        ];

        $emergencyContacts = [
            'student_id' => 1,
            'name' => $this->emergencyContactFullname,
            'relationship' => $this->relationship,
            'phone_number' => $this->emergencyPhonenumber,
            'email' => $this->emergencyEmail,
        ];

        $address = [
            'student_id' => 1,
            'address_type_id' => $this->addressTypeId,
            'country_id' => $this->countryId,
            'address_line1' => $this->addressLineOne,
            'address_line2' => $this->addressLineTwo,
            'city_id' => $this->cityId,
            'province_id' => $this->provinceId,
        ];


        $this->dispatch('contactsSubmitted', $studentContactdata, $emergencyContacts, $address);
    }

    public function validateStep()
    {
//      $this->validate();
        $this->submit();
    }
}
