<div>
    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.floating-input  wire:model="first_name"  name="first_name" id="first_name" placeholder="First Name" />
        </x-form.input-padding>
        <x-form.input-padding>
            <x-form.floating-input  wire:model="last_name"  name="last_name" id="last_name" placeholder="Last Name" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="relationship"  name="relationship" id="relationship" placeholder="Relationship" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="contact_details"  name="contact_details" id="contact_details" placeholder="Contact Details" />
        </x-form.input-padding>
    </form>
</div>
