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
      <img src="{{ asset('img/logo/logoWhite.webp') }}" />
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
    :class="activeBrand === 'Ford' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'Ford', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'Ford' ? 'text-primary-500' : ''"
    >
      <img src="{{ asset(app\Http\Controllers\Car\IndexController::getBrandIcon(1)) }}" />
    </span>
    <span>Ford</span>
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
    :class="activeBrand === 'Chevrolet' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'Chevrolet', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'Chevrolet' ? 'text-primary-500' : ''"
    >
      <img src="{{ asset(app\Http\Controllers\Car\IndexController::getBrandIcon(2)) }}" />
    </span>
    <span>Chevrolet</span>
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
    :class="activeBrand === 'Pontiac' ? 'bg-muted-50 dark:bg-muted-700' : ''"
    @click="activeBrand = 'Pontiac', resetScroll()"
  >
    <span
      class="block h-10 w-10 group-hover:text-primary-500"
      :class="activeBrand === 'Pontiac' ? 'text-primary-500' : ''"
    >
    <img src="{{ asset(app\Http\Controllers\Car\IndexController::getBrandIcon(3)) }}" />
    </span>
    <span>Pontiac</span>
  </button>
</div>
