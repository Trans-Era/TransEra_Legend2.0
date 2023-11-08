<div class="min-h-screen">
<section
    class="relative swiper"
    x-cloak
    x-data="{swiper: null}"
    x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        effect: 'coverflowEffect',
        breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1024: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        },
    });
    console.log(swiper.realIndex);
    swiper.realIndex = 0;
    let interval = setInterval(() => {
        swiper.slideNext()
    }, 5000)
    swiper.on('slideChange', function () {
        clearInterval(interval)
        interval = setInterval(() => {
        swiper.slideNext()
        }, 5000)
    });
    "
    >
    <!-- Content -->
    <div
        class="
        absolute
        top-0
        left-0
        w-full
        h-full
        flex
        items-center
        z-30
        pointer-events-none
        "
    >
        <div class="w-full max-w-7xl mx-auto grid grid-cols-12 px-4">
        <div class="col-span-12 text-center ltablet:text-left lg:text-left ltablet:col-span-5 lg:col-span-5 space-y-4">
            <h1 class="font-sans font-semibold text-5xl ltablet:text-6xl lg:text-7xl leading-none text-white">
            Premium cars and vehicles
            </h1>
            <p class="font-sans text-lg text-white max-w-md mx-auto ltablet:mx-0 lg:mx-0">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ex ea
            difficultate illae fallaciloquae, ut ait.
            </p>
        </div>
        </div>
    </div>

    <!--Slider-->
    <div class="swiper-container relative" x-ref="container">
        <!-- Overlay -->
        <div
        class="
            absolute
            top-0
            left-0
            w-full
            h-full
            flex
            items-center
            bg-muted-900/30
            z-20
        "
        ></div>
        <div class="swiper-wrapper">
            @for ($i = 0; $i < count($cars); $i++)
            <div
                class="
                swiper-slide
                w-full
                bg-muted-100
                h-screen
                min-h-screen
                dark:bg-muted-1000
                "
                :class="swiper.realIndex === {{ $i }} ? 'lg:animate-kenburns bg-center lg:bg-left-top' : ''"
                data-background="{{ asset($cars[$i]->photo) }}"
                data-swiper-autoplay="2000"
                style="width: 1062px; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset($cars[$i]->photo) }});"
            >
            </div>
            @endfor
        </div>

        <!--Controls-->
        <div
        class="
            swiper-caption
            absolute
            bottom-0
            right-0
            w-full
            max-w-sm
            border border-muted-800
            bg-muted-900/80
            hover:bg-muted-900
            text-white
            z-30
            transition-colors
            duration-300
        "
        >
        <div class="swiper-caption-inner">
            @for ($i = 0; $i < count($cars); $i++)
                <div class="flex gap-4 p-5" x-show="swiper.realIndex === {{ $i }}">
                    <div class="h-12 w-12 min-w-[3rem] flex items-center justify-center">
                    </div>
                    <div>
                        <h3 class="font-sans font-semibold text-lg">{{ $cars[$i]->brand->name }} {{ $cars[$i]->name }}</h3>
                        <p class="font-sans text-xs">Deep Gray · 19’’ Sport Wheels · LED</p>
                        <p class="font-sans text-xs mt-1">
                        {{ $cars[$i]->description }}
                        </p>
                    </div>
                </div>
            @endfor

            <div class="w-full flex items-center border-t border-muted-800">
            <div class="flex">
                <div class="carousel-controls flex">
                <button
                    class="
                    w-14
                    h-14
                    flex
                    items-center
                    justify-center
                    hover:bg-muted-800 hover:text-primary-500
                    transition-colors
                    duration-300
                    "
                    @click="swiper.slidePrev()"
                >
                    <i class="iconify w-5 h-5" data-icon="lucide:arrow-left"></i>
                </button>

                <button
                    class="
                    w-14
                    h-14
                    flex
                    items-center
                    justify-center
                    hover:bg-muted-800 hover:text-primary-500
                    transition-colors
                    duration-300
                    "
                    @click="swiper.slideNext()"
                >
                    <i class="iconify w-5 h-5" data-icon="lucide:arrow-right"></i>
                </button>
                </div>
            </div>
            <div class="flex gap-4 ml-auto pr-4" x-show="swiper.realIndex === 0">
                <div>
                <span class="font-sans text-xs">120mph</span>
                </div>
                <div>
                <span class="font-sans text-xs">Hybrid</span>
                </div>
                <div>
                <span class="font-sans text-xs">450mi</span>
                </div>
            </div>
            <div class="flex gap-4 ml-auto pr-4" x-show="swiper.realIndex === 1">
                <div>
                <span class="font-sans text-xs">160mph</span>
                </div>
                <div>
                <span class="font-sans text-xs">Hybrid</span>
                </div>
                <div>
                <span class="font-sans text-xs">350mi</span>
                </div>
            </div>
            <div class="flex gap-4 ml-auto pr-4" x-show="swiper.realIndex === 2">
                <div>
                <span class="font-sans text-xs">160mph</span>
                </div>
                <div>
                <span class="font-sans text-xs">Hybrid</span>
                </div>
                <div>
                <span class="font-sans text-xs">350mi</span>
                </div>
            </div>

            <div class="flex gap-4 ml-auto pr-4" x-show="swiper.realIndex === 3">
                <div>
                <span class="font-sans text-xs">160mph</span>
                </div>
                <div>
                <span class="font-sans text-xs">Hybrid</span>
                </div>
                <div>
                <span class="font-sans text-xs">350mi</span>
                </div>
            </div>
            <div class="flex gap-4 ml-auto pr-4" x-show="swiper.realIndex === 4">
                <div>
                <span class="font-sans text-xs">160mph</span>
                </div>
                <div>
                <span class="font-sans text-xs">Hybrid</span>
                </div>
                <div>
                <span class="font-sans text-xs">350mi</span>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
</div>
