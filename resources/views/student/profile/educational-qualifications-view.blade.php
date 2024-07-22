<x-layouts.app>
    @slot('content')
        @livewire('student.profile.educational-requirements-component',
        ['student' => $studentData])
    @endslot
</x-layouts.app>
