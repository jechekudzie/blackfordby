<?php

namespace App\Livewire\Student\Profile;

use App\Models\Student;
use http\Client\Curl\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ViewStudentsComponent extends Component
{
    use WithPagination;

    public $search = '';

    public $gender = 0;

    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $perPage = 1;

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : "ASC";
            return;
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function delete(Student $student)
    {
        $student->delete();
    }


    public function viewStudent($id) {
        $student = Student::find($id);
        $this->dispatch('userSelected',  $student);
//        $this->dispatch('dataPassed', $student);
        return redirect()->route('view_student', $student );
    }


    public function render()
    {
        $students = Student::with('identifications')
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);
        return view('livewire.student.profile.view-students-component',
        ['students' => $students]);
    }
}
