<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\Contactus_socalmediya;
class ContactUsController extends Controller
{
    public function index()
    {
        $contactus_socalmediyas = Contactus_socalmediya::all();
        return view('frontend.contact_us', compact('contactus_socalmediyas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:1048',
            'preferred_contact' => 'required|in:whatsapp,email,call',
            'terms' => 'required|boolean',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads/contactus_file'), $fileName);
        Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject,
            'file' => $fileName,
            'preferred_contact' => $request->preferred_contact,
            'terms' => $request->terms,
        ]);
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function show()
    {
        $contactusEntries = Contactus::latest()->get();
        return view('admin.contactus.index', compact('contactusEntries'));
    }

}
