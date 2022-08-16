<?php

namespace App\Http\Livewire\Admin\Type;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class ListingType extends Component
{

    public $type;
    public $typeUpdate;
    public $typeID;
    public $record;
    public $search;
    use WithPagination;

    protected $rules = [
        'type' => 'required',
        'typeUpdate' => 'required'
    ];


    public function addType()
    {
        $this->validate(
            [
                'type' => 'required',
            ]
        );
        Type::create(
            [
                'name' => $this->type
            ]
        );
        $this->type = null;
        $this->emit('typeAdded');
    }
    public function deleteFile(Type $id)
    {
        $id->delete();
    }
    public function edit(Type $id)
    {
        $this->record = $id;
        $this->typeUpdate = $this->record->name;
        $this->typeID = $this->record->id;
    }
    public function update($record)
    {
        $this->record->update(
            [
                'name' => $this->typeUpdate
            ]
        );
        $this->typeUpdate = null;
        $this->typeID = null;
        $this->emit('success','Type Updated');
    }

    public function render()
    {
        if($this->search)
        {
            $search = '%'.$this->search.'%';
            $types = Type::where('name', 'LIKE', $search)->latest()->paginate(10);
            $this->resetPage();
        }
        else{
          $types = Type::latest()->paginate(10);
        }
        return view(
            'livewire.admin.type.listing-type',['types' => $types]
        );
    }
}
