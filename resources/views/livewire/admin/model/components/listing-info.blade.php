<div class="grid grid-cols-2 gap-4">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form wire:submit.prevent="updateModel({{ $model->id }})">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-heading"></i> Title</label>
                                    <input type="text" class="form-control" placeholder="Listing Title" required
                                        wire:model="model.title">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-chart-area"></i> Living Area </label>
                                    <input type="text" class="form-control" placeholder="Living Area"
                                        wire:model="model.living_area">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-chart-area"></i> Total Area</label>
                                    <input type="text" class="form-control" placeholder="Total Area" required
                                        wire:model="model.total_area">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-bed"></i> Bed</label>
                                    <input type="text" class="form-control" placeholder="Bed"
                                        wire:model="model.bed">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-bath"></i> Bath Full</label>
                                    <input type="text" class="form-control" placeholder="Bath Full"
                                        wire:model="model.bath_full">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-bath"></i> Bath Half</label>
                                    <input type="text" class="form-control" placeholder="Bath Half"
                                        wire:model="model.bath_half">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label> <i class="las la-warehouse"></i> Garage</label>
                                    <input type="text" class="form-control" placeholder="Garage"
                                        wire:model="model.garage">

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-money-bill-wave"></i> Price</label>
                                    <input type="number" class="form-control" placeholder="Price"
                                        wire:model="model.price">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="" class="control-label mb-1"><i class="las la-info-circle"></i> Status
                                    </label>
                                    <select id="" wire:model=model.status type="text" class="form-control" required>
                                        <option value="">--Select Status--</option>
                                        @foreach ($status as $list)
                                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="" class="control-label mb-1"><i class="las la-info-circle"></i>
                                        Type</label>
                                    <select id="" wire:model=model.type type="text" class="form-control" required>
                                        <option value="">--Select Type--</option>
                                        @foreach ($type as $list)
                                            <option value="{{ $list->id }}">{{ $list->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-map-marker"></i> Map</label>
                                    <textarea type="number" class="form-control" placeholder="Map"
                                        wire:model="model.map"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="account-name"><i class="las la-globe"></i> 3D Tour</label>
                                <textarea type="text" class="form-control" id="account-name" placeholder="3D Tour"
                                    wire:model.defer="model.virtual_tour"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-align-left"></i> Description </label>
                                    <textarea rows="10" type="text" class="form-control" placeholder="Description"
                                        wire:model="model.description" required></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                                <i class="la la-database"></i> Save Changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-body">

                <div>
                    <a href="{{ route('admin.model.gallery',$model->slug) }}" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0 w-full">
                        <i class="la la-image"></i> View Gallery</a>
                </div>

                <div class="col-12 mt-4">
                    <div class="w-full mx-auto xl:mr-0 xl:ml-6">
                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 rounded-md p-1">
                            <div class="relative image-fit cursor-pointer zoom-in mx-auto">
                                <img class="rounded-md w-full" alt="property image"
                                    src="{{ $model->image['small'] }}">
                            </div>

                            <div wire:ignore class="mx-auto cursor-pointer relative mt-2">
                                <div class="Uppy file-input"></div>
                                <div class="UppyProgressBar"></div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-12 mt-4">
                    <div class="form-group">
                        <div class="controls">
                            <label><i class="la la-play-circle"></i> Video</label>
                            <input type="text" class="form-control" placeholder="Video URL" required
                                wire:model="model.video">
                        </div>
                    </div>
                </div>

                @if ($model->video)
                    <div class="">
                        <iframe src="{{ $model->video }}" class="w-full aspect-video rounded shadow" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
