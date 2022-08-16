<div class="">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form wire:submit.prevent="updateReModel({{ $remodel->id }})">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label><i class="las la-heading"></i> Title</label>
                                    <input type="text" wire:dirty.class="text-red-500" class="form-control"
                                        placeholder="ReModel Title" wire:model="remodel.title" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" wire:ignore>
                            <label><i class="las la-align-left"></i> Description</label>
                            <textarea id="myeditor" wire:model="remodel.description" type="text" class="form-control"
                                placeholder="Description"></textarea>
                        </div>
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

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#myeditor',
            height: 500,
            plugins: [
              'advlist autolink lists link image charmap print preview anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | image',


            setup: function(ed) {
                ed.on('change', function(e) {
                    console.log(ed.getContent());
                    @this.updateContent(ed.getContent())
                    //    updateContent
                });
            }
        });
    </script>
@endpush
