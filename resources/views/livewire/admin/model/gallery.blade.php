<div>
    <div class="bg-white rounded shadow-md">
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3">
                    <div class="p-2 rounded shadow m-2">
                        <img src="{{ $image->image['small'] }}" alt="">
                        <button wire:click="delete('{{ $image->id }}')" class="btn btn-danger btn-block round mt-1"><i
                                class="ft-trash"></i> Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>




@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.js"></script>


    <script>
        let bucketUrl = @js(env('AWS_BUCKET_URL'))


        const {
            AwsS3,
            Dashboard
        } = Uppy



        // Listing Images

        var uppyListingImages = new Uppy.Core({
            debug: true,

            restrictions: {
                maxFileSize: 5242880,
                allowedFileTypes: ['image/*']
            }
        })

        uppyListingImages.use(Dashboard, {
            id: "Listingimguploader",
            target: '.UploadListingImages',
            metaFields: [],
            trigger: null,
            inline: true,


        })



        uppyListingImages.use(AwsS3, {
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


        uppyListingImages.on('upload-success', (file, response) => {

            let url = response.uploadURL
            let key = url.replace(bucketUrl + '/', '')


            @this.call('saveListingImages', key)
        })
    </script>
@endpush
