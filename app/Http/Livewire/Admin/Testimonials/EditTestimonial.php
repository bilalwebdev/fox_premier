<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Helpers\CustomHelper;
use Livewire\Component;

class EditTestimonial extends Component
{
    public $name;
    public $desig;
    public $description;
    public $video;
    public $video2;
    public $testimonial;

    public function mount($testimonial)
    {

       $this->testimonial = $testimonial;
       $this->name = $testimonial->name;
       $this->desig = $testimonial->designation;
       $this->description = $testimonial->description;
       $this->video = $testimonial->video;
       if($testimonial->video)
       {
        $this->video2 = $testimonial->video;
       }
    }
    public function updatedVideo($value)
    {
       //dd($value);
        $this->video2 = CustomHelper::getEmbedUrls($value);
        //dd($this->video2);

    }
    public function editTestimonial()
    {
        $this->testimonial->update(
            [
                'name' => $this->name,
                'designation' => $this->desig,
                'description' => $this->description,
                'video' => CustomHelper::getEmbedUrls($this->video)
            ]
            );
         $this->emit('success', 'Testimonial Updated');
         return redirect()->route('admin.manage.testimonial');
    }
    public function render()
    {
        return view('livewire.admin.testimonials.edit-testimonial');
    }
}
