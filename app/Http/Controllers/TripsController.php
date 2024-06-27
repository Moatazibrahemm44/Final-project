<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\offer;
use App\Models\tour;
use App\Models\trips;
use App\Models\DestinationInfo  ;

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
    public function viewAction( $id )
    {
    // // Fetch all offers using the query builder
    // $tour = DB::table('tours_info')->where('tour_id', $id)->get();    
    // // Return the offers to the view or perform other operations
    // return view('Layouts.trips', ['tour' => $tour],compact('tour'));
           // Fetch tour details and its info using Query Builder
$tours = DB::table('tours')
           ->where('id', $id)
           ->first();

$tourInfo = DB::table('tours_info')
               ->where('tour_id', $id)
               ->get ();

return view('Layouts.trips', ['tours' => $tours, 'tourInfo' => $tourInfo]);
}


public function destinationAction(Request $request)
    {
          // Fetch all offers using the query builder
          $destinations = DB::table('destinations')->get();
          // Return the offers to the view or perform other operations
          return view('Layouts.destination', ['destinations' => $destinations]);
    }
    public function tourAction($id)
    {
        $destinations = DB::table('destinations')
        ->where('id', $id)
        ->first();

        $destinationsinfo = DB::table('destination_infos')
            ->where('destination_id', $id)
            ->get ();
        return view('Layouts.tours', ['destinations' => $destinations, 'destinationsinfo' => $destinationsinfo , compact('destinations')] );
    }

    // public function view(Destination $destination)
    // {
    //     return view('layouts.destinations.city', [
    //         'destinations' => $destination
    //     ]);
    // }

}