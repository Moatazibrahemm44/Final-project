<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\offer;
use App\Models\trips;

class TripsController extends Controller
{
    // indexController
    public function indexAction()
    {
        return view('layouts.index'); 
    }
    // createController
    public function createAction()
    {
        return view('layouts.create'); 
    }
    public function showAction()
    {
        // Fetch all offers using the query builder
        $offers = DB::table('offers')->get();
        // Return the offers to the view or perform other operations
        return view('Layouts.show', ['offers' => $offers]);
    }
    public function viewAction( $id)
    {
        $trip = DB::table('trips')->where('id', $id)->first();     
        return view('Layouts.trips', ['trip' => $id]);

            }
}