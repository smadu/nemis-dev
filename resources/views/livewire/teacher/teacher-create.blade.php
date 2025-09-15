<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Teacher') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create teacher profile and account') }}
        </flux:subheading>
        <flux:separator variant="subtle" />

        <form wire:submit.prevent="save" class="mt-6 max-w-xl space-y-6">

            <div class="flex gap-4">
                <div class="w-1/5">
                    <flux:field>
                        <flux:select label="Title" wire:model.defer="title" placeholder="Select">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr">Dr</option>
                        </flux:select>
                    </flux:field>
                </div>

                <div class="w-4/5">
                    <flux:field>
                        <flux:input label="Full Name" wire:model.defer="full_name" placeholder="Enter full name" />
                    </flux:field>
                </div>
            </div>

            <div class="flex gap-4">
                <!-- Gender -->
                <div class="w-1/2">
                    <flux:field>
                        <flux:select label="Gender" wire:model.defer="gender" placeholder="Select Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </flux:select>
                    </flux:field>
                </div>

                <!-- Birthday -->
                <div class="w-1/2">
                    <flux:field>
                        <flux:input type="date" label="Birthday" wire:model.defer="birthday" />
                    </flux:field>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Ethnicity -->
                <div class="md:w-1/2 w-full">
                    <flux:field>
                        <flux:select label="Ethnicity" wire:model.defer="ethnicity" placeholder="Select Ethnicity">
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Burgher">Burgher</option>
                            <option value="Malay">Malay</option>
                            <option value="Other">Other</option>
                        </flux:select>
                    </flux:field>
                </div>

                <!-- Civil Status -->
                <div class="md:w-1/2 w-full">
                    <flux:field>
                        <flux:select label="Civil Status" wire:model.defer="civil_status" placeholder="Select Status">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Separated">Separated</option>
                        </flux:select>
                    </flux:field>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Blood Group -->
                <div class="md:w-1/2 w-full">
                    <flux:field>
                        <flux:select label="Blood Group" wire:model.defer="blood_group"
                            placeholder="Select Blood Group">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </flux:select>
                    </flux:field>
                </div>

                <!-- Health Condition -->
                <div class="md:w-1/2 w-full">
                    <flux:field>
                        <flux:select label="Health Condition" wire:model.defer="health_condition"
                            placeholder="Select Option">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </flux:select>
                    </flux:field>
                </div>
            </div>

            <flux:field>
                <flux:input label="Nic" wire:model.defer="nic" placeholder="Enter NIC" />
            </flux:field>

            <flux:field>
                <flux:input label="Contact" wire:model.defer="contact" placeholder="Enter Contact" />
            </flux:field>

            <flux:field>
                <flux:input label="Email" type="email" wire:model.defer="email" placeholder="Enter email" />
            </flux:field>

            <flux:field>
                <flux:input label="Address Line 1" wire:model.defer="address_line_1"
                    placeholder="Enter address line 1" />
            </flux:field>

            <flux:field>
                <flux:input label="Address Line 2" wire:model.defer="address_line_2"
                    placeholder="Enter address line 2" />
            </flux:field>

            <div class="flex flex-col md:flex-row gap-4">
                <!-- Address Line 3 -->
                <div class="md:w-3/4 w-full">
                    <flux:field>
                        <flux:input label="Address Line 3" wire:model.defer="address_line_3"
                            placeholder="Enter address line 3" />
                    </flux:field>
                </div>

                <!-- Postal Code -->
                <div class="md:w-1/4 w-full">
                    <flux:field>
                        <flux:input label="Postal Code" wire:model.defer="postal_code"
                            placeholder="Enter postal code" />
                    </flux:field>
                </div>
            </div>


            <div class="flex justify-end">
                <flux:button type="submit" variant="primary">
                    Create Teacher
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
