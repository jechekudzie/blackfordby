<?php

namespace App\Livewire\Student\Profile;

use Livewire\Component;

class LanguagesComponent extends Component
{
    public $languages = [];
    public $language, $proficiency_level, $certification;

    protected $rules = [
        'languages.*.language' => 'required|string|max:255',
        'languages.*.proficiency_level' => 'required|string|max:255',
        'languages.*.certification' => 'nullable|string|max:255',
        'language' => 'required|string|max:255',
        'proficiency_level' => 'required|string|max:255',
        'certification' => 'nullable|string|max:255',
    ];

    public function render()
    {
        return view('livewire.student.profile.languages-component');
    }
}
