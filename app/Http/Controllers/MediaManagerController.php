<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaManagerController extends Controller
{
    public function showMedia()
    {
        return view('admin.media-manager.main');
    }
}
