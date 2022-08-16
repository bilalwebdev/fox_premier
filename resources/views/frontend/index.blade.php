@extends('frontend.layouts.master')
@push('title')
    <title>
        {{ $site->title }}</title>
@endpush

@section('content')
@include('frontend.layouts.navbar', [
    'background' => '',
    'text' => 'text-black',
    'shadow' => '',
    'background_mobile' => 'bg-white',
    'text_mobile' => 'text-black',
    ])
    @include('frontend.layouts.hero')

    <div
        class="flex items-center justify-center lg:flex-row flex-col  bg-white py-5 px-2 md:mx-48 mx-8 md:h-24 h-auto md:rounded-none rounded-md drop-shadow-xl -mt-8">
        <a href="{{ route('front.all.listings') }}" class="flex items-center">
            <p class="text-xl font-semibold lg:ml-10 ml-4 font-adventpro">
                See all Listings
            </p>

            <i class="fas fa-long-arrow-alt-right ml-6 text-blue-700" style="font-size: 19px"></i>
        </a>
        <a href="" class="mx-auto lg:text-5xl text-3xl font-extrabold font-adventpro">
            Leaders in custom buildings
        </a>

    </div>

    <div class="h-auto w-auto sm:grid sm:grid-cols-2 flex justify-center items-center flex-col bg-white">
        <div class="z-10">
            <img src="https://img.freepik.com/free-photo/business-technology-office-concept-two-businessmen-with-laptop-tablet-pc-computer-papers-having-discussion-modern-office_533890-233.jpg"
                alt="" class="mt-20 sm:h-[600px] h-[400px] shadow-2xl rounded-tr-[75px]">
        </div>
        <div class="lg:mt-48 mt-16 lg:ml-4 ml-2 flex justify-center items-center flex-col">
            <div class="border-t-[5px] border-violet-700 lg:w-40 w-32 mb-5 rounded"></div>
            <div class="space-y-3">
                <p class="text-5xl font-bold font-adventpro text-center">You are in good hands</p>
                <p class=" font-abel text-lg">
                    From start to finish, we combine uncompromising craftsmanship with attention to detail, providing
                    complete
                    customer satisfaction. Spacious interiors, sumptuous master retreats, exquisite details, distinctive
                    elevations, and professional workmanship from the inside out are only the beginning of our commitment to
                    excellence.
                </p>
                <p class=" font-abel text-lg">Fox Premier Builders balanced home designs combine functionality with
                    unmatched beauty and elegance,
                    resulting in some of the finest, most distinctive homes in Southwest Florida. Contact us today to start
                    turning your dream home into reality. We look forward to making your dream a reality.</p>
                <p class="font-abel text-lg text-center">Welcome home to Babcock Ranch. Where you are more connected to your
                    world. You are home.</p>
            </div>

            <button
                class="font-adventpro lg:mt-16 mt-10 w-40 h-[60px] bg-blue-600 rounded-tr-2xl text-white font-bold py-3 px-4 mb-5">Learn
                More <i class="fas fa-long-arrow-alt-right ml-6 text-white" style="font-size: 19px"></i></button>
        </div>
    </div>
    <div class="w-auto h-auto bg-gray-100 pb-36">
        <div class="flex justify-start items-start sm:flex-row flex-col">
            <p class="sm:ml-32 ml-6 text-5xl font-bold mt-28 font-adventpro">Latest Projects</p>
        </div>
        <div
            class="sm:grid sm:grid-cols-3 flex justify-center items-center flex-col sm:ml-32 lg:ml-10 md:ml-4 sm:ml-4 ml-2 font-adventpro gap-x-0">
            @foreach ($latestListings as $listing)
                <div class="flex justify-center items-center w-full">
                    <div class="bg-white w-[320px] rounded-3xl mt-7 mb-4 shadow-lg">
                        <a href="{{ route('front.listing.detail', $listing->slug) }}">
                            <img class="rounded-t-3xl" src="{{ $listing->image['small'] }}" alt="" />
                        </a>
                        <p class="text-xl font-bold py-7 ml-5">{{ $listing->title }}</p>
                        <hr>
                        <div class="grid grid-cols-3">
                            <div class=" py-4 px-8"><i class="las la-bed"></i>
                                @if ($listing->bed)
                                    {{ $listing->bed }}
                                @else
                                    0
                                @endif
                            </div>
                            <div class="py-4 px-8 border-l-[1px]"><i class="las la-shower"></i>
                                @if ($listing->bath_full && $listing->bath_half)
                                    {{ $listing->bath_full }}+{{ $listing->bath_half }}
                                @elseif(!$listing->bath_full)
                                    {{ $listing->bath_half }}
                                @elseif(!$listing->bath_half)
                                    {{ $listing->bath_full }}
                                @else
                                    0
                                @endif
                            </div>
                            <div class="py-4 px-8 border-l-[1.5px]"><i class="las la-warehouse"></i>
                                @if ($listing->garage)
                                    {{ $listing->garage }}
                                @else
                                    0
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-gradient-to-tr from-indigo-400  to-indigo-900  h-auto sm:h-[600px] w-auto">
        <div class="flex justify-center flex-col items-center">
            <div class="border-t-[5px] border-violet-800 w-44 mt-24  mb-5 rounded"></div>
            <p class="text-5xl text-white font-bold sm:ml-9 ml-3   font-adventpro text-center">About Us</p>
            <p class="sm:w-[500px] w-[300px] text-gray-300 mt-6 font-abel text-center sm:mx-0 text-lg">
                Our vision is not to only build houses, but to build homes and create a lifestyle. Fox Premier Builders’
                homes are environmentally sensitive in nature and encompass the reasons why people move to Babcock Ranch,
                with the interior and the exterior blending perfectly together with nature to create an atmosphere that is
                both open and inviting
            </p>
            <p class="sm:w-[500px] w-[300px] text-gray-300 mt-6 font-abel text-center sm:mx-0 text-lg">We realize that when
                building a home, no two homeowners will select the same features or room configurations
                and that no two lots are going to be the same. For that, we are proud to say that not one of our homes has
                been built the same way twice. Each residence is tailored to the homeowner’s desires and it is designed to
                fit the lot on which it is being built. By redesigning the home for the lot, we are able to incorporate the
                unique characteristics of the property and to truly embrace the views of your lot, lake, town or common
                areas.</p>

        </div>
    </div>
    <div class="bg-white py-24">
        <div class="flex justify-center items-center flex-col">
            <p class="text-5xl font-bold text-center font-adventpro">Testimonials</p>
            <div class="sm:mt-16 mt-6 border-t-[5px] border-violet-700 sm:w-72 w-40  rounded">
            </div>
        </div>
        <div class="font-adventpro slider font-semibold">
            @foreach ($testimonials as $testimonial)
                <div class="mx-8">
                    <p class="text-base mt-16 text-justify">{{ $testimonial->description }}</p>

                    <div class="flex justify-center items-center flex-col">
                        <div>
                            <p class="text-xl">{{ $testimonial->name }}</p>
                            <p class="text-gray-300">{{ $testimonial->designation }}
                            </p>
                        </div>
                    </div>
                    @if ($testimonial->video)
                        <div class="">
                            <iframe src="{{ $testimonial->video }}" class="aspect-video w-full rounded shadow"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
