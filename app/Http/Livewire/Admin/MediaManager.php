<?php

namespace App\Http\Livewire\Admin;

use App\Models\AllMedia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MediaManager extends Component
{

    public function saveMediaImages($key)
    {
        AllMedia::create(['image' => $key]);
    }

    public function delete($id)
    {
        $image = AllMedia::find($id);
        Storage::disk('s3')->delete($image->image['key']);
        $image->delete();

    }

    public function render()
    {
        return view('livewire.admin.media-manager', [
            'images' => AllMedia::all(),
        ]);
    }
}
