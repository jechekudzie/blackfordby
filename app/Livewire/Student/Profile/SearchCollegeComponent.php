<?php

namespace App\Livewire\Student\Profile;

use App\Models\Institution;
use Livewire\Component;

class SearchCollegeComponent extends Component
{
    public $search = '';
    public $schools;


    public function render()
    {
        $this->schools = Institution::where('institution_name', 'like', "%{$this->search}%")->get();
        return view('livewire.student.profile.search-college-component');
    }

    public function selectSchool($id, $institution_name){
        $this->dispatch('college-selected', $id, $institution_name);
    }
}
