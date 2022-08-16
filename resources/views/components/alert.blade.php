@push('scripts')
<div>
    <script>
        const msg1 = "Your {{ $message }} is safe :)";
        const msg2 = "Your {{ $message }} has been deleted";

        Livewire.on('deleteFile', fileId => {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ml-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })


            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
                showLoaderOnConfirm: true,
                preConfirm: async () => {
                    await @this.deleteFile(fileId)
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {

                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        msg2,
                        'success'
                    )


                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: 'Cancelled',
                        text: msg1,
                        icon:'error'
                    })
                }
            })
        })
    </script>
</div>

@endpush
