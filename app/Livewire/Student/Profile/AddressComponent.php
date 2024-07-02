<?php

namespace App\Livewire\Student\Profile;

use App\Models\AddressType;
use App\Models\Country;
use Livewire\Component;

class AddressComponent extends Component
{
    public $addresses = [];
        public $addressTypeId;
        public $countryId;
        public $addressLine1;
        public $addressLine2;
        public $city;
        public $state;
        public $zipCode;

//    protected $rules = [
//        'addresses.*.address_type_id' => 'required|integer',
//        'addresses.*.country_id' => 'required|integer',
//        'addresses.*.address_line1' => 'required|string|max:255',
//        'addresses.*.address_line2' => 'nullable|string|max:255',
//        'addresses.*.city' => 'required|string|max:255',
//        'addresses.*.state' => 'required|string|max:255',
//        'addresses.*.zip_code' => 'required|string|max:10',
//        'address_type_id' => 'required|integer',
//        'country_id' => 'required|integer',
//        'address_line1' => 'required|string|max:255',
//        'address_line2' => 'nullable|string|max:255',
//        'city' => 'required|string|max:255',
//        'state' => 'required|string|max:255',
//        'zip_code' => 'required|string|max:10',
//    ];

    protected $listeners = ['validateStep3' => 'validateStep'];


    public function render()
    {
        $addressTypes = AddressType::pluck('name', 'id');
        $addressTypeSelected = 0;
        $countries = Country::pluck('name', 'id');
        $selectedCountry = 0;
        return view('livewire.student.profile.address-component', [
            'addressTypes' => $addressTypes,
            'addressTypeSelected' => $addressTypeSelected,
            'countries' => $countries,
            'selectedCountry' => $selectedCountry,
        ]);
    }

//    public function updated($propertyName)
//    {
//        $this->validateOnly($propertyName);
//    }

    public function submit(){
        $data = [
            'address_type_id' => $this->addressTypeId,
            'country_id' => $this->countryId,
            'address_line1' => $this->addressLine1,
            'address_line2' => $this->addressLine2,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zipCode,
        ];

        // Emit data to parent component
        $this->dispatch('addressSubmitted', $data);
    }

    public function validateStep()
    {
//        $this->validate();

        $this->submit();
    }
}
