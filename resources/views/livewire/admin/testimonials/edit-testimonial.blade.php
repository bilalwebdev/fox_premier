<div>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form wire:submit.prevent="editTestimonial">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-heading"></i> Name</label>
                                    <input type="text"  class="form-control" placeholder="Name"
                                        wire:model="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-user-graduate"></i> Designation</label>
                                    <input type="text"  class="form-control" placeholder="Designation"
                                        wire:model="desig" >
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-align-left"></i> Descrption</label>
                                    <textarea type="text"  class="form-control" placeholder="Description"
                                        wire:model="description" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="la la-play-circle"></i> Video</label>
                                    <input type="text"  class="form-control" placeholder="Video Link"
                                        wire:model="video">
                                </div>
                            </div>
                        </div>
                        @if ($video2)
                        <div class="ml-7">
                            <iframe src="{{ $video2 }}" height="500" width="700" class="aspect-video rounded shadow" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        @endif

                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="mt-1 btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                            <i class="la la-database"></i> Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
