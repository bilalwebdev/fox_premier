@extends('admin.layouts.dashboard')

@section('content')
    <div class="card" wire:ignore>


        <div class="card-content" wire:ignore>
            <div class="card-header">
                <h1 class="text-2xl">Upload Images</h1>
            </div>
            <div class="card-body">

                <div class="flex justify-center items-center w-full" wire:ignore>
                    <div class="UploadMediaImages" wire:ignore></div>
                </div>
            </div>
        </div>
    </div>

    <livewire:admin.media-manager />
@endsection




@push('styles')
    <link href="https://releases.transloadit.com/uppy/v2.3.2/uppy.min.css" rel="stylesheet">
@endpush
