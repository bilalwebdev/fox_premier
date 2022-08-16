<?php

namespace App\Http\View\Composers;

use App\Models\ContactUs;
use App\Models\SiteSetting;
use Illuminate\View\View;

class SiteComposer
{
    public function compose(View $view)
    {
        $view->with('site' , SiteSetting::first());
        $view->with('contact' , ContactUs::first());
    }
}
