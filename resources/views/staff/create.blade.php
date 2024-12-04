<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/staff" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div>
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" required>
                    </div>

                    <div>
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                            <option value="">Select Gender</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div>
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>

                    <div>
                        <label for="emergency_contact">Emergency Contact:</label>
                        <input type="text" id="emergency_contact" name="emergency_contact" required>
                    </div>

                    <div>
                        <label for="address">Address:</label>
                        <textarea id="address" name="address" rows="4" required></textarea>
                    </div>

                    <div>
                        <label for="hire_date">Hire Date:</label>
                        <input type="date" id="hire_date" name="hire_date" required>
                    </div>

                    <div>
                        <label for="role_id">Role:</label>
                        <select id="role_id" name="role_id" required>
                            <option value="">Select Role</option>
                            <option value="APJ">Apoteker Penanggungjawab</option>
                            <option value="APING">Apoteker Pendamping</option>
                            <option value="AA">Asisten Apoteker</option>
                            <option value="IN">Intern</option>
                        </select>
                    </div>

                    <div>
                        <label for="is_active">Active:</label>
                        <input type="checkbox" id="is_active" name="is_active" value="1">
                    </div>
                    <div>
                        <button type="submit">Create</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>