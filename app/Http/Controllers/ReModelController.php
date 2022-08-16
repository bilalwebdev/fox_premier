<?php

namespace App\Http\Controllers;

use App\Models\ReModel;
use Illuminate\Http\Request;

class ReModelController extends Controller
{

    public function createReModel(Request $req)
    {
        $req->validate(['title' => 'required']);
        $remodel = ReModel::create($req->all());
       return redirect()->route('admin.remodel.edit', $remodel->slug);

    }

    public function manageReModel(){
        return view('admin.remodel.manage-remodel');
    }

    public function editReModel(ReModel $remodel)
    {


        return view('admin.remodel.edit-remodel', compact('remodel'));
    }
}
