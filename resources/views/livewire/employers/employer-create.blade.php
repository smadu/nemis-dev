<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Employer') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create employer profile and account') }}
        </flux:subheading>
        <flux:separator variant="subtle" />

        <form wire:submit.prevent="save" class="mt-6 max-w-xl space-y-6">

            <flux:field>
                <flux:input label="Full Name" wire:model.defer="full_name" placeholder="Enter full name" />
            </flux:field>

            <flux:field>
                <flux:input label="Nic" wire:model.defer="nic" placeholder="Enter NIC" />
            </flux:field>

            <flux:field>
                <flux:input label="Email" type="email" wire:model.defer="email" placeholder="Enter email" />
            </flux:field>

            <flux:field>
                <flux:input label="Phone" wire:model.defer="phone" placeholder="Enter phone number" />
            </flux:field>

            <flux:field>
                <flux:textarea label="Address" wire:model.defer="address" placeholder="Enter address"></flux:textarea>
            </flux:field>

            <div class="flex justify-end">
                <flux:button type="submit" variant="primary">
                    Save Employer
                </flux:button>
            </div>
        </form>

        @if (session()->has('success'))
            <div class="mt-4 text-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
</div>

