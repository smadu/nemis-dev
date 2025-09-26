<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create School') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create School profile and account') }}
        </flux:subheading>
        <flux:separator variant="subtle" />

        <form wire:submit.prevent="save" class="mt-6 max-w-xl space-y-6">

            <!-- School Details -->
            <div class="mt-6 max-w-full space-y-6">
                <flux:heading size="lg" level="2" class="mt-8 mb-4">Genaral Details</flux:heading>
                <flux:separator variant="subtle" />

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/5">
                        <flux:field>
                            <flux:input label="Census No" wire:model.live="censusNo" placeholder="Enter census no" />
                        </flux:field>
                    </div>

                    <div class="w-full sm:w-4/5">
                        <flux:field>
                            <flux:input label="School Name" wire:model.live="schoolName" placeholder="Enter school name" />
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="Province" wire:model.live="province">
                                <option value="" hidden>Select</option>
                                <option value="">Sabaragamuwa</option>
                                <option value="">East</option>

                            </flux:select>
                        </flux:field>
                    </div>

                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="District" wire:model.live="district">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="Zonal Education Office" wire:model.live="educationZone">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>

                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="Divisional Education Office" wire:model.live="educationDivision">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="Police Area" wire:model.live="policeArea">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>

                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="MOH Area" wire:model.live="mohArea">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="School Type" wire:model.live="schoolType">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>

                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:select label="School Category" wire:model.live="schoolCategory">
                                <option value="" hidden>Select</option>

                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2">
                        <flux:field>
                            <flux:input type="date" label="Established Date" wire:model.live="establishedDate" />
                        </flux:field>
                    </div>
                </div>
            </div>

            <div class="mt-6 max-w-full space-y-6">
                <flux:heading size="lg" level="2" class="mt-8 mb-4">Contacts Details</flux:heading>
                <flux:separator variant="subtle" />

                <flux:field>
                    <flux:input label="Contact" wire:model.live="contact" placeholder="Enter Contact" />
                </flux:field>

                <flux:field>
                    <flux:input label="Email" type="email" wire:model.live="email" placeholder="Enter email" />
                </flux:field>

                <flux:field>
                    <flux:select label="GN Division" wire:model.live="gnDivision" placeholder="Select GN Division">
                        <option value="" hidden>Select</option>

                    </flux:select>
                </flux:field>

                <flux:field>
                    <flux:input label="Address Line 1" wire:model.live="addressLine1"
                        placeholder="Enter address line 1" />
                </flux:field>

                <flux:field>
                    <flux:input label="Address Line 2" wire:model.live="addressLine2"
                        placeholder="Enter address line 2" />
                </flux:field>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Address Line 3 -->
                    <div class="md:w-3/4 w-full">
                        <flux:field>
                            <flux:input label="Address Line 3" wire:model.live="addressLine3"
                                placeholder="Enter address line 3" />
                        </flux:field>
                    </div>

                    <!-- Postal Code -->
                    <div class="md:w-1/4 w-full">
                        <flux:field>
                            <flux:input label="Postal Code" wire:model.live="postalCode"
                                placeholder="Enter postal code" />
                        </flux:field>
                    </div>
                </div>

            </div>

            <div class="flex justify-end">
                <flux:button type="submit" variant="primary" >
                    Create School
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
