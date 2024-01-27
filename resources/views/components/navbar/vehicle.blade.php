<div
  x-data="navbar()"
  x-init="initTheme()"
  x-on:scroll.window="scroll()"
  class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
  :class="[
    scrolled ? '-translate-y-16 xs:translate-y-[-112px]' : ''
  ]"
>
  <div
    class="
      w-full
      transition-colors
      duration-300
      border-b border-muted-200
      dark:border-muted-800
    "
    :class="[
      scrolled ? 'bg-white dark:bg-muted-900' : ''
    ]"
  >
    <div class="w-full max-w-7xl mx-auto flex flex-col md:flex-row md:items-center py-2 px-4">
      <div class="flex items-center gap-2 text-muted-500 dark:text-white">
        <div class="h-12 w-12">
          <img src="{{ $car->brand->icon }}" />
        </div>
        <span class="font-sans font-light text-xl">{{ $car->brand->name }}</span>
      </div>
      <div class="flex items-center gap-4 md:ml-auto">
        <div class="font-sans text-right">
          <span class="block text-xs text-muted-400">Starting from</span>
          <span
            class="
              block
              font-semibold
              text-xl text-muted-800
              dark:text-muted-100
            "
          >
          {{ $car->price }} €
          </span>
        </div>
        <a
          href="#"
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
            text-white
            bg-muted-800
            dark:bg-muted-900
            h-12
            px-5
            py-3
            text-base
            hover:bg-muted-700
            dark:hover:bg-muted-1000
            hover:shadow-xl hover:shadow-muted-300/20
            dark:hover:shadow-muted-900/20
            tw-accessibility
            transition-all
            duration-300
          "
        >
          Nous contacter
        </a>
      </div>
    </div>
  </div>
  <div
    class="
      w-full
      transition-colors
      duration-300
      border-b border-muted-200
      dark:border-muted-800
    "
    :class="[
      scrolled ? 'bg-white dark:bg-muted-900' : ''
    ]"
  >
    <div class="w-full max-w-7xl mx-auto flex items-center px-4">
      <div class="hidden md:flex gap-6 font-sans">
        <a
          href="#vehicle-overview"
          class="scroll-link flex items-center justify-center py-4 border-b-2"
          :class="activeSection === 'overview' ? 'border-primary-500 text-muted-800 dark:text-muted-100' : 'border-transparent text-muted-400 dark:text-muted-500'"
          @click="activeSection = 'overview'"
        >
          Aperçu
        </a>
        <a
          href="#vehicle-design"
          class="scroll-link flex items-center justify-center py-4 border-b-2"
          :class="activeSection === 'design' ? 'border-primary-500 text-muted-800 dark:text-muted-100' : 'border-transparent text-muted-400 dark:text-muted-500'"
          @click="activeSection = 'design'"
        >
          Design
        </a>
        <a
          href="#vehicle-interior"
          class="scroll-link flex items-center justify-center py-4 border-b-2"
          :class="activeSection === 'interior' ? 'border-primary-500 text-muted-800 dark:text-muted-100' : 'border-transparent text-muted-400 dark:text-muted-500'"
          @click="activeSection = 'interior'"
        >
          Intérieur
        </a>
      </div>
      <div class="flex items-center md:ml-auto xs:w-full">
        <a
          href="{{ route('cars.index') }}"
          class="
            group
            flex
            items-center
            gap-2
            pr-4
            border-r border-muted-300
            dark:border-muted-800
            font-sans
            text-sm text-muted-500
            hover:text-primary-500
          "
        >
          <i
            class="
              iconify
              w-4
              h-4
              group-hover:-translate-x-1
              transition-transform
              duration-300
            "
            data-icon="lucide:arrow-left"
          ></i>
          <span>Retour à l'inventaire</span>
        </a>
        <div class="h-10 w-10 flex items-center justify-center ml-auto md:ml-4">
          <!--Dark mode-->
          <x-theme.toggler-base />
        </div>
      </div>
    </div>
  </div>
</div>
