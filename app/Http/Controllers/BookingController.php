<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Make sure to import your Booking model
use App\Models\offer;

class BookingController extends Controller
{
    public function bookingstore(Request $request)
    {
        $attributes = $request->validate([
            'arrival_date' => 'required|date',
            'leaving_date' => 'required|date',
            'Number_of_adults' => 'required|integer|min:1',
            'Number_of_children' => 'required|integer|min:0',
            'method' => 'required|string',
        ]);

        $attributes['name'] = auth()->user()->name;
        $attributes['phone'] = auth()->user()->Mobile_number;
        $attributes['address'] = auth()->user()->Address;
        $attributes['email'] = auth()->user()->email;
        $attributes['amount'] = offer::find($request->tour_id)->price;
        $attributes['tour_id'] = $request->tour_id;
        $attributes['user_id'] = auth()->user()->id;

        Booking::create($attributes);

        return back()->with('success', 'Your booking has been made successfully!');
    }
}
