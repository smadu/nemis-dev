<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Teacher') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Create teacher profile and account') }}
        </flux:subheading>
        <flux:separator variant="subtle" />

        <form wire:submit.prevent="save" class="mt-6 max-w-xl space-y-6">

            <!-- Personal Details -->
            <div class="mt-6 max-w-xl space-y-6">
                <flux:heading size="lg" level="2" class="mt-8 mb-4">Personal Details</flux:heading>
                <flux:separator variant="subtle" />

                <div class="flex gap-4">
                    <div class="w-1/5">
                        <flux:field>
                            <flux:select label="Title" wire:model.live="title">
                                <option value="">Select</option>
                                @foreach ($titleOptions as $data)
                                    <option value="{{ $data->title_id }}">{{ $data->title_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <div class="w-4/5">
                        <flux:field>
                            <flux:input label="Full Name" wire:model.live="fullName" placeholder="Enter full name" />
                        </flux:field>
                    </div>
                </div>

                <div class="flex gap-4">
                    <!-- Gender -->
                    <div class="w-1/2">
                        <flux:field>
                            <flux:select label="Gender" wire:model.live="gender">
                                <option value="">Select</option>
                                @foreach ($genderOptions as $data)
                                    <option value="{{ $data->gender_id }}">{{ $data->gender_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Birthday -->
                    <div class="w-1/2">
                        <flux:field>
                            <flux:input type="date" label="Birthday" wire:model.live="birthday" />
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Ethnicity -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Ethnicity" wire:model.live="ethnicity">
                                <option value="">Select</option>
                                @foreach ($ethnicityOptions as $data)
                                    <option value="{{ $data->ethnicity_id }}">{{ $data->ethnicity_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Civil Status -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Civil Status" wire:model.live="civilStatus">
                                <option value="">Select</option>
                                @foreach ($civilStatusOptions as $data)
                                    <option value="{{ $data->civil_status_id }}">{{ $data->civil_status_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Blood Group -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Blood Group" wire:model.live="bloodGroup">
                                <option value="">Select</option>
                                @foreach ($bloodGroupOptions as $data)
                                    <option value="{{ $data->blood_group_id }}">{{ $data->blood_group }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Health Condition -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Health Condition" wire:model.live="healthCondition">
                                <option value="">Select Health Condition</option>
                                @foreach ($healthConditionOptions as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <flux:field>
                    <flux:input label="Nic" wire:model.live="nic" placeholder="Enter NIC" />
                </flux:field>
            </div>

            <!-- Contact Details -->
            <div class="mt-6 max-w-xl space-y-6">
                <flux:heading size="lg" level="2" class="mt-8 mb-4">Contact Details</flux:heading>
                <flux:separator variant="subtle" />

                <flux:field>
                    <flux:input label="Contact" wire:model.live="contact" placeholder="Enter Contact" />
                </flux:field>

                <flux:field>
                    <flux:input label="Email" type="email" wire:model.live="email" placeholder="Enter email" />
                </flux:field>

                <flux:field>
                    <flux:select label="District" wire:model.live="district" placeholder="Select District">
                        <option value="">Select</option>
                        @foreach ($districtOption as $value => $data)
                            <option value="{{ $data->district_id }}">{{ $data->district_name }}</option>
                        @endforeach
                    </flux:select>
                </flux:field>

                <flux:field>
                    <flux:select label="Divisional Secretary office" wire:model.live="divisionalDecretaryOffice"
                        placeholder="Select Divisional Secretary office">
                        <option value="">Select</option>
                        @foreach ($divisionalSecretaryofficeOption as $value => $data)
                            <option value="{{ $data->dso_id }}">{{ $data->dso_name }}</option>
                        @endforeach
                    </flux:select>
                </flux:field>

                <flux:field>
                    <flux:select label="GN Division" wire:model.live="gnDivision" placeholder="Select GN Division">
                        <option value="">Select</option>
                        @foreach ($gnDivisionOption as $value => $data)
                            <option value="{{ $data->gn_division_id }}">{{ $data->gn_division_name }}</option>
                        @endforeach
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

            <!-- Appointment Details -->
            <div class="mt-6 max-w-xl space-y-6">
                <flux:heading size="lg" level="2" class="mt-8 mb-4">Appointment Details</flux:heading>
                <flux:separator variant="subtle" />

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- First Appointment Date -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:input type="date" label="First Appointment Date"
                                wire:model.live="firstAppointmentDate" />
                        </flux:field>
                    </div>

                    <!-- Appointment letter number -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:input label="Appointment Letter No" wire:model.live="appointmentLetterNo"
                                placeholder="Enter letter number" />
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Service -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Service" wire:model.live="service">
                                <option value="">Select</option>
                                @foreach ($servicesOption as $service)
                                    <option value="{{ $service->service_id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Rank -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Service Rank" wire:model.live="serviceRank">
                                <option value="">Select</option>
                                @foreach ($ranksOption as $rank)
                                    <option value="{{ $rank->rank_id }}">{{ $rank->rank_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Institution Type -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Institution Type" wire:model.live="institutionType">
                                <option value="">Select</option>
                                @foreach ($institutionTypeOption as $data)
                                    <option value="{{ $data->institution_type_id }}">{{ $data->institution_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Office Level -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Office Level" wire:model.live="officeLevel" >
                                <option value="">Select</option>
                                @foreach ($officeLevelsOption as $level)
                                    <option value="{{ $level->office_level_id }}">{{ $level->office_level_name }}
                                    </option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <!-- Office -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Office" wire:model.live="office" >
                                <option value="">Select</option>
                                @foreach ($officesOption as $office)
                                    <option value="{{ $office->office_id }}">{{ $office->office_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>

                    <!-- Appointment Category -->
                    <div class="md:w-1/2 w-full">
                        <flux:field>
                            <flux:select label="Appointment Category" wire:model.live="appointmentCategory" >
                                <option value="">Select</option>
                                @foreach ($appointmentCategoriesOption as $cat)
                                    <option value="{{ $cat->appointment_category_id }}">
                                        {{ $cat->categories_name }}</option>
                                @endforeach
                            </flux:select>
                        </flux:field>
                    </div>
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
