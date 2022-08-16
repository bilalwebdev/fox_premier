<?php

namespace App\Http\Livewire\Admin\Remodel;

use Livewire\Component;

class EditRemodel extends Component
{
    public $remodel;


    protected $rules = [
        'remodel.title' => 'required',
        'remodel.description' => 'required'
    ];

    public function mount($remodel)
    {
        $this->remodel = $remodel;
    }

    public function updateContent($value)
    {
        $this->remodel->description = $value;

        // dd($this->remodel->description,$this->remodel);
    }


    public function updateReModel()
    {
        // dd($this->remodel);
        $this->remodel->update();
        $this->emit('success', 'ReModel Updated');
        return redirect()->route('admin.manage.remodel');
    }

    public function saveImage($key)
    {
        $this->remodel->update(['image' => $key]);
        $this->emit('success', 'Image Uploaded');
    }


    public function render()
    {
        return view('livewire.admin.remodel.edit-remodel');
    }
}
