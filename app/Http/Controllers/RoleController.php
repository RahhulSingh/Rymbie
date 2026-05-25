<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use  \Illuminate\Support\Str;
use Illuminate\Validation\Rule;
class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::with('permissions')->get();
        return view('admin.role.index',compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::where('is_active',1)->get()->groupBy('module');
        return view('admin.role.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $roles = Role::create([
            'name'=>$request->name,
            'slug' => Str::slug($request->name),
            'is_active' => $request->has('is_active') ? 1 : 0
        ]);

        if($request->has('permissions'))
            {
                $roles->permissions()->attach($request->permissions);
            }
        return redirect()->route('role.index')->with('success','Role Created Successfully');
    }

    public function edit($id)
    {
        $roleEdit=Role::findOrFail($id);
        $permissions = Permission::where('is_active', 1)->get()->groupBy('module');
        $rolePermissions = $roleEdit->permissions->pluck('id')->toArray();
        return view('admin.role.edit', compact('roleEdit', 'permissions', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => [
            'required', 'string', 'max:255',
            Rule::unique('roles', 'name')->ignore($id)
        ],
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,id'
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name'=>$request->name,
            'slug' => Str::slug($request->name),
            'is_active'=>$request->has('is_active') ? 1 : 0,
        ]);

        $role->permissions()->sync($request->permissions ?? []);

        return redirect()->route('role.index')->with('success','Role updated Successfully');
    }


     public function delete($id)     
    {
        $role=Role::findOrFail($id);

        if ($role->users()->count() > 0) {
            return redirect()->route('roles.index')->with('error', 'Cannot delete role that has assigned users!');
        }

        $role->permissions()->detach();
        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role deleted successfully!');
    }
}
