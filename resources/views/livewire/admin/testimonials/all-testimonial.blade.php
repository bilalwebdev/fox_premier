<div>
    <div>
        <div class="d-flex justify-end">
            <a class="btn btn-primary rounded" href="{{ route('admin.create.testimonial') }}" >
              <i class="la la-plus-circle"></i>  Add new</a>
        </div>
        <div class="flex justify-center mb-5">
            <p class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">All Testimonials</p>
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
            @foreach ($testimonials as $list)
                <div class="card" style="margin-top: -15px">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <strong>{{ $list->name }}</strong>
                                </div>
                                <div class="d-flex justify-end">
                                    <a href="{{ route('admin.testimonial.edit', $list->id) }}"
                                        class="mr-6 text-[#666ee8] hover:text-[#666ee8]"><i class="ft-edit"></i></a>
                                    <button wire:click="$emit('deleteFile',{{ $list->id }})"
                                        class="mr-6 text-red-500 hover:text-red-500 border-0"><i
                                            class="ft-trash-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mb-1 mx-20">
                {{ $testimonials->links('pagination-links') }}
            </div>
        @php
            $message = 'Testimonial';
        @endphp
        <x-alert :message="$message" />
    </div>
</div>
