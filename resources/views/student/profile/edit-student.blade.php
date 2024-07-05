<x-layouts.app>
    @slot('content')
        @livewire('student.profile.edit-student-component', ['student' => $studentData])
    @endslot
</x-layouts.app>
