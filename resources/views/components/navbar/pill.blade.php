<div
  class="
    absolute
    top-4
    inset-x-0
    w-full
    max-w-xs
    rounded
    mx-auto
    p-2
    bg-white
    dark:bg-muted-800
    shadow-xl shadow-muted-400/10
    dark:shadow-muted-800/10
    z-10
  "
>
  <div
    class="
      w-full
      flex
      font-medium
      items-center
      justify-between
      gap-4
      text-muted-900
      dark:text-muted-100
    "
  >
    <!--Home link-->
    <a
      href="{{ url('/') }}"
      class="
        flex
        items-center
        justify-center
        h-14
        w-14
        rounded
        text-muted-400
        hover:text-primary-500
        border border-muted-200
        dark:border-muted-700
        hover:border-primary-500
        dark:hover:border-primary-500
        hover:shadow-xl
        shadow-muted-400/10
        dark:hover:shadow-muted-800/10
        transition-all
        duration-300
      "
    >
      <i class="iconify w-6 h-6" data-icon="ph:house-duotone"></i>
    </a>
    <!--Site logo-->
    <div
      class="
        h-14
        w-14
        group-hover:text-primary-500
        transition-colors
        duration-300
      "
    >
      <x-vector.logos.logo/>
    </div>
    <!--Theme toggler-->
    <div
      class="
        flex
        items-center
        justify-center
        h-14
        w-14
        rounded
        bg-muted-100
        dark:bg-muted-700
      "
    >
      <x-theme.toggler-base />
    </div>
  </div>
</div>
