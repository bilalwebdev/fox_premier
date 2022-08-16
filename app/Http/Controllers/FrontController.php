<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\PropertyModel;
use App\Models\ReModel;
use App\Models\SiteSetting;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class FrontController extends Controller
{
    use WithPagination;

    public function index()
    {
        $site = SiteSetting::first();
        $testimonials = Testimonials::all();

        $latestListings = PropertyModel::limit(6)->get();

        return view('frontend.index', compact('site', 'testimonials', 'latestListings'));
    }

    public function allListings(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search) {
            $listings = PropertyModel::where('title', "LIKE", "%$search%")->paginate(12);
        } else {
            $listings = PropertyModel::paginate(12);
        }
        return view('frontend.all-listings', compact('listings', 'search'));
    }

    public function listingDetail(PropertyModel $model)
    {
        return view('frontend.listing-detail', compact('model'));
    }
    public function remodelDetail(ReModel $remodel)
    {
        return view('frontend.remodel-detail', compact('remodel'));
    }

    public function contactUs()
    {
        $contact = ContactUs::first();
        return view('frontend.contact-us', compact('contact'));
    }

    public function reModels(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search) {
            $remodels = ReModel::where('title', "LIKE", "%$search%")->paginate(12);
        } else {
            $remodels = ReModel::paginate(12);
        }
        return view('frontend.remodel', compact('remodels', 'search'));
    }

    public function buildingProcess()
    {
        return view('frontend.building-process');
    }
}
