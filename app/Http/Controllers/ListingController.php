<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    //get and show all listings
    public function index(Request $request){

        return view('listings.index', [
            "heading" => "Latest Listings",
            "listings" => Listing::latest()->get()
        ]);
    }

    //show a single listing
    public function show(Listing $listing){
        return view("listings.show", [
            "listing" => $listing
        ]);
    }

//same as the above
    /*
    public function show($id){
        $listing = Listing::find($id);

        if($listing){
            return view("listing", [
                "listing" => $listing
            ]);
        } else {
            abort("404");
        }
    }
    */
    
}
