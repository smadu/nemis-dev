<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Institution') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage institution profile and account') }}
        </flux:subheading>
        <flux:separator variant="subtle" />

        <div class="my-4 gap-2 justify-end flex">

            <a href="{{ route('institutions.create') }}">
                <flux:button>Create institution</flux:button>
            </a>

        </div>

        <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700 overflow-x-auto">
            <thead class="bg-slate-50 dark:bg-slate-800">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-slate-600 dark:text-slate-300 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-slate-600 dark:text-slate-300 uppercase tracking-wider">
                        Address
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-slate-600 dark:text-slate-300 uppercase tracking-wider">
                        Zone
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-slate-600 dark:text-slate-300 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-slate-600 dark:text-slate-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-slate-900 divide-y divide-slate-200 dark:divide-slate-700">
                @foreach ($institutions as $institution)
                    <tr class="hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="{{asset('images/default_logo.png')}}"
                                        alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-slate-900 dark:text-slate-100">
                                        {{ $institution->name }}
                                    </div>
                                    <div class="text-sm text-slate-500 dark:text-slate-400">
                                        Census No.: {{ $institution->census_no }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-slate-900 dark:text-slate-100">{{ $institution->address }}</div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">
                                Contact: {{ $institution->phone ?? 'N/A' }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-slate-900 dark:text-slate-100">
                                ZEO: {{ $institution->zonalEducationOffice->short_name }}
                            </div>
                            <div class="text-sm text-slate-500 dark:text-slate-400">
                                DEO: {{ $institution->divisionalEducationOffice->short_name }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        {{ $institution->active_status ? 'bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100' : 'bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-100' }}">
                                {{ $institution->active_status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#"
                                class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300">
                                Edit
                            </a>
                            <a href="#"
                                class="ml-2 text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        <div class="mt-4 mx-10">
            {{ $institutions->links() }}
        </div>
    </div>
</div>
