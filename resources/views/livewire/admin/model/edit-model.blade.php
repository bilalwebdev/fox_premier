<div>

    @include('livewire.admin.model.components.listing-info')

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
                        folder_name: "models",
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
