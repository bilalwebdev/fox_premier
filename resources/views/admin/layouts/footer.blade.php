<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2"
                href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span
            class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span
                id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="{{ asset('admin_assets/app-assets/vendors/js/vendors.min.js') }}"></script>

<!-- BEGIN: Vendor JS-->
<!-- BEGIN Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/chart.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/morris.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}">
</script>
<script src="{{ asset('admin_assets/app-assets/data/jvector/visitor-data.js') }}"></script>
<!-- END: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/js/core/app-menu.js') }}"></script>

<!-- BEGIN: Theme JS-->
<script src="{{ asset('admin_assets/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->
{{-- <script src="{{ asset('admin_assets/app-assets/js/scripts/pages/dashboard-sales.js') }}"></script> --}}



<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
@livewireScripts
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
@stack('scripts-v2')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
    })

    Livewire.on('success', message=>{
            Toast.fire({
                icon: 'success',
                title: message
            })
    })

    Livewire.on('error', message=>{
            Toast.fire({
                icon: 'error',
                title: message
            })
    })


    @if (session()->has('success'))
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('success') }}"
                })
    @endif

    @if (session()->has('error'))
                Toast.fire({
                    icon: 'error',
                    title: "{{ session('error') }}"
                })
    @endif
</script>

</body>
<!-- END: Body-->

</html>
