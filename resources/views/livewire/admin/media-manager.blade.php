<div>
    <div class="bg-white rounded shadow-md">
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-3">
                    <div class="p-2 rounded shadow m-2">
                        <img src="{{ $image->image['small'] }}" alt="">
                        <input id="cimg-{{ $loop->index }}" value="{{ $image->image['large'] }}" class="opacity-0 absolute">
                        <div class="flex justify-between">
                            <button wire:click="delete('{{ $image->id }}')" class="btn btn-danger  round mt-1"><i
                                    class="ft-trash"></i> Delete</button>

                            <button data-clipboard-target="#cimg-{{ $loop->index }}"
                                class="btn btn-success btn-sm new url-img  round mt-1"><i class="ft-link"></i>
                                Copy Url</button>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"
        integrity="sha512-PIisRT8mFfdxx99gMs7WAY5Gp+CtjYYxKvF93w8yWAvX548UBNADHu7Qkavgr6yRG+asocqfuk5crjNd5z9s6Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        new ClipboardJS('.url-img');
        let bucketUrl = @js(env('AWS_BUCKET_URL'))


        const {
            AwsS3,
            Dashboard
        } = Uppy



        // Listing Images

        var UploadMediaImages = new Uppy.Core({
            debug: true,

            restrictions: {
                maxFileSize: 5242880,
                allowedFileTypes: ['image/*']
            }
        })

        UploadMediaImages.use(Dashboard, {
            id: "Listingimguploader",
            target: '.UploadMediaImages',
            metaFields: [],
            trigger: null,
            inline: true,


        })



        UploadMediaImages.use(AwsS3, {
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


        UploadMediaImages.on('upload-success', (file, response) => {

            let url = response.uploadURL
            let key = url.replace(bucketUrl + '/', '')


            @this.call('saveMediaImages', key)
        })



    </script>
@endpush
