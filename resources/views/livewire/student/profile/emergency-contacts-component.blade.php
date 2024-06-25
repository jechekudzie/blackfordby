<div>
    <form wire:submit.prevent="submit">
        <x-form.input-padding>
            <x-form.floating-input  wire:model="name"  name="name" id="first_name" placeholder="Fullname" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="relationship"  name="relationship" id="relationship" placeholder="Relationship" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="phone_number"  name="phone_number" id="phone_number" placeholder="Phonenumber" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="email"  name="email" id="email" placeholder="Email" />
        </x-form.input-padding>

        <x-form.input-padding>
            <x-form.floating-input  wire:model="priority"  name="priority" id="priority" placeholder="Priority" />
        </x-form.input-padding>
    </form>
</div>
