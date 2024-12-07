<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('staff.update', ['staff' => $staff ] ) }}" method="POST" class="max-w mx-auto">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @method('put')
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input type="text" id="name" name="name" value="{{ $staff->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900">Birthday</label>
                        <input type="date" id="birthday" name="birthday" value="{{ $staff->birthday }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                        <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="">Select Gender</option>
                            <option value="L" @selected($staff->gender == 'L')>Laki-laki</option>
                            <option value="P" @selected($staff->gender == 'P') >Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email" value="{{ $staff->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone</label>
                        <input type="text" id="phone" name="phone" value="{{ $staff->phone }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="emergency_contact" class="block mb-2 text-sm font-medium text-gray-900">Emergency Contact</label>
                        <input type="text" id="emergency_contact" name="emergency_contact" value="{{ $staff->emergency_contact }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                        <textarea id="address" name="address" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ $staff->address }}
                        </textarea>
                    </div>

                    <div class="mb-5">
                        <label for="hire_date" class="block mb-2 text-sm font-medium text-gray-900">Hire Date</label>
                        <input type="date" id="hire_date" name="hire_date" value="{{ $staff->hire_date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <div class="mb-5">
                        <label for="role_id" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                        <select id="role_id" name="role_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="">Select Role</option>
                            <option value="APJ" @selected($staff->role_id == 'APJ')>Apoteker Penanggungjawab</option>
                            <option value="APING" @selected($staff->role_id == 'APING')>Apoteker Pendamping</option>
                            <option value="AA" @selected($staff->role_id == 'AA')>Asisten Apoteker</option>
                            <option value="IN" @selected($staff->role_id == 'IN')>Intern</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="is_active" class="inline-flex items-center cursor-pointer">Status</label>
                        <select id="is_active" name="is_active" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="0" @selected($staff->is_active == 0)>Non-Aktif</option>
                            <option value="1" @selected($staff->is_active == 1)>Aktif</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="inline-flex items-center my-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>