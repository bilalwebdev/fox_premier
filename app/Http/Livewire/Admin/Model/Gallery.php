<?php

namespace App\Http\Livewire\Admin\Model;

use App\Models\ModelImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Gallery extends Component
{
    public $model;

    public function storeImage($url)
    {
        ModelImage::create([
            'image' => $url,
            'model_id' => $this->model->id,
        ]);
    }

    public function delete($id)
    {
        $image = ModelImage::find($id);
        Storage::disk('s3')->delete($image->image['key']);
        $image->delete();

    }

    public function saveListingImages($key)
    {
        ModelImage::create(['model_id' => $this->model->id, 'image' => $key]);
    }



    public function render()
    {
        return view('livewire.admin.model.gallery', [
            'images' => ModelImage::where('model_id', $this->model->id)->get(),
        ]);
    }
}
