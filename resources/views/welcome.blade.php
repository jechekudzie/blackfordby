<x-layouts.app>
    @slot('content')
        @livewire('student.profile.student-form-stepper-component')
    @endslot
   <script>
        document.addEventListener('livewire:initialized', function () {
        });
   </script>
</x-layouts.app>

