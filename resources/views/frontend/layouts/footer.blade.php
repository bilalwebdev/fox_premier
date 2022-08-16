<footer class="">
    <div class="bg-black  h-auto w-auto">
        <div class="flex md:justify-start md:items-start lg:flex-row justify-center items-center flex-col">
            <p class="lg:ml-44 md:ml-56  ml-3 w-auto text-4xl text-white font-bold mt-8 font-adventpro"> Make your dreams
                a</p>
            <p class="text-blue-600 lg:mt-8 text-4xl lg:ml-4 md:ml-72 font-bold font-adventpro">reality</p>
            <a class="my-4 xl:ml-60 lg:ml-14 lg:mt-8 md:ml-64 w-48 text-xl bg-blue-600 rounded-tr-2xl text-white font-bold py-3 px-7 font-adventpro"
                href="{{ route('front.contact') }}">Contact
                Us <i class="fas fa-long-arrow-alt-right ml-6 text-white" style="font-size: 19px"></i></a>
        </div>
        <div
            class="lg:grid lg:grid-cols-2 flex justify-center items-center flex-col border-t-[1px] lg:mx-48 mx-4 border-neutral-800 pb-60">
            <div class="flex justify-start items-start flex-col ">
                <p class="text-4xl text-white font-bold mt-12 font-adventpro">{{ $site->title }}</p>
                <div class="mt-10">
                    @if ($site->twitter)
                        <a href="{{ $site->twitter }}" target="_blank" id="btn"> <i
                                class="lab la-twitter text-white text-3xl"></i></a>
                    @endif
                    @if ($site->facebook)
                        <a href="{{ $site->facebook }}" target="_blank" id="btn1"> <i
                                class="lab la-facebook-f text-white text-3xl mx-7"></i> </a>
                    @endif
                    @if ($site->instagram)
                        <a href="{{ $site->instagram }}" target="_blank"> <i
                                class="lab la-instagram text-white text-3xl"></i></a>
                    @endif
                    @if ($site->linkedIn)
                        <a href="{{ $site->linkedIn }}" target="_blank"> <i
                                class="lab la-linkedin text-white text-3xl mx-7"></i></a>
                    @endif
                    @if ($site->youtube)
                        <a href="{{ $site->youtube }}" target="_blank"> <i
                                class="lab la-youtube text-white text-3xl"></i></a>
                    @endif
                </div>
            </div>
            <div>
                <div class="sm:grid sm:grid-cols-2 flex justify-between items-center gap-x-4 flex-row mt-16">
                    <div>

                        <p class="text-md text-white font-adventpro font-semibold">Quick Links</p>
                        <a href="{{ route('front.all.listings') }}">
                            <p class="text-zinc-500 font-abel mt-2">Listings</p>
                        </a>
                        <a href="{{ route('front.remodel') }}">
                            <p class="text-zinc-500 font-abel mt-2">Remodeling</p>
                        </a>
                        <a href="{{ route('front.buildingprocess') }}">
                            <p class="text-zinc-500 font-abel mt-2">Building Process</p>
                        </a>
                        <a href="{{ route('front.contact') }}">
                            <p class="text-zinc-500 font-abel mt-2">Contact Us</p>
                        </a>
                    </div>
                    <div class="ml-10">
                        <p class="text-md text-white font-adventpro font-semibold mb-1">Contact Information</p>
                        <div class="flex justify-start">
                            <i class="las la-phone mt-1 text-white"></i>
                            <p class="text-zinc-500 font-abel ml-2 mb-2">{{ $contact->phone }}</p>
                        </div>
                        <div class="flex justify-start">
                            <i class="las la-at mt-1 text-white"></i>
                            <p class="text-zinc-500 font-abel ml-2 mb-2">{{ $contact->email }}</p>
                        </div>
                        <div class="flex justify-start">
                            <i class="las la-address-book mt-1 text-white"></i>
                            <p class="text-zinc-500 font-abel ml-2 mb-2">{{ $contact->add_line_1 }}</p>
                        </div>
                        <div class="flex justify-start">
                            <i class="las la-address-book mt-1 text-white"></i>
                            <p class="text-zinc-500 font-abel ml-2 mb-2">{{ $contact->add_line_2 }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</footer>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $('.slider').slick({
        dots: true,
        infinite: true,
        autoplay: true,
        autoplayspeed: 700,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

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

    Livewire.on('success', message => {
        Toast.fire({
            icon: 'success',
            title: message
        })
    })

    Livewire.on('error', message => {
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
@stack('scripts')

</body>

</html>
