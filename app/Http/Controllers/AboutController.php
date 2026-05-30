<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'meta_title' => 'About Us - Gagan Bharari Academy | Top Coaching Institute for Police, Army, Talathi, and MPSC Exams in Rajgurunagar, Pune',
            'meta_description' => 'Learn more about Gagan Bharari Academy, Rajgurunagar’s top-rated coaching center for Police Bharti, Army recruitment, Talathi Bharti, and MPSC foundation courses. Trusted by thousands of students for competitive exam preparation in Pune.',
            'meta_keywords' => 'Gagan Bharari Academy, About Gagan Bharari Academy, Police Bharti Coaching, Army Recruitment Classes, Talathi Bharti Training, MPSC Coaching, Rajgurunagar Education, Best Coaching Institute Pune',
            'canonical_url' => url()->current(),
            'testimonials' => Testimonial::where('is_active', true)->latest()->get()
        ]);
    }
}
