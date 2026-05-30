<?php

namespace App\Http\Controllers;
use App\Models\UpcomingBatch; 
use Illuminate\Http\Request;

class UpcomingBatchesController extends Controller
{
    public function index()
    {
        $batches = UpcomingBatch::orderBy('batch_launch_date', 'asc')->get();

        return view('upcoming_batches', [
            'meta_title' => 'Upcoming Batches - Gagan Bharari Academy | Police, Army, Talathi, MPSC Entrance Coaching Rajgurunagar, Pune',
            'meta_description' => 'Stay updated with Gagan Bharari Academy’s upcoming batches for Police Bharti, Army Recruitment, Talathi Bharti, and MPSC Foundation coaching. Enroll now to secure your career success in Rajgurunagar, Pune.',
            'meta_keywords' => 'Upcoming Batches Gagan Bharari Academy, Police Bharti New Batch, Army Coaching Batch Pune, Talathi Bharti Preparation Classes, MPSC Foundation Course Start Date, Rajgurunagar Coaching Classes, Pune Education',
            'canonical_url' => url()->current(),
            'batches' => $batches,
        ]);
    }
}
