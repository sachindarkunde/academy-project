<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HeroSection;
use App\Models\Blog;
use App\Models\Services;
use App\Models\Faculty;
use App\Models\Testimonial;
use App\Models\TopperStudent;
use App\Models\UpcomingBatch;
use App\Models\Gallery; 
use App\Models\Newsletter; 


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'meta_title' => 'Gagan Bharari Academy | Best Coaching Institute in Rajgurunagar, Pune',
            'meta_description' => 'Gagan Bharari Academy is Rajgurunagar’s leading coaching institute offering quality education, expert faculty, and career guidance in Pune.',
            'meta_keywords' => 'Gagan Bharari Academy, coaching in Rajgurunagar, best academy Pune, career coaching, education Pune, Rajgurunagar classes',
            'canonical_url' => url()->current(),

             // Models with is_active
            'hero' => HeroSection::where('is_active', true)->latest()->first(),
            'faculties' => Faculty::where('is_active', true)->latest()->get(),
            'testimonials' => Testimonial::where('is_active', true)->latest()->get(),
            'toppers' => TopperStudent::where('is_active', true)->latest()->get(),
            'gallery' => Gallery::where('is_active', true)->latest()->get(),

            // Models without is_active
            'blogs' => Blog::latest()->get(),
            'services' => Services::latest()->get(),
            'batches' => UpcomingBatch::latest()->get(),
        ]);
    }


    // Function for storing the newsletter record in DB
    public function StoreNewsletterData(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:newsletters,email',
            ]);

            Newsletter::create([
                'email' => $request->email,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for subscribing to our newsletter!',
            ]);
        } catch (\Exception $e) {
            // Log::error('Newsletter Subscription Error: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Server error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
