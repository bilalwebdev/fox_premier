<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function editProfile()
    {
        return view('admin.profile.edit-profile');
    }
}
