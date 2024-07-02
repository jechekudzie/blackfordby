<?php

namespace App\Livewire\Student\Profile;

use App\Models\AddressType;
use App\Models\ProficiencyLevel;
use Livewire\Component;

class LanguagesComponent extends Component
{
    public $languages = [];
    public $language;
    public $proficiency_level;
    public  $certification;

//    protected $rules = [
//        'languages.*.language' => 'required|string|max:255',
//        'languages.*.proficiency_level' => 'required|string|max:255',
//        'languages.*.certification' => 'nullable|string|max:255',
//        'language' => 'required|string|max:255',
//        'proficiency_level' => 'required|string|max:255',
//        'certification' => 'nullable|string|max:255',
//    ];

    protected $listeners = ['validateStep4' => 'validateStep'];
    public function render()
    {
        $languageProficiencyLevels = ProficiencyLevel::pluck('name', 'id');
        $selectedProficientLevel = 0;
        return view('livewire.student.profile.languages-component',
        [
            'languageProficiencyLevels' => $languageProficiencyLevels,
            'selectedProficientLevel' => $selectedProficientLevel,
        ]
        );
    }

    public function submit(){
        $data = [
            'language' => $this->language,
            'proficiency_level' => $this->proficiency_level,
        ];
        $this->dispatch('languagesSubmitted', $data);
    }

    public function validateStep()
    {
//      $this->validate();

        $this->submit();
    }

}
