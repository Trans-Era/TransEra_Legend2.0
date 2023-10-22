<section class="w-full py-12 px-4 bg-white dark:bg-muted-900 overflow-hidden">
  <div class="w-full max-w-7xl mx-auto">
    <!--Section title-->
    <div class="w-full max-w-lg mx-auto text-center space-y-4 py-6">
      <!--Badge-->
      <span
        class="
          inline-block
          font-sans
          text-xs
          py-1.5
          px-3
          m-1 rounded-full
          bg-primary-100
          text-primary-500
          dark:bg-primary-500 dark:text-white
        "
      >
        Our Catalog
      </span>
      <!--Title-->
      <h2
        class="
          font-heading font-light
          text-4xl
          md:text-5xl
          text-muted-800
          dark:text-white
        "
      >
        Inventory
      </h2>
      <!--Subtitle-->
      <p
        class="font-sans font-light text-lg text-muted-500 dark:text-muted-400"
      >
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tum Torquatus:
        Prorsus, inquit, assentior.
      </p>
    </div>

    <!--Grid-->
    <div
      class="
        relative
        w-full
        max-w-6xl
        mx-auto
        grid
        ptablet:grid-cols-2
        ltablet:grid-cols-3
        lg:grid-cols-3
        gap-16
        ptablet:gap-14
        ltablet:gap-14
        lg:gap-20
        py-6
      "
    >
      <!--Grid item-->
      @foreach ($cars as $car)
      <div class="relative group">
        <div class="flex items-center gap-4 mb-4">
          <div
            class="
              h-10
              w-10
              min-w-[2.5rem]
              flex
              items-center
              justify-center
              text-muted-500
              dark:text-muted-200
            "
          >
            icon
          </div>
          <div class="leading-tight">
            <h3
              class="
                font-sans font-semibold
                text-lg text-muted-800
                dark:text-muted-50
              "
            >
              Audi RS-8
            </h3>
            <p class="font-sans text-xs text-muted-400">
              Available for local delivery
            </p>
          </div>
          <div class="ml-auto">
            <span
              class="
                font-sans font-semibold
                text-lg text-muted-800
                dark:text-muted-50
              "
            >
              $87,000
            </span>
          </div>
        </div>
        <div class="relative h-48 p-4 bg-muted-100 dark:bg-muted-800/80 group-hover:bg-rose-500 transition-colors duration-300">
          <img
            class="absolute -bottom-4 left-6 object-contain w-full"
            src="{{ asset($car->thumbnail) }}"
            alt="Vehicle image"
          />
        </div>
        <div
          class="
            w-full
            flex
            mt-6
            mb-4
            divide-x divide-muted-200
            dark:divide-muted-800
          "
        >
          <div class="flex-1 flex items-center justify-center px-4">
            <div class="text-center">
              <span
                class="
                  block
                  font-sans font-semibold
                  text-muted-800
                  dark:text-muted-50
                "
              >
                1.4
                <small class="font-normal text-muted-500 dark:text-muted-400">
                  s
                </small>
              </span>
              <small class="block font-sans text-muted-500 dark:text-muted-400">
                0-60mph
              </small>
            </div>
          </div>
          <div class="flex-1 flex items-center justify-center px-4">
            <div class="text-center">
              <span
                class="
                  block
                  font-sans font-semibold
                  text-muted-800
                  dark:text-muted-50
                "
              >
                165
                <small class="font-normal text-muted-500 dark:text-muted-400">
                  mph
                </small>
              </span>
              <small class="block font-sans text-muted-500 dark:text-muted-400">
                Top speed
              </small>
            </div>
          </div>
          <div class="flex-1 flex items-center justify-center px-4">
            <div class="text-center">
              <span
                class="
                  block
                  font-sans font-semibold
                  text-muted-800
                  dark:text-muted-50
                "
              >
                279
                <small class="font-normal text-muted-500 dark:text-muted-400">
                  mi
                </small>
              </span>
              <small class="block font-sans text-muted-500 dark:text-muted-400">
                Autonomy
              </small>
            </div>
          </div>
        </div>
        <a
          href="/vehicle.html"
          class="
            relative
            font-sans font-normal
            inline-flex
            items-center
            justify-center
            leading-5
            no-underline
            w-full
            space-x-1
            bg-muted-100
            hover:bg-muted-800
            text-muted-500
            hover:text-white
            dark:bg-muted-800
            dark:hover:bg-muted-700
            dark:text-muted-100
            h-10
            px-5
            py-3
            text-sm
            tw-accessibility
            transition-all
            duration-300
          "
        >
          View Details
        </a>
      </div>
    @endforeach
    </div>
    <!--CTA-->
    <div class="flex items-center justify-center py-10">
      <a
        href="/inventory.html"
        class="
          relative
          font-sans font-normal
          inline-flex
          items-center
          justify-center
          leading-5
          no-underline
          min-w-[240px]
          space-x-1
          text-white
          bg-muted-800
          dark:bg-muted-900
          h-14
          px-5
          py-3
          text-base
          hover:bg-muted-700
          dark:hover:bg-muted-1000
          tw-accessibility
          transition-all
          duration-300
        "
      >
        Explore Inventory
      </a>
    </div>
  </div>
</section>
