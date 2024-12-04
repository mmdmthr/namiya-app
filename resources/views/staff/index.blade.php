<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <table>
                    <tr>
                        <td>Name</td>
                        <td>Hire Date</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($staffs as $staff)
                    <tr>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->hire_date }}</td>
                        <td>{{ $staff->is_active ? 'Aktif' : 'Non-Aktif' }}</td>
                        <td>Detail</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>