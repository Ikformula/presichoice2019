<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function getPlaces(){
        return Place::where('name', 'LIKE', '%'.request('q').'%')->paginate(10);
    }
}
