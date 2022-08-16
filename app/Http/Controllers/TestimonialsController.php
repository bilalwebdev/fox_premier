<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function createTestimonial()
    {
        return view('admin.testimonials.create-testimonial');
    }
    public function editTestimonial($id)
    {
        $testimonial = Testimonials::where('id', $id)->first();
        return view('admin.testimonials.edit-testimonial', compact('testimonial'));
    }
    public function manageTestimonial()
    {
        $testimonials = Testimonials::all();
        return view('admin.testimonials.all-testimonials', compact('testimonials'));
    }
}
