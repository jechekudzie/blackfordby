<div>
    <!-- resources/views/livewire/languages.blade.php -->

    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.floating-input  wire:model="language"  name="language" id="language" placeholder="Language" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.drop-down
                name="proficiency_level"
                :options="['male', 'female']"
                :selected="'male'"
                placeholder="Proficiency Level" />
        </x-form.input-padding>
    </form>
</div>
