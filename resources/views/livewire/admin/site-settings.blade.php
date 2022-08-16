<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h1 class="text-center text-xl font-bold mt-2">Site Info</h1>
                <div class="card-body">
                    <form wire:submit.prevent="updateSite">
                        <div class="col-12">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="las la-heading"></i> Site Title</label>
                                        <input type="text" class="form-control" placeholder="Site Title"
                                            wire:model="site.title" required>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <h2 class="text-3xl font-bold">Social Link</h2>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="lab la-facebook"></i> Facebook Link</label>
                                        <input type="text" class="form-control" placeholder="Facebook Link"
                                            wire:model="site.facebook">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="lab la-instagram"></i> Instagram Link</label>
                                        <input type="text" class="form-control" placeholder="Instagram Link"
                                            wire:model="site.insta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="lab la-twitter"></i> Twitter Link</label>
                                        <input type="text" class="form-control" placeholder="Twitter Link"
                                            wire:model="site.twitter">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="lab la-linkedin"></i> LinkedIn Link</label>
                                        <input type="text" class="form-control" placeholder="LinkedIn Link"
                                            wire:model="site.linkedIn">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label><i class="lab la-youtube"></i> YouTube Link</label>
                                        <input type="text" class="form-control" placeholder="YouTube Link"
                                            wire:model="site.youtube">
                                    </div>
                                </div>
                            </div>

                            <div class="my-2">
                                <h2 class="text-3xl font-bold">Banner Setting</h2>
                                <hr>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="w-full mx-auto xl:mr-0 xl:ml-6">
                                        <div
                                            class="border-2 border-dashed shadow-sm border-slate-200/60 rounded-md p-1">
                                            <div class="relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img class="rounded-md w-full" alt="property image"
                                                    src="{{ $site->image['small'] }}">
                                            </div>
                                            <div wire:ignore class="mx-auto cursor-pointer relative mt-2">
                                                <div class="Uppy file-input"></div>
                                                <div class="UppyProgressBar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label><i class="la la-play-circle"></i> Video Link</label>
                                                <input type="text" class="form-control" placeholder="Video Link"
                                                    wire:model="site.video">
                                            </div>
                                        </div>
                                    </div>
                                    @if ($site->video)
                                        <div class="ml-7">
                                            <iframe src="{{ $site->video }}" class="aspect-video w-full rounded shadow"
                                                frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    @endif
                                </div>
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
        <div class="col-md-6">
            <div class="card">
                <h1 class="text-center text-xl font-bold mt-2">Contact Info</h1>
                <div class="card-content">
                    <div class="card-body">
                        <form wire:submit.prevent="updateContact">
                            <div class="col">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-heading"></i> Company Name</label>
                                            <input type="text" class="form-control" placeholder="Company Name"
                                                wire:model="contact.company_name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-address-book"></i> Address Line 1</label>
                                            <input type="text" class="form-control" placeholder="Address Line 1"
                                                wire:model="contact.add_line_1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-address-book"></i> Address Line 2</label>
                                            <input type="text" class="form-control" placeholder="Address Line 2"
                                                wire:model="contact.add_line_2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-phone"></i> Phone</label>
                                            <input type="Phone" class="form-control" placeholder="Phone"
                                                wire:model="contact.phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-at"></i> Email</label>
                                            <input type="email" class="form-control" placeholder="Email"
                                                wire:model="contact.email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label><i class="las la-map-marker"></i> Map Text</label>
                                            <textarea type="text" class="form-control" placeholder="Map text" wire:model="contact.map" required
                                                rows="4"></textarea>
                                        </div>
                                    </div>
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
    </div>
</div>


@push('styles')
    <link href="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.js"></script>


    <script>
        let bucketUrl = @js(env('AWS_BUCKET_URL'))


        var uppy = new Uppy.Core({
            debug: true,
            autoProceed: true,
            restrictions: {
                maxNumberOfFiles: 1,
                maxFileSize: 5242880,
                allowedFileTypes: ['image/*']
            }

        })

        const {
            FileInput,
            AwsS3,
            ProgressBar,
            Dashboard
        } = Uppy





        uppy.use(FileInput, {
            target: '.Uppy',

            locale: {
                strings: {
                    chooseFiles: 'Change Photo',
                },
            },
        })


        uppy.use(ProgressBar, {
            target: '.UppyProgressBar',
            hideAfterFinish: false,
        })


        uppy.use(AwsS3, {
            getUploadParameters(file) {

                return fetch("{{ route('admin.preurl') }}", {
                    method: 'post',

                    headers: {
                        accept: 'application/json',
                        'content-type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    body: JSON.stringify({
                        _token: "{{ csrf_token() }}",
                        filename: file.name,
                        folder_name: "fox",
                        contentType: file.type,

                    }),
                }).then((response) => {
                    return response.json()
                }).then((data) => {

                    return {
                        method: data.method,
                        url: data.url,
                        headers: {
                            'Content-Type': file.type,
                        },
                    }
                })
            },
            limit: 1,
            timeout: 0
        })




        uppy.on('upload-success', (file, response) => {

            let url = response.uploadURL
            let key = url.replace(bucketUrl + '/', '')


            @this.call('saveImage', key)
        })
    </script>
@endpush
