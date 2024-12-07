<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-5">
                        <b>Name</b>
                        <p>{{ $staff->name }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Birthday</b>
                        <p>{{ $staff->birthday }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Gender</b>
                        @if ($staff->gender == 'L')
                            <p>Laki-laki</p>
                        @elseif ($staff->gender == 'P')
                            <p>Perempuan</p>
                        @endif
                    </div>

                    <div class="mb-5">
                        <b>Email</b>
                        <p>{{ $staff->email }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Phone</b>
                        <p>{{ $staff->phone }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Emergency Contact</b>
                        <p>{{ $staff->emergency_contact }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Address</b>
                        <p>{{ $staff->address }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Hire Date</b>
                        <p>{{ $staff->hire_date }}</p>
                    </div>

                    <div class="mb-5">
                        <b>Role</b>
                        @switch ($staff->role_id)
                            @case('APJ')
                                <p>Apoteker Penanggungjawab</p>
                                @break
                            @case('APING')
                                <p>Apoteker Pendamping</p>
                                @break
                            @case('AA')
                                <p>Asisten Apoteker</p>
                                @break
                            @case('IN')
                                <p>Intern</p>
                                @break
                        @endswitch
                    </div>

                    <div class="mb-5">
                        <b>Status</b>
                        <p>Aktif</p>
                    </div>
                    <div>
                        <a href="{{ route('staff.edit', ['staff' => $staff]) }}" class="inline-flex items-center my-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                        <a class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>