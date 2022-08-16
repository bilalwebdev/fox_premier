<div>
    <div class="flex justify-center mb-5">
        <p class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">All Remodels</p>
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
        @foreach ($remodels as $remodel)
            <div class="card" style="margin-top: -15px">
                <div class="card-content">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>{{ $remodel->title }}</strong>
                            </div>
                            <div class="d-flex justify-end">
                                <a href="{{ route('admin.remodel.edit', $remodel->slug) }}"
                                    class="mr-6 text-[#666ee8] hover:text-[#666ee8]"><i class="ft-edit"></i></a>
                                <button wire:click="$emit('deleteFile',{{ $remodel->id }})"
                                    class="mr-6 text-red-500 hover:text-red-500 border-0"><i
                                        class="ft-trash-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mb-1 mx-20">
            {{ $remodels->links('pagination-links') }}
        </div>
    @php
        $message = 'ReModel';
    @endphp
    <x-alert :message="$message" />
</div>
