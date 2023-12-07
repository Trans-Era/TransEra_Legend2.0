<div
  class="
    sticky
    top-4
    w-full
    flex
    bg-white
    dark:bg-muted-800
    border border-muted-200
    dark:border-muted-700
    rounded
    divide-x divide-muted-200
    dark:divide-muted-700
    shadow-xl shadow-muted-300/30
    dark:shadow-muted-900/30
    overflow-x-auto
    z-30
  "
>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'all' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'all', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'all' ? 'text-primary-500' : ''"
    >
      <x-vector.logos.bmw />
    </span>
    <span>All</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'audi' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'audi', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'audi' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Audi</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'bmw' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'bmw', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'bmw' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Bmw</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'mercedes' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'mercedes', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'mercedes' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Mercedes</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'landrover' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'landrover', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'landrover' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Land Rover</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'jaguar' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'jaguar', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'jaguar' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Jaguar</span>
  </button>
  <button
    class="
      group
      flex-1 flex
      items-center
      gap-2
      px-5
      py-3
      whitespace-nowrap
      font-sans
      text-muted-800
      dark:text-muted-100
      hover:bg-muted-50
      dark:hover:bg-muted-700
      transition-colors
      duration-300
    "
    :class="activeBrand === 'hyundai' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'hyundai', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'hyundai' ? 'text-primary-500' : ''"
    >
    <x-vector.logos.bmw />
    </span>
    <span>Hyundai</span>
  </button>
</div>
