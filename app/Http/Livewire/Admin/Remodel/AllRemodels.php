<?php

namespace App\Http\Livewire\Admin\Remodel;

use App\Models\ReModel;
use Livewire\Component;
use Livewire\WithPagination;

class AllRemodels extends Component
{
    public $search;

    use WithPagination;

    public function deleteFile(ReModel $id)
    {
        $id->delete();
    }

    public function render()
    {
        if($this->search)
        {
            $search = '%'.$this->search.'%';
            $remodels = ReModel::where('title', 'LIKE', $search)->latest()->paginate(10);
            $this->resetPage();
        }
        else{
          $remodels = ReModel::latest()->paginate(10);
        }
        return view(
            'livewire.admin.remodel.all-remodels',['remodels' => $remodels]
        );
    }
}
