<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\offer;

class OffersController extends Controller
{
    public function offers()
    {
        // Fetch all offers using the query builder
        $offers = DB::table('offers')->get();
        // Return the offers to the view or perform other operations
        return view('Layouts.index', ['offers' => $offers]);
    }
}