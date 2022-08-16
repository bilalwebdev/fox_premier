<div>
    <div class="flex justify-center mb-5">
        <p class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">All Types</p>
    </div>
        <div class="modal fade" id="model" role="dialog"  wire:ignore.self>
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <p>Create New Type</p>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <form wire:submit.prevent="addType">
                                <div class="col-md-12">
                                    <label for="">Type</label>
                                    <input type="text" class="form-control" id="type" wire:model.defer="type" required placeholder="Enter Type">
                                    @error('type')
                                        <span class="text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-1">
                                    <div class="flex justify-end"><button type="submit" class="btn btn-primary " ><i class="la la-plus-circle"></i>  Create
                                            Type</button></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="flex justify-center">
            <div class="col-md-8 mb-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="text-md mb-1 ml-1 font-semibold">Search</h4>
                                <div class="ml-2">
                                    <input type="search" wire:model.debounce.500ms="search"
                                        class="form-control  border-[#666ee8] rounded-br rounded-tl  mb-2"
                                        placeholder="Search here" style="margin-left: -15px">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($types as $list)
            <div class="card" style="margin-top: -15px">
                <div class="card-content">
                    <div class="card-body">
                        <div>
                            <div>
                                @if ($typeID == $list->id)
                                    {{-- @php

                                       dd($typeUpdate);
                                    @endphp --}}
                                    <form wire:submit.prevent="update({{ $list->id }})">
                                        <input type="text" class="form-control" wire:model.defer="typeUpdate" required>
                                        @error('type')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-info mt-1">Update</button>
                                    </form>
                                @else
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>{{ $list->name }}</strong>
                                    </div>
                                    <div class="d-flex justify-end">
                                        <button wire:click="edit({{ $list->id }})" class="mx-1 text-[#666ee8]"><i class="ft-edit"></i></button>
                                        <button wire:click="$emit('deleteFile',{{$list->id }})" class="text-red-500"><i class="ft-trash-2"></i></button>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mb-1 mx-20">
            {{ $types->links('pagination-links') }}
        </div>
</div>
@php
    $message = "Type";
@endphp
<x-alert :message="$message"/>
@push('scripts')
<script>
 window.livewire.on('typeAdded', typeID => {
     $('#model').modal('hide');
 })
</script>
@endpush
