<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'meta_title' => 'Gagan Bharari Academy | Best Coaching Institute in Rajgurunagar, Pune',
            'meta_description' => 'Gagan Bharari Academy is Rajgurunagar’s leading coaching institute offering quality education, expert faculty, and career guidance in Pune. Read our blog to stay updated.',
            'meta_keywords' => 'Gagan Bharari Academy, coaching in Rajgurunagar, best academy Pune, career coaching, education Pune, Rajgurunagar classes, coaching blog, coaching tips, study blog',
            'canonical_url' => url()->current(),
            'blogs' => Blog::latest()->get(),
        ]);
    }

}
