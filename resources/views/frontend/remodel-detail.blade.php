@extends('frontend.layouts.master')
@push('title')
    <title>{{ $remodel->title }}</title>
@endpush
@section('content')
    <div class="w-auto  sm:h-[400px] h-[300px] bg-gradient-to-tr from-indigo-400  to-indigo-900">
        @include('frontend.layouts.navbar', [
            'background' => '',
            'text' => 'text-white',
            'shadow' => '',
            'background_mobile' => 'bg-white',
        'text_mobile' => 'text-black',
        ])
        <div class="text-white font-adventpro text-5xl font-bold text-left mt-36 ml-10 md:ml-48">
            {{ $remodel->title }}
        </div>
    </div>
    <div class="container mx-auto">
        <div class="sm:-mt-10 flex justify-center -mt-5 mx-4 sm:mx-0">
            <img src="{{ $remodel->image['large'] }}" alt="" class="rounded-lg shadow">
        </div>
        <div class="w-auto sm:ml-16 mx-4 mt-6 sm:mt-8">
            <div class="font-abel  text-justify w-auto mb-7 text-lg ">
                {!! $remodel->description !!}
            </div>
        </div>
    </div>
@endsection
