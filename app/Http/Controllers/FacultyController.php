<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        return view('faculty', [
            'meta_title' => 'Meet Our Faculty - Gagan Bharari Academy | Expert Trainers for Police, Army, Talathi, and MPSC Coaching Rajgurunagar, Pune',
            'meta_description' => 'Get to know the experienced faculty members at Gagan Bharari Academy, Rajgurunagar’s top coaching institute. Our expert trainers specialize in Police Bharti, Army recruitment, Talathi Bharti, and MPSC preparation courses.',
            'meta_keywords' => 'Gagan Bharari Academy Faculty, Police Bharti Trainers, Army Recruitment Instructors, Talathi Bharti Teachers, MPSC Coaching Staff, Best Coaching Institute Rajgurunagar, Pune Academy Faculty, Experienced Teachers Competitive Exams',
            'canonical_url' => url()->current(),
            'faculties' => Faculty::where('is_active', true)->latest()->get(),
        ]);
    }
}
