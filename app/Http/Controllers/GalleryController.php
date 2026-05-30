<?php

namespace App\Http\Controllers;
use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('gallery', [
            'meta_title' => 'Gagan Bharari Academy | Best Coaching Institute in Rajgurunagar, Pune',
            'meta_description' => 'Gagan Bharari Academy is Rajgurunagar’s leading coaching institute offering quality education, expert faculty, and career guidance in Pune.',
            'meta_keywords' => 'Gagan Bharari Academy, coaching in Rajgurunagar, best academy Pune, career coaching, education Pune, Rajgurunagar classes, gallery of coaching institute',
            'canonical_url' => url()->current(),
            'galleries' => Gallery::where('is_active', true)->latest()->get(),
        ]);
    }

}
