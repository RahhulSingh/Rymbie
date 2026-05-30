<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::where('created_by', auth()->user()->id)->get();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {   
        $roles = Role::where('is_active', 1)->where('name', '!=', 'Super Admin')->where('name', '!=', 'Student')->get();
        return view('admin.employees.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'created_by' => auth()->user()->id,
        ]);

        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');

    }

    public function edit($id)
    {
        $employee = User::findOrFail($id);
        $roles = Role::where('is_active', 1)->where('name', '!=', 'Super Admin')->where('name', '!=', 'Student')->get();
        return view('admin.employees.create', compact('employee', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $employee = User::findOrFail($id);

        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email|unique:users,email,' . $employee->id,
            'phone' => 'nullable',
            'password' => 'nullable|min:6',
            'role_id' => 'nullable|exists:roles,id',
        ]);

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password ? Hash::make($request->password) : $employee->password,
            'role_id' => $request->role_id,
            'created_by' => $employee->created_by,
        ]);

        return redirect()->route('admin.employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = User::findOrFail($id);
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully.');
    }
}
