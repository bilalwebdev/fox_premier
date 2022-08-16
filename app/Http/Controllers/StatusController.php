<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
     public function status()
     {
         return view('admin.status.listing-status');
     }

}
