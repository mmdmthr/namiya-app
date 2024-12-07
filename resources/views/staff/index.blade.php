<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{ route('staff.create') }}" class="inline-flex items-center my-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Add Staff
                    </a>
                    <div class="relative overflow-x-auto">
                        <table class="table-fixed border-collapse border border-slate-300 w-full text-sm text-left rtl:text-right text-gray-700">
                            <thead class="text-xs text-gray-700 uppercase bg-slate-300">
                                <tr>
                                    <th class="border border-slate-400 px-6 py-3">Name</th>
                                    <th class="border border-slate-400 px-6 py-3">Role</th>
                                    <th class="border border-slate-400 px-6 py-3">Hire Date</th>
                                    <th class="border border-slate-400 px-6 py-3">Status</th>
                                    <th class="border border-slate-400 px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($staffs as $staff)
                                <tr>
                                    <td class="border border-slate-300 px-6 py-3">{{ $staff->name }}</td>
                                    <td class="border border-slate-300 px-6 py-3">{{ $staff->role_id }}</td>
                                    <td class="border border-slate-300 px-6 py-3">{{ $staff->hire_date }}</td>
                                    <td class="border border-slate-300 px-6 py-3">{{ $staff->is_active ? 'Aktif' : 'Non-Aktif' }}</td>
                                    <td class="border border-slate-300 px-6 py-3">
                                        <a href="{{ route('staff.show', ['staff' => $staff ]) }}">View Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>