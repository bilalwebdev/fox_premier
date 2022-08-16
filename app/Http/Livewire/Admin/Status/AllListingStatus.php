<?php

namespace App\Http\Livewire\Admin\Status;

use App\Models\Status;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class AllListingStatus extends Component
{
    public $status;
    public $statusUpdate;
    public $record;
    public $statusID;
    public $search;
    public $data;
    use WithPagination;

    protected $rules = [
        'status' => 'required',
        'statusUpdate' => 'required'
    ];

    public function addStatus()
    {
        $this->validate(
            [
                'status' => 'required'
            ]
        );
        Status::create(
            [
                'name' => $this->status
            ]
        );
        $this->status = null;
        $this->emit('statusAdded');
    }


    public function remove(Status $id)
    {
        if ($id) {
            $this->deleteStatus($id);
        }
    }
    public function deleteFile(Status $id)
    {
        $id->delete();
    }
    public function edit(Status $id)
    {
        $this->record = $id;
        $this->statusUpdate = $this->record->name;
        $this->statusID = $this->record->id;
    }
    public function update($record)
    {
        $this->record->update(
            [
                'name' => $this->statusUpdate
            ]
        );
        $this->statusUpdate = null;
        $this->statusID = null;
        $this->emit('success','Status Updated');
        //    return redirect('/listing-status');
    }
    public function render()
    {
        if($this->search)
        {
            $search = '%'.$this->search.'%';
            $statuses = Status::where('name', 'LIKE', $search)->latest()->paginate(10);
            $this->resetPage();
        }
        else{
          $statuses = Status::latest()->paginate(10);
        }
        return view(
            'livewire.admin.status.all-listing-status',['statuses' => $statuses]
        );
    }
}
