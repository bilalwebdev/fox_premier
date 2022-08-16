<?php

namespace App\Http\Livewire\Admin\Model;

use App\Models\ModelImage;
use App\Models\Status;
use App\Models\Type;
use Livewire\Component;

class EditModel extends Component
{

    public $model;

    protected $rules = [
        'model.title' => 'required',
        'model.description' => 'required',
        'model.price' => 'required',
        'model.video' => 'required',
        'model.living_area' => 'required',
        'model.total_area' => 'required',
        'model.bath_full' => 'required',
        'model.bath_half' => 'required',
        'model.garage' => 'required',
        'model.status' => 'required',
        'model.type' => 'required',
        'model.bed' => 'required',
        'model.map' => 'required',
        'model.virtual_tour' => 'required',

    ];
    public function mount($model)
    {
        $this->model = $model;
    }
    public function updateModel($model)
    {
        $this->model->update();
        $this->emit('success', 'Listing Updated');
        //  return redirect('all-listings')->with(session()->flash('message', 'Your changes has been saved :)'));
    }
    public function updateVirtualTour($id)
    {
        $this->model->update();
        $this->emit('success', 'Listing Updated');
    }

    public function saveImage($key)
    {
        $this->model->update(['image' => $key]);
    }

    public function render()
    {
        $status = Status::all();
        $type = Type::all();
        return view(
            'livewire.admin.model.edit-model',
            [
                'status' => $status,
                'type' => $type,
            ]
        );
    }
}
