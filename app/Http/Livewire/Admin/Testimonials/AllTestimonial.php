<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;
use Livewire\WithPagination;

class AllTestimonial extends Component
{
    public $search;
    use WithPagination;
    
    public function deleteFile(Testimonials $id)
    {
        $id->delete();
    }
    public function render()
    {
        if($this->search)
        {
            $search = '%'.$this->search.'%';
            $testimonials = Testimonials::where('name', 'LIKE', $search)->latest()->paginate(10);
            $this->resetPage();
        }
        else{
          $testimonials = Testimonials::latest()->paginate(10);
        }
        return view('livewire.admin.testimonials.all-testimonial',[
            'testimonials' => $testimonials
        ]);
    }
}
