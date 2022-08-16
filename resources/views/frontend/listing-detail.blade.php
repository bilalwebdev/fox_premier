@extends('frontend.layouts.master')
@push('title')
    <title>{{ $model->title }}</title>
@endpush
@section('content')
    <div class="w-full bg-gradient-to-tr from-indigo-400  to-indigo-900 min-h-[300px]">
        @include('frontend.layouts.navbar', [
            'background' => '',
            'text' => 'text-white',
            'shadow' => '',
            'background_mobile' => 'bg-white',
            'text_mobile' => 'text-black',
        ])
        <div class="container mx-auto space-y-16 px-2 md:px-24  h-full mt-10">
            <h1 class="text-white font-adventpro text-5xl font-bold">
                {{ $model->title }}
            </h1>
        </div>
    </div>



    <div class="container mx-auto space-y-16 px-2 md:px-24 mb-10">
        <div class="gallery-slider  sm:-mt-10 -mt-5">
            @foreach ($model->galleryImages as $image)
                <img src="{{ $image->image['large'] }}" alt="" class="rounded shadow w-full">
            @endforeach

        </div>
        <div class="grid md:grid-cols-2 gap-10 md:gap-0">
            <div class="flex md:block justify-between items-center">
                <h1 class="font-adventpro font-bold text-3xl md:mb-7">
                    {{ $model->price }} $
                </h1>
                <a class="font-adventpro w-40 h-12 bg-blue-700 rounded-tr-2xl text-white font-bold py-2 px-7 text-xl"
                    href="{{ route('front.contact') }}">Contact Us</a>
            </div>
            <div class="font-abel text-lg font-bold text-justify">
                <h2 class="font-adventpro font-bold text-2xl">Description</h2>
                {{ $model->description }}
            </div>
        </div>
        <div class="h-auto w-auto font-abel text-lg">

            <div class="grid md:grid-cols-2">
                <div></div>
                <div>
                    <h2 class="font-adventpro font-bold text-2xl">Info</h2>
                    <div class="grid grid-cols-2 gap-2">

                            <div class="space-y-4">
                                <div class="flex">
                                    <div class="font-extrabold grow  "><i class="las la-chart-area"></i>
                                        Living
                                        Area</div>
                                    <div class="flex justify-start"><strong>{{ $model->living_area }}</strong></div>
                                </div>
                                <div class="flex">
                                    <div class="font-extrabold grow"><i class="las la-chart-area"></i> Total Area</div>
                                    <div class="flex justify-start"><strong>{{ $model->total_area }}</strong></div>
                                </div>
                                <div class="flex">
                                    <div class="font-extrabold grow"><i class="las la-bath"></i> Bath Full</div>
                                    <div class="flex justify-start"><strong>{{ $model->bath_full }}</strong></div>
                                </div>
                                <div class="flex">
                                    <div class="font-extrabold grow"><i class="las la-bath"></i> Bath Half</div>
                                    <div class="flex justify-start"><strong>{{ $model->bath_half }}</strong></div>
                                </div>
                            </div>

                        <div class="space-y-4">
                            <div class="flex">
                                <div class="font-extrabold grow "><i class="las la-warehouse"></i> Garage</div>
                                <div class=""><strong>{{ $model->garage }}</strong></div>
                            </div>
                            <div class="flex">
                                <div class="font-extrabold grow"><i class="las la-info-circle"></i> Status</div>
                                <div class=""><strong>{{ $model->listingStatus->name }}</strong></div>
                            </div>
                            <div class="flex">
                                <div class="font-extrabold grow"><i class="las la-info-circle"></i> Type</div>
                                <div class=""><strong>{{ $model->listingType->name }}</strong></div>
                            </div>
                            <div class="flex">
                                <div class="font-extrabold grow"><i class="las la-dollar-sign"></i> Price</div>
                                <div class=""><strong>{{ $model->price }}</strong></div>
                            </div>
                        </div>
                    </div>
                    @if ($model->video)
                    <div class="mt-16">
                        <h2 class="font-adventpro font-bold text-2xl">Video</h2>
                        <iframe src="{{ $model->video }}" class="w-full aspect-video rounded-xl shadow" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                @endif
                @if ($model->map)
                    <div class="shadow-2xl rounded-xl aspect-video w-full mt-16">
                        {!! $model->map !!}
                    </div>
                @endif
                </div>

            </div>
        </div>


    </div>



    @push('scripts')
        <script>
            $('.gallery-slider').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                autoplayspeed: 700,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
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
        </script>
    @endpush
@endsection
