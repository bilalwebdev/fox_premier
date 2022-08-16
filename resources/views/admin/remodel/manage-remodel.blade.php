@extends('admin.layouts.dashboard')
@section('content')
<div class="d-flex justify-end">
    <button class="btn btn-primary rounded" type="button" data-toggle="modal" data-target="#model" >
      <i class="la la-plus-circle"></i>  Add new</button>
</div>
    <div class="modal fade" id="model" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <p>Create New ReModel</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form action="{{ route('admin.remodel.create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" placeholder="Enter title" class="form-control" required>
                                @error('title')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex justify-end"><button type="submit" class="btn btn-primary"> <i class="la la-plus-circle"></i> Create
                                    ReModel</button></div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <livewire:admin.remodel.all-remodels />
        </div>
    </div>
@endsection
