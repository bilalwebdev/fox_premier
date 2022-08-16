<?php

namespace App\Http\Controllers;

use App\Models\PropertyModel;
use App\Models\Status;
use Illuminate\Http\Request;

class ModelsController extends Controller
{

    public function createModel(Request $req)
    {
        $req->validate(['title' => 'required']);
        $model = PropertyModel::create($req->all());
        return redirect()->route('admin.model.edit', $model->slug);

    }

    public function manageModel()
    {
        return view('admin.model.manage-model');
    }

    public function editModel(PropertyModel $model)
    {
        $status = Status::all();
        $data = compact('model', 'status');
        return view('admin.model.edit-model')->with($data);
    }



    public function modelGallery(PropertyModel $model)
    {
        return view('admin.model.model-gallery',compact('model'));
    }
    public function deleteModel(PropertyModel $model)
    {
        $model->delete();
        return redirect('/models');
    }

}
