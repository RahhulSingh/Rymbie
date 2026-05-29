<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StudentController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', 16)->get();
        return view('admin.student.index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
