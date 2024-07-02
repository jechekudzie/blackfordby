<div>
    <!-- resources/views/livewire/languages.blade.php -->

    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.floating-input
                wire:model="language"
                name="language"
                id="language"
                placeholder="Language" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.drop-down
                wire:model="proficiency_level"
                name="proficiency_level"
                :options="$languageProficiencyLevels"
                :selected="$selectedProficientLevel"
                placeholder="Proficiency Level" />
        </x-form.input-padding>
    </form>
</div>
