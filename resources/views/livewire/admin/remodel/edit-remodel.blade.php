<div>
    <div>
        <div class="row">
            <div class="col-md-9">

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="listing-info" aria-labelledby="account-pill-general"
                        aria-expanded="true" wire:ignore.self>
                        <hr>
                        @include(
                            'livewire.admin.remodel.components.remodel-info'
                        )
                    </div>


                </div>




            </div>


            <div class="col-md-3">
                <div class="w-full mx-auto xl:mr-0 xl:ml-6">
                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 rounded-md p-1">
                        <div class="relative image-fit cursor-pointer zoom-in mx-auto">
                            <img class="rounded-md w-full" alt="property image" src="{{ $remodel->image['small'] }}">
                        </div>

                        <div wire:ignore class="mx-auto cursor-pointer relative mt-2">
                            <div class="Uppy file-input"></div>
                            <div class="UppyProgressBar"></div>
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
                    maxNumberOfFiles: 1
                }
            })
            const {
                FileInput,
                AwsS3,
                ProgressBar
            } = Uppy


            uppy.use(FileInput, {
                target: '.Uppy',

                locale: {
                    strings: {
                        // The same key is used for the same purpose by @uppy/robodog's `form()` API, but our
                        // locale pack scripts can't access it in Robodog. If it is updated here, it should
                        // also be updated there!
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
                            folder_name: "remodels",
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

                console.log({
                    response
                })
                console.log({
                    file
                })
                let url = response.uploadURL
                let key = url.replace(bucketUrl + '/', '')

                console.log({
                    url
                })
                console.log({
                    key
                })
                @this.call('saveImage', key)
            })
        </script>
    @endpush

</div>
