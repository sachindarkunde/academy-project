<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact_us', [
            'meta_title' => 'Contact Us | Gagan Bharari Academy | Best Coaching Institute in Rajgurunagar, Pune',
            'meta_description' => 'Get in touch with Gagan Bharari Academy for inquiries, admissions, or career counseling. Our team is here to assist you with all your educational needs in Rajgurunagar, Pune.',
            'meta_keywords' => 'contact us, Gagan Bharari Academy, coaching in Rajgurunagar, best coaching institute Pune, admission inquiries, educational support Rajgurunagar, coaching career counseling',
            'canonical_url' => url()->current(),
        ]);
    }



    // Fun to submit contact us form 
    public function storeContactFormData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you for reaching out to us! We have received your message and will get back to you soon.'
        ]);

    }
}
