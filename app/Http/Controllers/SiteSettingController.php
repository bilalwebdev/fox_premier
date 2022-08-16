<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function siteSetting()
    {

        return view('admin.site-settings');
    }
}
