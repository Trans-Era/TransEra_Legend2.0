<div
  class="
    w-full
    flex
    items-center
    justify-between
    py-4
    px-4
    md:px-6
    border-b border-muted-200
    dark:border-muted-800
  "
>
  <div class="flex items-center gap-2">
    <!--Desktop button-->
    <button
      type="button"
      class="
        h-10
        w-10
        items-center
        justify-center
        hover:bg-muted-100
        dark:hover:bg-muted-800
        transition-colors
        duration-300
      "
      :class="$store.app.isSidebarActive ? 'hidden' : 'hidden lg:flex'"
      @click="$store.app.isSidebarActive = true"
    >
      <i
        class="iconify w-5 h-5 text-muted-600 dark:text-muted-200"
        data-icon="lucide:menu"
      ></i>
    </button>
    <!--Mobile button-->
    <button
      type="button"
      class="
        h-10
        w-10
        flex
        lg:hidden
        items-center
        justify-center
        hover:bg-muted-100
        dark:hover:bg-muted-800
        transition-colors
        duration-300
      "
      @click="$store.app.isSidebarMobileActive = true"
    >
      <i
        class="iconify w-5 h-5 text-muted-600 dark:text-muted-200"
        data-icon="lucide:menu"
      ></i>
    </button>
    <!--Logged account-->
    <img class="h-10 w-10 rounded-full" src="/img/photo/pp.png" alt="" />
    <div class="font-sans leading-tight">
      <span class="text-xs font-light tracking-wider uppercase text-muted-400">
        Logged in as
      </span>
<h4 class="font-sans font-medium text-muted-800 dark:text-white">{{ Auth::user()->name }}</h4>
    </div>
  </div>
  <div class="flex items-center gap-2">
    <div class="h-10 w-10 flex items-center justify-center">
      <!--Dark mode-->
    </div>
  </div>
</div>
