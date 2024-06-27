<?php

namespace App\Http\Controllers;

use App\Models\tour;
use Illuminate\Http\Request;

class createController extends Controller
{
    public function createAction(tour $tour)
    {
        return view('Layouts.book', [
            'tour' => $tour
        ]);
    }
}
