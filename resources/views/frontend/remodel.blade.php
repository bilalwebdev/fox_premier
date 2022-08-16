@extends('frontend.layouts.master')
@push('title')
    <title>Remodels</title>
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
        <div class="flex justify-between flex-col sm:flex-row">
            <div>
                <h1 class="ml-10 text-3xl font-adventpro font-extrabold w-auto">Remodels</h1>
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

            @forelse ($remodels as $remodel)
                <div class="flex justify-center items-center">
                    <div class="bg-white md:w-64 lg:w-72 rounded-3xl mt-7 mb-4 shadow-lg">
                        <a href="{{ route('front.remodel.detail', $remodel->slug) }}">
                            <img class="rounded-t-3xl" src="{{ $remodel->image['small'] }}" alt="" />
                        </a>
                        <p class="text-xl font-bold py-7 ml-5">{{ $remodel->title }}</p>
                        <hr>
                    </div>
                </div>
            @empty

                <div class="bg-pink-300 text-red-800 mx-auto px-8 py-4 my-5 font-bold rounded-md">
                    No data found!
                </div>
            @endforelse
        </div>
    </div>
    {{-- <div class="w-auto h-auto ">
    <div class="flex justify-start items-start sm:flex-row flex-col">
    <p class="sm:ml-10 ml-6 text-3xl font-bold font-adventpro">ReModels</p>
    </div>
    <div class="sm:grid sm:grid-cols-3 flex justify-center items-center flex-col font-adventpro">
        @if (is_array($remodels) || is_object($remodels))
        @foreach ($remodels as $list)
        <div class="bg-white w-[320px] rounded-3xl mt-7 mb-4">
            <a href="{{ route('front.remodel.detail', ['id' => $list->id]) }}">
                <img class="rounded-t-3xl" src="{{ $list->image['small'] }}"
                    alt="" />
            </a>
            <p class="text-xl font-bold py-7 ml-5">{{ $list->title }}</p>
            <hr>
        </div>
        @endforeach
        @else
        <div class="bg-pink-300 text-red-800 px-4 py-4 my-5 font-bold rounded-md">
            No data Found!
        </div>
        @endif
    </div>
</div> --}}
    <div class="mb-1 mx-20">
        {{ $remodels->links() }}
    </div>
@endsection
