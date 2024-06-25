<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class AddressComponent extends Component
{
    public $addresses = [];
    public $address_type_id, $country_id, $address_line1, $address_line2, $city, $state, $zip_code;

    protected $rules = [
        'addresses.*.address_type_id' => 'required|integer',
        'addresses.*.country_id' => 'required|integer',
        'addresses.*.address_line1' => 'required|string|max:255',
        'addresses.*.address_line2' => 'nullable|string|max:255',
        'addresses.*.city' => 'required|string|max:255',
        'addresses.*.state' => 'required|string|max:255',
        'addresses.*.zip_code' => 'required|string|max:10',
        'address_type_id' => 'required|integer',
        'country_id' => 'required|integer',
        'address_line1' => 'required|string|max:255',
        'address_line2' => 'nullable|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'zip_code' => 'required|string|max:10',
    ];

    public function render()
    {
        return view('livewire.student.profile.address-component');
    }
}
