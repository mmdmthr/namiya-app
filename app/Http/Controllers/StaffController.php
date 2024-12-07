<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', ['staffs' => $staffs]);
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(StaffRequest $request)
    {
        try {
            $staff = Staff::create($request->validated());
            return redirect()->route('staff.index');            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        try {
            $staff->update($request->validated());
            return redirect()->route('staff.show', ['staff' => $staff]);            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(string $id)
    {
        //
    }
}
