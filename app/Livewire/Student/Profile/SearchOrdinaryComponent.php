<?php

namespace App\Livewire\Student\Profile;

use App\Models\Institution;
use Livewire\Component;

class SearchOrdinaryComponent extends Component
{
    public $search = '';
    public $schools;

    public function render()
    {
        $this->schools = Institution::where('institution_name', 'like', "%{$this->search}%")->get();
        return view('livewire.student.profile.search-ordinary-component',
        [
            'schools' => $this->schools
        ]);
    }

    public function selectSchool($id, $institution_name){
        $this->dispatch('ordinary-level-school-selected', $id, $institution_name);
    }
}
