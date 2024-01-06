<div class="grid ltablet:grid-cols-2 lg:grid-cols-2 gap-6">
  <!--Grid item-->
  @foreach($cars as $car)
    <div
      x-show="activeBrand === 'all' || activeBrand === 'landrover'"
      class="
        group
        flex flex-col
        rounded-md
        p-8
        bg-white
        dark:bg-muted-900
        border border-muted-200
        dark:border-muted-800
      "
    >
      <div class="flex items-center gap-4 mb-8">
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
        <img src="{{ asset($car->brand->icon) }}" />
        </div>
        <div class="leading-tight">
          <h3
            class="
              font-sans font-semibold
              text-lg text-muted-800
              dark:text-muted-50
            "
          >
          {{ $car->brand->name }} {{ $car->modele->name }}
          </h3>
          <p class="font-sans text-xs text-muted-400">
            {{ $car->type->name }}
          </p>
        </div>
        <div class="ml-auto">
          <span
            class="
              font-sans font-semibold
              text-xl text-muted-800
              dark:text-muted-50
            "
          >
          {{ $car->price }} €
          </span>
        </div>
      </div>
      <div class="h-48 flex items-center">
        <img
          class="object-contain w-full max-w-xs mx-auto"
          src="{{ asset($car->thumbnail) }}"
          alt="Vehicle image"
        />
      </div>
      <div
        class="
          relative
          w-full
          flex
          my-4
          divide-x divide-muted-200
          dark:divide-muted-800
        "
      >
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            px-4
            group-hover:opacity-0
            transition-opacity
            duration-300
          "
        >
          <div class="text-center">
            <span
              class="
                block
                font-sans font-semibold
                text-muted-800
                dark:text-muted-50
              "
            >
              {{ $car->timeAcc }}
              <small class="font-normal text-muted-500 dark:text-muted-400">
                s
              </small>
            </span>
            <small class="block font-sans text-muted-500 dark:text-muted-400">
              0-100 km/h
            </small>
          </div>
        </div>
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            px-4
            group-hover:opacity-0
            transition-opacity
            duration-300
          "
        >
          <div class="text-center">
            <span
              class="
                block
                font-sans font-semibold
                text-muted-800
                dark:text-muted-50
              "
            >
              {{ $car->couple }}
              <small class="font-normal text-muted-500 dark:text-muted-400">
                nm
              </small>
            </span>
            <small class="block font-sans text-muted-500 dark:text-muted-400">
              Couple
            </small>
          </div>
        </div>
        <div
          class="
            flex-1 flex
            items-center
            justify-center
            px-4
            group-hover:opacity-0
            transition-opacity
            duration-300
          "
        >
          <div class="text-center">
            <span
              class="
                block
                font-sans font-semibold
                text-muted-800
                dark:text-muted-50
              "
            >
              {{ $car->power }}
              <small class="font-normal text-muted-500 dark:text-muted-400">
                ch
              </small>
            </span>
            <small class="block font-sans text-muted-500 dark:text-muted-400">
              Puissance
            </small>
          </div>
        </div>
        <div
          class="
            absolute
            top-0
            inset-x-0
            opacity-0
            group-hover:opacity-100
            transition-opacity
            duration-300
            z-20
          "
        >
          <a
            href="{{ route('cars.show', $car->slug) }}"
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
              border-2 border-muted-800
              hover:bg-muted-800
              text-muted-800
              hover:text-white
              dark:border-muted-700 dark:hover:bg-muted-700 dark:text-muted-100
              h-10
              px-5
              py-3
              text-sm
              tw-accessibility
              transition-all
              duration-300
              pointer-events-none
              group-hover:pointer-events-auto
            "
          >
            Voir plus
          </a>
        </div>
      </div>
      <div class="grid grid-cols-2 mt-4">
        <div>
          <ul
            class="font-sans text-xs space-y-2 text-muted-500 dark:text-muted-400"
          >
            <li class="flex items-center gap-2">
              <span>Midnight Silver Metallic Paint</span>
            </li>
            <li class="flex items-center gap-2">
              <span>20’’ Überturbine Wheels</span>
            </li>
            <li class="flex items-center gap-2">
              <span>All Black Premium Interior</span>
            </li>
          </ul>
        </div>
        <div>
          <ul
            class="font-sans text-xs space-y-2 text-muted-500 dark:text-muted-400"
          >
            <li class="flex items-center gap-2">
              <span>Performance Upgrade</span>
            </li>
            <li class="flex items-center gap-2">
              <span>Carbon Fiber Spoiler</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    @endforeach
</div>