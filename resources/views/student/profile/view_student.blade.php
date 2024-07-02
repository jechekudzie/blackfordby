<x-layouts.app>
    @slot('content')
    @livewire('student.profile.view-student-component',  ['student' => $studentData])
    @endslot
</x-layouts.app>
