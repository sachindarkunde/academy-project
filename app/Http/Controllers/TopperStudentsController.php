<?php

namespace App\Http\Controllers;
use App\Models\TopperStudent;
use Illuminate\Http\Request;

class TopperStudentsController extends Controller
{
    public function index()
    {
        $topperStudents = TopperStudent::all(); 

        return view('topper_students', [
            'meta_title' => 'Our Toppers - Gagan Bharari Academy | Successful Students in Police, Army, Talathi, MPSC Coaching Rajgurunagar, Pune',
            'meta_description' => 'Meet the toppers of Gagan Bharari Academy who have successfully cleared Police Bharti, Army recruitment, Talathi Bharti, and MPSC exams. We take pride in our students’ achievements across Rajgurunagar and Pune.',
            'meta_keywords' => 'Gagan Bharari Academy Toppers, Successful Students Police Bharti, Army Bharti Achievers, Talathi Bharti Toppers, MPSC Exam Success Stories, Rajgurunagar Academy Results, Pune Competitive Exam Coaching',
            'canonical_url' => url()->current(),
            'topperStudents' => $topperStudents
        ]);
    }
}
