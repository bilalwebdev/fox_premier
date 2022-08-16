@extends('frontend.layouts.master')
@push('title')
    <title>
        All Listings</title>
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
        <div class="flex justify-between flex-col sm:flex-row ">
            <div>
                <h1 class="ml-10 text-3xl font-adventpro font-extrabold w-auto">All Listings</h1>
            </div>
            <div class="flex justify-center">
                <div class="mt-2 xl:w-96 font-adventpro">
                    <form action="">
                        <div class="input-group relative flex flex-row items-stretch w-full mb-4">
                            <input type="search" name="search"
                                class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                placeholder="Search" aria-label="Search" aria-describedby="button-addon2"
                                value="{{ $search }}">
                            <button
                                class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-r shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                type="submit" id="button-addon2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                    class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2  font-adventpro">
            @forelse ($listings as $list)
                <div class="flex justify-center items-center md:ml-4 sm:ml-4">
                    <div class="bg-white md:w-64 lg:w-72 rounded-3xl mt-7 mb-4 shadow-lg">
                        <a href="{{ route('front.listing.detail', $list->slug) }}">
                            <img class="rounded-t-3xl" src="{{ $list->image['small'] }}" alt="" />
                        </a>
                        <p class="text-xl font-bold py-7 ml-5">{{ $list->title }}</p>
                        <hr>
                        <div class="grid grid-cols-3">
                            <div class=" py-4 px-8"><i class="las la-bed"></i>
                                @if ($list->bed)
                                    {{ $list->bed }}
                                @else
                                    0
                                @endif
                            </div>
                            <div class="py-4 px-6 border-l-[1px]"><i class="las la-shower"></i>
                                @if ($list->bath_full && $list->bath_half)
                                    {{ $list->bath_full }}+{{ $list->bath_half }}
                                @elseif(!$list->bath_full)
                                    {{ $list->bath_half }}
                                @elseif(!$list->bath_half)
                                    {{ $list->bath_full }}
                                @else
                                    0
                                @endif
                            </div>
                            <div class="py-4 px-8 border-l-[1.5px]"><i class="las la-warehouse"></i>
                                @if ($list->garage)
                                    {{ $list->garage }}
                                @else
                                    0
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty

                <div class="bg-pink-300 text-red-800 mx-auto px-8 py-4 my-5 font-bold rounded-md">
                    No data found!
                </div>
            @endforelse
        </div>
    </div>
    @if (!$search)
        <div class="mb-1 mx-20">
            {{ $listings->links() }}
        </div>
    @endif
@endsection
