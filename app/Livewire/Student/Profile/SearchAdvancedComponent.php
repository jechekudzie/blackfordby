<?php

namespace App\Livewire\Student\Profile;

use App\Models\Institution;
use Livewire\Component;

class SearchAdvancedComponent extends Component
{

    public $search = '';
    public $schools;

    public function render()
    {
        $this->schools = Institution::where('institution_name', 'like', "%{$this->search}%")->get();
        return view('livewire.student.profile.search-advanced-component');
    }

    public function selectSchool($id, $institution_name){
        $this->dispatch('advanced-level-school-selected', $id, $institution_name);
    }
}
