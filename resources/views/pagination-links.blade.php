
@if ($paginator->hasPages())
<ul class="flex justify-center">
    <!-- prev -->
    @if ($paginator->onFirstPage())
    <button class="h-10 min-w-0 px-1 text-center rounded-full bg-gray-200" disabled wire:click="previousPage"><i class="las la-long-arrow-alt-left"></i> Previous</button>
    @else
    <button class="h-10 min-w-0 px-1 text-center rounded-full shadow bg-white cursor-pointer" wire:click="previousPage"><i class="las la-long-arrow-alt-left"></i> Previous</button>
    @endif
    <!-- prev end -->

    <!-- numbers -->
    @foreach ($elements as $element)
    <div class="flex">
        @if(is_array($element))
        @foreach ($element as $page => $url)
        @if($page == $paginator->currentPage())
        <button class="h-10 min-w-0 px-1 mx-[10px] text-center rounded-full shadow bg-[#666ee8] text-white cursor-pointer" wire:click="gotoPage({{$page}})">{{$page}}</button>
        @else
        <button class="h-10 min-w-0 px-1 mx-[10px] text-center rounded-full  shadow bg-white cursor-pointer" wire:click="gotoPage({{$page}})">{{$page}}</button>
        @endif
        @endforeach
        @endif
    </div>
    @endforeach
    <!-- end numbers -->


    <!-- next  -->
    @if ($paginator->hasMorePages())
    <button class="h-10 min-w-0 px-1 text-center rounded-full  shadow bg-white cursor-pointer" wire:click="nextPage">Next <i class="las la-long-arrow-alt-right"></i> </button>
    @else
    <button class="h-10 min-w-0 px-1 text-center rounded-full  bg-gray-200" disabled wire:click="nextPage">Next <i class="las la-long-arrow-alt-right"></i></button>
    @endif
    <!-- next end -->
</ul>
@endif
