<?php

namespace App\Http\Livewire\Admin\Model;

use App\Models\PropertyModel;
use Livewire\Component;
use Livewire\WithPagination;

class AllModels extends Component
{
    public $search;
    
    use WithPagination;

    public function deleteFile(PropertyModel $id)
    {
        $id->delete();
    }

    public function render()
    {
        if($this->search)
        {
            $search = '%'.$this->search.'%';
            $models = PropertyModel::where('title', 'LIKE', $search)->latest()->paginate(10);
            $this->resetPage();
        }
        else{
          $models = PropertyModel::latest()->paginate(10);
        }
        return view(
            'livewire.admin.model.all-models',['models' => $models]
        );
    }
}
