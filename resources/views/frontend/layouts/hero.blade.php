<div class="hidden md:block">
    @if($site->video)
    <div class="">
        <iframe class="w-full min-h-screen" src="{{ $site->video }}?&autoplay=1&controls=0&mute=1&showinfo=0&rel=0&modestbranding=1&loop=1&muted=1&?background=1&controls=0" allow="autoplay; fullscreen" allowfullscreen></iframe>

    </div>
    @else
    <div class="sm:h-full sm:w-full bg-no-repeat bg-fixed bg-cover relative" style="background-image: url({{ $site->image['large'] }})">
        <div class="lg:grid lg:grid-cols-2 flex justify-center items-center flex-col">
            <div class="sm:my-60 md:ml-32 mx-6 my-32">
                <p class="text-white font-extrabold sm:text-6xl md:text-6xl text-5xl font-adventpro">

                    Residences designed <br> to make the everyday <br> extraordinary.

                </p>
                <p class="mt-8 font-abel text-lg text-white">
                    With a Fox Premier Builders home, you will build your unparalleled lifestyle. For you and for your family.
                    Family-owned and operated, Fox Premier Builders at Babcock Ranch brings a dedication to excellence that goes
                    unmatched in the home building industry. In business more than 14 years, we are committed to making the
                    building experience enjoyable while delivering the highest quality that our standard home offerings and
                    custom homes deserve.
                </p>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="sm:h-full sm:w-full bg-no-repeat bg-fixed bg-center relative md:hidden" style="background-image: url({{ $site->image['large'] }})">
    <div class="lg:grid lg:grid-cols-2 flex justify-center items-center flex-col">
        <div class="sm:my-60 md:ml-32 mx-6 my-32">
            <p class="text-white font-extrabold sm:text-6xl md:text-6xl text-5xl font-adventpro">

                Residences designed <br> to make the everyday <br> extraordinary.

            </p>
            <p class="mt-8 font-abel text-lg text-white">
                With a Fox Premier Builders home, you will build your unparalleled lifestyle. For you and for your family.
                Family-owned and operated, Fox Premier Builders at Babcock Ranch brings a dedication to excellence that goes
                unmatched in the home building industry. In business more than 14 years, we are committed to making the
                building experience enjoyable while delivering the highest quality that our standard home offerings and
                custom homes deserve.
            </p>
        </div>
    </div>
</div>
