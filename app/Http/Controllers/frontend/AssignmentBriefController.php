<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\assignment_brief;
use Illuminate\Support\Facades\Auth;
class AssignmentBriefController extends Controller
{
    public function index()
    {
        return view('frontend.assignment-brief');
    }
    public function store(Request $request)
    {
        if(!Auth::check())
        {
            return response()->json([
                'message' => 'Please login first'
            ], 403);
        }

        if(Auth::user()->role_id != 16)
        {
            return response()->json([
                'message' => 'Only students can submit assignments'
            ], 403);
        }
        $assignmentFile = null;
        $photo = null;  
        $request->validate([
            'brief_file' => 'required|file|mimes:pdf,doc,docx|max:1048',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'extra_instructions' => 'nullable|string',
            'deadline' => 'required|date',
            'subject' => 'required|string|max:255',
        ]);
        if($request->hasFile('brief_file'))
        {
            $assignmentFile = time().'_brief.'.$request->brief_file->extension();
            $request->brief_file->move(
                public_path('uploads/assignments'),
                $assignmentFile
            );
        }

        if($request->hasFile('photo'))
        {
            $photo = time().'_photo.'.$request->photo->extension();
            $request->photo->move(
                public_path('uploads/assignments'),
                $photo
            );
        }

        assignment_brief::create([ 
            'user_id' => Auth::id(),
            'brief_file' => $assignmentFile,
            'photo' => $photo,
            'extra_instructions' => $request->extra_instructions,
            'deadline' => $request->deadline,
            'subject' => $request->subject,
        ]);
        return response()->json([
    'success' => true,
    'message' => 'Assignment Submitted Successfully'
]);
    }


public function show()
    {
        $assignment = assignment_brief::with('user')->get();
        return view('admin.assignment_brief.index', compact('assignment'));
    }
}
