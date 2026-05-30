<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services', [
            'meta_title' => 'Our Services - Gagan Bharari Academy | Police Bharti, Army Recruitment, Talathi Bharti, MPSC Coaching in Rajgurunagar, Pune',
            'meta_description' => 'Explore Gagan Bharari Academy’s top services including Police Bharti training, Army recruitment coaching, Talathi Bharti preparation, and MPSC Foundation courses in Rajgurunagar, Pune. Build your future with expert guidance and competitive success.',
            'meta_keywords' => 'Gagan Bharari Academy Services, Police Bharti Training, Army Entrance Coaching, Talathi Bharti Preparation, MPSC Foundation Classes, Competitive Exam Coaching, Best Academy in Rajgurunagar, Pune Education',
            'canonical_url' => url()->current(),
            'services' => Services::latest()->get(),
        ]);
    }
}
