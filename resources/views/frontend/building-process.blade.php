@extends('frontend.layouts.master')
@push('title')
    <title>Building Process</title>
@endpush
@section('content')
    @include('frontend.layouts.navbar', [
        'background' => 'bg-white',
        'text' => '',
        'shadow' => 'shadow-sm',
        'background_mobile' => 'bg-white',
        'text_mobile' => 'text-black',
    ])
    <div class="container mx-auto">

        <h1 class="text-4xl md:text-6xl text-center font-extrabold font-adventpro">Building Process</h1>


        <div class="hidden md:block">
            <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%"></div>
                <!-- right timeline -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                    </div>
                    <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4 space-y-3">
                        <h3 class="font-bold text-gray-800 text-xl">Planing Stage</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                            Our direct involvement in every step of the building process sets us apart from other builders.
                            We accompany our clients as the design unfolds to select all of the components that will
                            comprise your energy efficient home. All of the features and selections for you home interact
                            with each other, and it is imperative that we be involved to ensure that all of these
                            relationships will work. Our direct involvement in every step of the building process sets us
                            apart from other builders.
                        </p>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Our architects of
                            choice, Allison Ramsey and Timberbilt reflect the traditions and statements that Babcock Ranch
                            has to say. Modern timeless living, indoor and outdoor spaces that flow together seamlessly. And
                            the added bonus of technology that will not only shrink your energy bill but connect you to the
                            world.</p>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">So, if our porches seem
                            a little more inviting and our living rooms seem more livable and every part of your home feels
                            just right, you’ll know it was by design.

                        </p>

                        <img class="rounded-xl"
                            src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/planning.jpeg' }}" alt="">

                    </div>
                </div>

                <!-- left timeline -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                    </div>
                    <div class="order-1 bg-white-400 rounded-lg shadow-xl w-5/12 px-6 py-4 space-y-3">
                        <h3 class=" font-bold  text-xl">Construction Stage</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">By this stage, your
                            part in the process is complete. You can sit back and relax while we manage the many steps to
                            construct your home. Our passion for detail and our logical sequence ensure you a smooth journey
                            to your newly constructed home.</p>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Of course, we will keep
                            you informed at every stage. You can visit the building site as often as you would like or you
                            can delegate the whole process to us with total peace of mind.

                        </p>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Building a semi- custom
                            home demands, the combined efforts of several highly skilled tradesmen working in unison to
                            create a carefully crafted home that exceeds not only our expectations, but more importantly,
                            the expectations of our customers. In order to maintain the highest standards of quality
                            construction, Fox Premier Builders awards construction bids to its partners only after they meet
                            our rigorous and highly selective evaluation process. Simply being able to “build it to code” or
                            providing the lowest bid never ensures being awarded one of our building contracts. We require
                            all of our vendors to provide detailed logistical information, combined with a proven track
                            record in the building industry, reflecting not only reliable construction practices, but safety
                            and financial stability reports as well. By carefully selecting only those vendors who meet all
                            our requirements, we are able to facilitate lower costs and all but eliminate the potential for
                            delays during the building process. This is the Fox difference.

                        </p>
                        <img class="rounded-xl"
                            src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/construction.jpeg' }}" alt="">

                    </div>
                </div>

                <!-- right timeline -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                    </div>
                    <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4 space-y-3">
                        <h3 class="font-bold text-gray-800 text-xl">Completion</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Once we arrive at the
                            scheduling of occupancy, Fox Premier Builders will conduct a thorough walk-through inspection
                            with you to ensure that all of your expectations have been met and everything specified in your
                            construction contracts is included in the home. We will answer any questions you have and show
                            you how to operate all of your appliances, and then give you the keys to your new home. You will
                            also be given a new home owner package full of information regarding local and community
                            services. </p>
                            <img class="rounded-xl"
                            src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/complete.jpeg' }}" alt="">
                    </div>
                </div>

                <!-- left timeline -->

            </div>
        </div>
    </div>


    <div class="px-2 md:hidden">
            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">


                <div class="order-1 bg-white rounded-lg shadow-xl  px-6 py-4 space-y-3">
                    <div class="flex items-center">
                        <div class="z-20 flex items-center bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                            <p class="mx-auto font-semibold text-lg text-white">1</p>
                        </div>&nbsp;
                        <h3 class="font-bold text-gray-800 text-xl">Planing Stage</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Our direct involvement in every step of the building process sets us apart from other builders.
                        We accompany our clients as the design unfolds to select all of the components that will
                        comprise your energy efficient home. All of the features and selections for you home interact
                        with each other, and it is imperative that we be involved to ensure that all of these
                        relationships will work. Our direct involvement in every step of the building process sets us
                        apart from other builders.
                    </p>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Our architects of
                        choice, Allison Ramsey and Timberbilt reflect the traditions and statements that Babcock Ranch
                        has to say. Modern timeless living, indoor and outdoor spaces that flow together seamlessly. And
                        the added bonus of technology that will not only shrink your energy bill but connect you to the
                        world.</p>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">So, if our porches seem
                        a little more inviting and our living rooms seem more livable and every part of your home feels
                        just right, you’ll know it was by design.

                    </p>

                    <img class="rounded-xl"
                        src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/planning.jpeg' }}" alt="">

                </div>
            </div>

            <!-- left timeline -->
            <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">


                <div class="order-1 bg-white-400 rounded-lg shadow-xl  px-6 py-4 space-y-3">

                    <div class="flex items-center">
                        <div class="z-20 flex items-center bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                            <p class="mx-auto font-semibold text-lg text-white">2</p>
                        </div>&nbsp;
                        <h3 class="font-bold text-gray-800 text-xl">Construction Stage</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">By this stage, your
                        part in the process is complete. You can sit back and relax while we manage the many steps to
                        construct your home. Our passion for detail and our logical sequence ensure you a smooth journey
                        to your newly constructed home.</p>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Of course, we will keep
                        you informed at every stage. You can visit the building site as often as you would like or you
                        can delegate the whole process to us with total peace of mind.

                    </p>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Building a semi- custom
                        home demands, the combined efforts of several highly skilled tradesmen working in unison to
                        create a carefully crafted home that exceeds not only our expectations, but more importantly,
                        the expectations of our customers. In order to maintain the highest standards of quality
                        construction, Fox Premier Builders awards construction bids to its partners only after they meet
                        our rigorous and highly selective evaluation process. Simply being able to “build it to code” or
                        providing the lowest bid never ensures being awarded one of our building contracts. We require
                        all of our vendors to provide detailed logistical information, combined with a proven track
                        record in the building industry, reflecting not only reliable construction practices, but safety
                        and financial stability reports as well. By carefully selecting only those vendors who meet all
                        our requirements, we are able to facilitate lower costs and all but eliminate the potential for
                        delays during the building process. This is the Fox difference.

                    </p>
                    <img class="rounded-xl"
                        src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/construction.jpeg' }}" alt="">

                </div>
            </div>

            <!-- right timeline -->
            <div class="mb-8 flex justify-between items-center w-full right-timeline">


                <div class="order-1 bg-white rounded-lg shadow-xl  px-6 py-4 space-y-3">

                    <div class="flex items-center">
                        <div class="z-20 flex items-center bg-gray-800 shadow-xl w-8 h-8 rounded-full">
                            <p class="mx-auto font-semibold text-lg text-white">3</p>
                        </div>&nbsp;
                        <h3 class="font-bold text-gray-800 text-xl">Completion</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">Once we arrive at the
                        scheduling of occupancy, Fox Premier Builders will conduct a thorough walk-through inspection
                        with you to ensure that all of your expectations have been met and everything specified in your
                        construction contracts is included in the home. We will answer any questions you have and show
                        you how to operate all of your appliances, and then give you the keys to your new home. You will
                        also be given a new home owner package full of information regarding local and community
                        services. </p>
                        <img class="rounded-xl"
                        src="{{ env('AWS_IMG_RESIZER') . '/fit-in/1080x720/assets/complete.jpeg' }}" alt="">
                </div>
            </div>

    </div>
@endsection
