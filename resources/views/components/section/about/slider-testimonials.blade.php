<section class="w-full py-12 px-4 bg-white dark:bg-muted-900 overflow-hidden">
    <div
      class="
        w-full
        max-w-6xl
        mx-auto
        pb-16
        border-b border-muted-200
        dark:border-muted-800
      "
    >
      <!--Slider-->
      <div
        class="relative swiper"
        x-data="{swiper: null}"
        x-init="swiper = new Swiper($refs.container, {
          loop: true,
          slidesPerView: 4,
          spaceBetween: 0,
          effect: 'coverflowEffect',
          breakpoints: {
            300: {
              slidesPerView: 1,
              spaceBetween: 30,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
          },
        });
    "
      >
        <!--Section title-->
        <div class="w-full flex items-center justify-between space-y-2 py-6">
          <div>
            <h2
              class="
                font-heading font-light
                text-3xl
                md:text-4xl
                text-muted-800
                dark:text-white
              "
            >
              Our Happy Customers
            </h2>
            <!--Subtitle-->
            <p
              class="
                font-sans font-light
                text-lg text-muted-500
                dark:text-muted-400
              "
            >
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
  
          <div class="carousel-controls hidden md:flex">
            <button
              class="
                w-12
                h-12
                flex
                items-center
                justify-center
                border-2 border-transparent
                text-muted-800
                dark:text-muted-100
                hover:border-muted-800
                dark:hover:border-muted-100
                transition-colors
                duration-300
              "
              @click="swiper.slidePrev()"
            >
              <i class="iconify w-5 h-5" data-icon="lucide:arrow-left"></i>
            </button>
  
            <button
              class="
                w-12
                h-12
                flex
                items-center
                justify-center
                border-2 border-transparent
                text-muted-800
                dark:text-muted-100
                hover:border-muted-800
                dark:hover:border-muted-100
                transition-colors
                duration-300
              "
              @click="swiper.slideNext()"
            >
              <i class="iconify w-5 h-5" data-icon="lucide:arrow-right"></i>
            </button>
          </div>
        </div>
        <!--Container-->
        <div class="swiper-container relative" x-ref="container">
          <div class="swiper-wrapper">
            <!--Slide 1-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/1.jpg" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.audi />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Mike Thomson
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">
                  Las Vegas - NV
                </p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 2-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/6.jpg" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.bmw />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Oba Babatunde
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">
                  San Diego - CA
                </p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 3-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/4.png" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                <x-vector.logos.mercedes />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Lakisha Jackson
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">
                  Los Angeles - CA
                </p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 4-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/4.jpg" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.bmw />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Ted Mariopoulos
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">New York - NY</p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 5-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/5.jpg" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.audi />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Anna Lopez
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">Miami - FL</p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 6-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/3.png" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.hyundai />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Daniel Sweiler
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">Pasadena - CA</p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
            <!--Slide 7-->
            <div class="swiper-slide">
              <div class="relative">
                <img src="/img/testimonials/7.jpg" alt="Testimonial" />
                <div
                  class="
                    absolute
                    -bottom-7
                    right-6
                    h-14
                    w-14
                    flex
                    items-center
                    justify-center
                    px-2
                    text-muted-500
                    dark:text-muted-100
                    border-4 border-white
                    dark:border-muted-900
                    bg-muted-100
                    dark:bg-muted-800
                  "
                >
                    <x-vector.logos.hyundai />
                </div>
              </div>
              <div class="mt-4">
                <h3
                  class="
                    font-sans font-medium
                    text-lg text-muted-800
                    dark:text-muted-100
                  "
                >
                  Mark Smith
                </h3>
                <p class="font-sans text-sm text-muted-400 mb-3">Houston - TX</p>
                <p class="font-sans text-sm text-muted-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae
                  diligentissime contra Aristonem dicuntur a Chryippo.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  