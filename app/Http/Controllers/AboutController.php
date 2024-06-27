<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $randomReviews = Reviews::inRandomOrder()->take(6)->get();

        return view('layouts.about', [
            'reviews' => $randomReviews
        ]);
    }

    public function store(Request $request)
    {
        $messages = [
            'comment.required' => 'You must fill in the feedback.',
            'comment.max' => 'The comment may not be greater than 800 characters.',
            'rating.required' => 'You must rate.',
            'rating.integer' => 'The rating must be an integer.',
            'rating.between' => 'The rating must be between 1 and 5.'
        ];

        $attributes = $request->validate([
            'comment' => ['required', 'max:800'],
            'rating' => 'required|integer|between:1,5'
        ], $messages);

        $attributes['user_id'] = auth()->user()->id;

        Reviews::create($attributes);

        return redirect('/about')->with('success', 'Your review has been submitted successfully!');
    }
}
