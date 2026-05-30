<?php

namespace App\Http\Controllers;
use App\Models\AnswerKey;

use Illuminate\Http\Request;

class AnswerKeyController extends Controller
{
    public function answerKeys()
    {
        $answerKeys = AnswerKey::where('is_active', true)->latest()->get();
        return view('answer_keys', compact('answerKeys'));
    }
}
