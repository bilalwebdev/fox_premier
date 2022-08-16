<?php

namespace App\Http\Controllers;

use App\Models\ListingType;
use Illuminate\Http\Request;

class ListingTypeController extends Controller
{
    public function type()
    {
        return view('admin.type.listing-type');
    }
}
