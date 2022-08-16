@extends('frontend.layouts.master')
@push('title')
    <title>Contact Us</title>
@endpush
@section('content')

    <div class="bg-gradient-to-tr from-indigo-400  to-indigo-900  h-auto sm:h-[500px] w-auto">
        @include('frontend.layouts.navbar', [
            'background' => '',
            'text' => 'text-white',
            'shadow' => '',
            'background_mobile' => 'bg-white',
            'text_mobile' => 'text-black',
        ])
        <div class="text-white font-adventpro text-5xl font-bold text-center sm:mt-36 mt-20">
            Contact Us
        </div>
    </div>
    <div id="notification" style="display: none;">
        <span class="dismiss"><a title="dismiss this notification">x</a></span>
    </div>
    <div id="result"></div>
    <div class="sm:grid sm:grid-cols-2 h-auto w-auto mt-20 flex justify-start items-start flex-col">
        <div class="ml-10 lg:ml-32 xl:ml-56 mt-4">
            <h1 class="text-3xl font-abel font-bold ">Get in touch</h1>
            <h2 class="text-lg font-bold font-adventpro mt-10 mb-2">Phone</h2>
            <p class="font-abel">
                {{ $contact->phone }}
            </p>
            <h2 class="text-lg font-bold font-adventpro mt-7 mb-2">Email</h2>
            <p class="font-abel text-indigo-700">
                {{ $contact->email }}
            </p>
            <h2 class="text-lg font-bold font-adventpro mt-7 mb-2">Office</h2>
            <p class="font-abel">
                {{ $contact->add_line_1 }}
            </p>
            <p class="font-abel">
                {{ $contact->add_line_2 }}
            </p>

        </div>
        <div class="shadow-xl rounded-[50px] roun ml-3 mr-8 my-4">
            <!-- component -->
            <form class="w-auto mx-7 my-3 font-abel" method="POST" action="{{ route('send.email') }}">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class=" tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-first-name">
                            First Name
                        </label>
                        <input
                            class="appearance-none block w-full  text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            name="first_name" type="text" placeholder="Jane" required>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class=" tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-last-name">
                            Last Name
                        </label>
                        <input
                            class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="last_name" type="text" placeholder="Doe" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class=" tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-password">
                            E-mail
                        </label>
                        <input
                            class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="email" type="email" required>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class=" tracking-wide text-gray-700 text-md font-bold mb-2" for="grid-password">
                            Message
                        </label>
                        <textarea class=" no-resize appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                            name="message" required></textarea>

                    </div>
                </div>
                <div class="flex md:items-center">
                    <div class="mb-6 w-28">
                        <button
                            class="font-adventpro h-12 bg-blue-700 rounded-tr-2xl text-white font-bold py-2 px-7 text-xl"
                            href="{{ route('front.contact') }} " id="submitData" type="submit">Send</button>
                    </div>
                    <div class="h-16 w-14 rounded sm:-mt-5" id="loader" style="display: none">
                        <img src="{{ asset('front_assets/images/Spinner.gif') }}" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($contact->map )
    <div class="w-full h-[400px] mt-28">
        {!! $contact->map !!}
    </div>
    @endif
    @push('scripts')
        <script>
            $(document).ready(function() {
                $("form").submit(function() {
                    $('#loader').fadeIn("slow");
                    $('#submitData').prop('disabled', true);
                    $("#notification").fadeIn("slow").append('Thanks for Contacting Us');
                    $(".dismiss").click(function() {
                        $("#notification").fadeOut("slow");
                    });
                });
            });
        </script>
    @endpush
