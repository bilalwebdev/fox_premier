<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Helpers\CustomHelper;
use App\Models\Testimonials;
use Livewire\Component;

class CreateTestimonial extends Component
{
    public $name;
    public $desig;
    public $description;
    public $video;
    public $video2;


    public function updatingVideo($value)
    {
        // dd($value);
        $this->video2 = CustomHelper::getEmbedUrls($value);
        // dd(CustomHelper::getEmbedUrls($value));

    }
    public function createTestimonial()
    {
       Testimonials::create(
            [
                'name' => $this->name,
                'designation' => $this->desig,
                'description' => $this->description,
                'video' =>  CustomHelper::getEmbedUrls($this->video)
            ]
        );
        $this->emit('success', 'Testimonial Created');
        return redirect()->route('admin.manage.testimonial');
    }

    public function render()
    {

        return view('livewire.admin.testimonials.create-testimonial');
    }
}
