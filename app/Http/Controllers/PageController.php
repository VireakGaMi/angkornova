<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import Model
use App\Mail\NewContactInquiry; // Import Mail
use Illuminate\Support\Facades\Mail; // Import Facade

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function services() { return view('pages.services'); }
    public function projects() { return view('pages.projects'); }
    public function about() { return view('pages.about'); }
    public function contact() { return view('pages.contact'); }

    public function submitContact(Request $request)
    {
        // 1. Validate
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Store in DB (Assuming you create a Contact model later)
        Contact::create($validated);

        // 3. Send Email (Configure Mail later)
        Mail::to('angkornova@gmail.com')->send(new NewContactInquiry($validated));

        return back()->with('success', 'Message received. We will be in touch shortly.');
    }
}
