<section
  class="
    relative
    w-full
    ptablet:max-h-[1100px]
    bg-muted-100
    dark:bg-muted-1000
    overflow-hidden
  "
>
  <div
    class="
      relative
      min-h-screen
      w-full
      max-w-7xl
      mx-auto
      flex
      items-center
      z-10
    "
  >
    <div class="w-full px-4">
      <div class="grid grid-cols-12">
        <div class="col-span-5 h-full flex items-center">
          <div class="w-full">
            <h1
              class="
                font-sans font-light
                text-5xl
                ltablet:text-6xl
                lg:text-7xl
                leading-none
                text-muted-800
                dark:text-white
              "
            >
              Trans Era
            </h1>
            <p
              class="
                font-sans
                text-lg text-muted-500
                dark:text-muted-400
                max-w-xl
                mx-auto
                mt-2
                mb-4
              "
            >
              Trans Era Legend est une entreprise de location de voitures à forte personnalité Notre objectif est de transmettre un message à travers les sensations de conduite, rendant ainsi accessibles les 
              souvenirs de notre enfance et mettant à la portée de tous des véhicules emblématiques.
            </p>
            <div class="flex flex-col md:flex-row items-center gap-2">
              <a
                href="{{ route('cars.index') }}"
                class="
                  relative
                  font-sans font-normal
                  inline-flex
                  items-center
                  justify-center
                  leading-5
                  no-underline
                  w-full
                  md:w-auto
                  min-w-[130px]
                  space-x-1
                  rounded
                  text-white
                  bg-muted-800
                  dark:bg-primary-600
                  h-12
                  px-5
                  py-3
                  text-base
                  hover:bg-muted-700
                  dark:hover:bg-primary-500
                  hover:shadow-xl hover:shadow-muted-300/20
                  dark:hover:shadow-primary-600/20
                  tw-accessibility
                  transition-all
                  duration-300
                "
              >
                Notre flotte
              </a>
              <a
                href="{{ route('contact.index') }}"
                class="
                  relative
                  font-sans font-normal
                  inline-flex
                  items-center
                  justify-center
                  leading-5
                  no-underline
                  w-full
                  md:w-auto
                  min-w-[130px]
                  space-x-1
                  rounded
                  text-slate-700
                  bg-white
                  border
                  dark:text-white dark:bg-slate-700 dark:border-slate-600
                  h-12
                  px-5
                  py-3
                  text-base
                  hover:bg-slate-50
                  tw-accessibility
                  transition-all
                  duration-300
                  scroll-link
                "
              >
                Nous contacter
              </a>
            </div>
          </div>
        </div>
        <!--Column-->
        <div class="relative col-span-7">
          <!--Hero image-->
          <img
            class="relative max-w-md mx-auto z-20"
            src="/img/photo/600x600/4.webp"
            alt="Hero image"
          />
          <!--Overlay-->
          <div
            class="
              absolute
              top-1/2
              left-1/2
              -translate-x-1/2 -translate-y-1/2
              w-72
              h-72
              rounded-full
              bg-muted-200
              dark:bg-muted-900
              z-10
              scale-150
            "
          ></div>
        </div>
      </div>
      <!--Hero logos-->
      <!--<div
        class="
          absolute
          bottom-8
          inset-x-0
          hidden
          w-full
          max-w-sm
          mx-auto
          md:flex
          items-center
          justify-center
          gap-x-6
          text-muted-500
          dark:text-muted-100/50
        "
      >
        @foreach($brands as $brand)
          <div class="flex-1">
            <div class="flex items-center justify-center px-2">
              <img src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}" />
            </div>
          </div>
        @endforeach
      </div>-->
    </div>
  </div>
</section>