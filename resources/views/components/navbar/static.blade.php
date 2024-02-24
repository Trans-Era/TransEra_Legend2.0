<nav class="fixed w-full z-50 transition-all duration-300 ease-in-out flex flex-col flex-shrink-0 divide-y divide-white/10" x-data="navbar()" x-init="initTheme()" x-on:scroll.window="scroll()" x-on:mouseleave="megamenuOpened = false, openedMegamenu = ''" x-bind:class="{
            'bg-muted-900 dark:bg-muted-800 divide-muted-800 dark:divide-muted-700 shadow-lg dark:shadow-muted-800/10': scrolled || megamenuOpened,
            'divide-white/10': !scrolled || !megamenuOpened,
            'bg-muted-900 dark:bg-muted-800 divide-muted-800 dark:divide-muted-700': mobileOpen,
            '': !mobileOpen
}">
  <div class="w-full">
    <div class="
        w-full
        max-w-7xl
        mx-auto
        flex flex-wrap
        py-2
        px-5
        flex-row
        items-center
        sm:justify-between
      ">
      <div class="flex justify-between items-center w-full lg:w-1/5">
        <a href="{{ url('/') }}" class="group flex font-sans font-light items-center gap-4 text-white">
          <div class="
              h-14
              w-14
              group-hover:text-primary-500
              transition-colors
              duration-300
            ">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background: new 0 0 500 500" xml:space="preserve">
              <path class="fill-current" d="M393.5,360.6c0.1,0,0.3,0,0.4,0c1.3-0.1,2.6-0.2,3.9-0.3c0.2,0,0.4,0,0.6-0.1c1.2-0.1,2.4-0.3,3.7-0.4
              c0.1,0,0.1,0,0.2,0c56-7.8,97.7-53.1,97.7-109.7c0-62.2-50.4-110.8-114.8-110.8c-25,0-46.1,6-65.6,16.5l0,0l0,0l0,0
              c-1.1,0.6-2.2,1.2-3.3,1.8l0,0c0,0-0.1,0-0.1,0.1l0,0c-1,0.6-2.1,1.2-3.1,1.8l0,0c-0.1,0-0.1,0.1-0.2,0.1c-1,0.6-2.1,1.2-3.1,1.9
              c-0.1,0.1-0.2,0.1-0.3,0.2l0,0c-1,0.6-2,1.2-2.9,1.9l0,0l-0.1,0.1c-1,0.7-2.1,1.4-3.1,2.1l0,0c-0.1,0-0.1,0.1-0.2,0.1
              c-1,0.7-2,1.4-3,2.1l0,0c-0.1,0.1-0.2,0.1-0.2,0.2c-1.1,0.8-2.3,1.6-3.4,2.5c-0.1,0-0.1,0.1-0.2,0.1l0,0c-0.9,0.6-1.7,1.3-2.6,1.9
              l0,0c-0.2,0.2-0.5,0.4-0.7,0.5l0,0c-3,2.3-5.9,4.7-8.9,7.1l0,0c-0.4,0.3-0.7,0.6-1,0.9l0,0c-0.7,0.6-1.4,1.2-2.1,1.8l0,0
              c-0.2,0.2-0.4,0.3-0.6,0.5c-1.2,1-2.4,2.1-3.7,3.2c-0.1,0.1-0.3,0.3-0.4,0.4l0,0c-0.6,0.5-1.1,1-1.7,1.5l0,0
              c-0.6,0.6-1.2,1.1-1.8,1.7l0,0c-0.5,0.4-0.9,0.8-1.4,1.2l0,0c-1.1,1-2.2,2-3.3,3l-7.4,6.9l21,21c4.8,4.8,11.2,7.4,18,7.4
              c6.1,0,11.9-2.2,16.6-6.1c25.4-21.7,45.4-30.6,69-30.6c3.2,0,6.4,0.2,9.4,0.6c12.3,1.7,23.6,6.6,32.4,14.4c0.7,0.6,1.5,1.3,2.2,2
              s1.3,1.3,2,2c0.2,0.2,0.3,0.4,0.5,0.6c0.5,0.5,0.9,1,1.3,1.5c0.3,0.3,0.5,0.7,0.8,1c0.3,0.4,0.6,0.8,0.9,1.2c0.3,0.5,0.7,0.9,1,1.4
              c0.2,0.3,0.4,0.6,0.6,0.8c0.4,0.6,0.8,1.1,1.1,1.7c0.1,0.2,0.3,0.4,0.4,0.6c0.4,0.6,0.8,1.3,1.1,2c0.1,0.1,0.2,0.3,0.2,0.4
              c0.4,0.7,0.8,1.4,1.1,2.2c0,0.1,0.1,0.2,0.1,0.3c0.4,0.8,0.7,1.6,1.1,2.3c0,0.1,0,0.1,0.1,0.2c0.4,0.8,0.7,1.7,1,2.5l0,0
              c2.2,6,3.3,12.4,3.4,19.1c0,0.1,0,0.1,0,0.2c0,15.2-6,29.4-16.9,40c-11.3,11-27,17-44.1,17c-35.7,0-60.9-21.2-96.3-56.2l0,0l-32-32
              c-39.1-39.1-79.6-79.6-142-79.6c-1.3,0-2.6,0-3.9,0.1c-0.3,0-0.7,0-1,0c-1.2,0-2.3,0.1-3.5,0.2c-0.1,0-0.3,0-0.4,0
              c-1.3,0.1-2.6,0.2-3.9,0.3c-0.2,0-0.4,0-0.6,0.1c-1.2,0.1-2.5,0.3-3.7,0.4c-0.1,0-0.1,0-0.2,0C41.7,148.1,0,193.5,0,250
              c0,39.3,20.2,73.2,51.3,92.9l0,0c0.7,0.5,1.5,0.9,2.2,1.4c0,0,0.1,0,0.1,0.1c0.7,0.4,1.4,0.8,2.2,1.3c0.1,0,0.1,0.1,0.2,0.1
              c0.7,0.4,1.4,0.8,2.1,1.2c0.1,0.1,0.2,0.1,0.3,0.2c0.7,0.4,1.4,0.7,2,1.1c0.1,0.1,0.3,0.1,0.4,0.2c0.7,0.3,1.3,0.7,2,1
              c0.2,0.1,0.3,0.2,0.5,0.2c0.6,0.3,1.3,0.6,1.9,0.9c0.2,0.1,0.4,0.2,0.6,0.3c0.6,0.3,1.3,0.6,1.9,0.8c0.2,0.1,0.4,0.2,0.7,0.3
              c0.6,0.3,1.2,0.5,1.8,0.8c0.2,0.1,0.5,0.2,0.7,0.3c0.6,0.2,1.2,0.5,1.8,0.7c0.3,0.1,0.6,0.2,0.8,0.3c0.6,0.2,1.2,0.4,1.8,0.6
              c0.3,0.1,0.6,0.2,0.9,0.3c0.6,0.2,1.1,0.4,1.7,0.6c0.3,0.1,0.7,0.2,1,0.3c0.6,0.2,1.1,0.3,1.7,0.5c0.3,0.1,0.7,0.2,1,0.3
              c0.5,0.2,1.1,0.3,1.6,0.5c0.4,0.1,0.7,0.2,1.1,0.3c0.5,0.1,1.1,0.3,1.6,0.4c0.4,0.1,0.8,0.2,1.2,0.3c0.5,0.1,1,0.2,1.6,0.4
              c0.4,0.1,0.8,0.2,1.2,0.3c0.5,0.1,1,0.2,1.5,0.3c0.4,0.1,0.9,0.2,1.3,0.2c0.5,0.1,1,0.2,1.5,0.3c0.5,0.1,0.9,0.1,1.4,0.2
              s1,0.2,1.5,0.2c0.5,0.1,1,0.1,1.4,0.2c0.5,0.1,0.9,0.1,1.4,0.2s1,0.1,1.5,0.2c0.5,0,0.9,0.1,1.4,0.1c0.5,0.1,1.1,0.1,1.6,0.1
              c0.4,0,0.9,0.1,1.3,0.1c0.6,0,1.2,0.1,1.7,0.1c0.4,0,0.8,0.1,1.2,0.1c0.6,0,1.3,0,1.9,0.1c0.3,0,0.7,0,1,0c1,0,2,0,3,0
              c5.9,0,12.1-0.3,18.6-1.1c19.2-2.4,41.8-9.8,69.3-29.8c0.4-0.3,0.9-0.6,1.3-0.9c0.7-0.5,1.3-1,2-1.5c0.6-0.4,1.2-0.9,1.8-1.4
              c0.6-0.4,1.1-0.9,1.7-1.3c1.1-0.9,2.3-1.8,3.4-2.7c0.1-0.1,0.3-0.2,0.4-0.3c0.3-0.2,0.6-0.5,0.9-0.7c0.9-0.7,1.8-1.5,2.7-2.2
              c0.4-0.3,0.8-0.7,1.2-1c1.3-1.1,2.6-2.2,3.8-3.3c4.6-4,7.3-9.8,7.5-15.8c0.2-6.1-2.2-12-6.5-16.3l-44.1-44.1
              c-6.7-6.7-15.6-10.4-25.1-10.4H92.3v28.1c0,14.2,11.6,25.8,25.8,25.8h28.1l7.8,7.8l0,0l5,5c-14.6,8.5-28.6,12.4-44.1,12.4
              c-17.1,0-32.7-6-44.1-17c-0.7-0.6-1.3-1.3-1.9-1.9c-0.2-0.2-0.4-0.5-0.6-0.7c-0.4-0.4-0.8-0.9-1.2-1.3c-0.3-0.3-0.5-0.6-0.7-0.9
              c-0.3-0.4-0.6-0.8-0.9-1.2c-0.3-0.3-0.5-0.7-0.8-1c-0.3-0.4-0.5-0.7-0.8-1.1s-0.5-0.8-0.8-1.2c-0.2-0.3-0.4-0.7-0.7-1
              c-0.3-0.4-0.5-0.8-0.8-1.3c-0.2-0.3-0.4-0.6-0.6-0.9c-0.3-0.5-0.5-0.9-0.8-1.4c-0.1-0.3-0.3-0.6-0.4-0.9c-0.3-0.5-0.5-1-0.8-1.5
              c-0.1-0.2-0.2-0.5-0.3-0.7c-0.3-0.6-0.5-1.2-0.8-1.7c-0.1-0.1-0.1-0.3-0.2-0.5c-2.1-5.4-3.4-11.1-3.8-17l0,0
              c-0.1-1.2-0.1-2.5-0.1-3.7c0-15.2,6-29.4,16.9-40c11.3-11,27-17,44.1-17c35.9,0,61.2,21.5,97.1,57l0,0l0,0l0,0l12.5,12.5l18.7,18.7
              c25.7,25.7,51.9,51.9,84.6,66.9c4.7,2.1,9.5,4.1,14.4,5.7c1.6,0.6,3.3,1.1,5,1.6c0.8,0.2,1.7,0.5,2.5,0.7c1.7,0.5,3.4,0.9,5.1,1.3
              c9.5,2.2,19.6,3.4,30.4,3.4c1.3,0,2.6,0,3.9-0.1c0.3,0,0.7,0,1,0C391.2,360.7,392.4,360.6,393.5,360.6z"></path>
            </svg>
          </div>
          <span class="text-2xl">TransEra Legend</span>
        </a>

        <!-- Hamburger -->
        <button class="
            flex
            relative
            justify-center
            items-center
            ml-auto
            w-10
            h-10
            focus:outline-none
            lg:hidden
            scale-90
          " @click="mobileOpen = !mobileOpen">
          <div class="block top-1/2 left-6 w-4 -translate-x-1/2 -translate-y-1/2">
            <span class="block absolute w-7 h-0.5 text-white bg-current transition duration-500 ease-in-out -translate-y-2" :class="mobileOpen ? 'rotate-45' : '-translate-y-2'"></span>
            <span class="block absolute w-5 h-0.5 text-white bg-current transition duration-500 ease-in-out" :class="mobileOpen ? 'opacity-0' : ''"></span>
            <span class="block absolute w-7 h-0.5 text-white bg-current transition duration-500 ease-in-out translate-y-2" :class="mobileOpen ? '-rotate-45' : 'translate-y-2'"></span>
          </div>
        </button>
      </div>
      <div class="hidden text-center lg:text-left lg:flex flex-grow" :class="{
          'block': mobileOpen,
          'hidden': !mobileOpen
      }">
        <ul class="
            flex flex-col
            mt-3
            mb-1
            lg:flex-row lg:mx-auto lg:mt-0 lg:mb-0 lg:gap-x-4
          ">
          <li class="relative" x-on:mouseover="megamenuOpened = true, openedMegamenu = 'megamenu-1'">
            <button type="button" class="group relative inline-flex items-center gap-1 text-base font-sans font-light py-2 md:mx-2 tw-accessibility text-white hover:text-primary-500 z-50" :class="[
              megamenuOpened ? 'z-40' : 'z-50',
            ]">
              <span>Vehicles</span>
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" :class="[
                openedMegamenu === 'megamenu-1' &amp;&amp; megamenuOpened ? 'rotate-180' : '',
              ]" data-icon="lucide:chevron-down" class="iconify w-5 h-5 text-white group-hover:text-primary-500 transition-transform duration-300 iconify--lucide"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9l6 6l6-6"></path></svg>
            </button>

            <!--Megamenu-->
            <div class="fixed lg:absolute top-0 lg:top-14 inset-x-0 lg:left-0 w-full lg:w-[540px] h-screen lg:h-auto pt-2 lg:-translate-x-1/4 transition-all duration-300 opacity-0 translate-y-1 pointer-events-none z-0" x-bind:class="{
                'opacity-100 translate-y-0 z-50': openedMegamenu === 'megamenu-1',
                'opacity-0 translate-y-1 pointer-events-none z-0': openedMegamenu !== 'megamenu-1'
              }">
              <div class="
                  relative
                  w-full
                  px-3
                  pb-3
                  pt-12
                  lg:p-3
                  bg-white
                  dark:bg-muted-800
                  border border-muted-200
                  dark:border-muted-700
                  shadow-2xl shadow-muted-500/20
                  dark:shadow-muted-800/20
                ">
                <!--Close button-->
                <button type="button" class="
                    absolute
                    top-2
                    right-2
                    h-12
                    w-12
                    flex
                    lg:hidden
                    items-center
                    justify-center
                    text-muted-600
                    dark:text-muted-200
                  " @click="megamenuOpened = false, openedMegamenu = ''">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="lucide:x" class="iconify w-6 h-6 iconify--lucide"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path></svg>
                </button>

                <!--Grid-->
                <div class="
                    grid
                    md:grid-cols-2
                    gap-1
                    md:gap-2
                    text-left
                    overflow-y-auto
                    slimscroll
                    ptablet:pb-10
                    ltablet:pb-10
                  ">
                  <!--Grid item-->
                  @foreach($types as $type)
                  <a href="{{ url('/cars') }}" class="
                      relative
                      flex
                      gap-4
                      p-4
                      hover:bg-muted-100
                      dark:hover:bg-muted-900
                      z-10
                      transition-colors
                      duration-300
                    ">
                    <div class="w-full max-w-[60px] my-2 text-muted-500">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.9 25.5" class="w-full fill-current">
                        <path d="M12.559 14.698c-3.01 0-5.401 2.391-5.401 5.401S9.549 25.5 12.559 25.5s5.401-2.391 5.401-5.401c-.089-3.01-2.479-5.401-5.401-5.401zm0 8.766c-1.859 0-3.453-1.505-3.453-3.453 0-1.859 1.505-3.453 3.453-3.453s3.453 1.505 3.453 3.453c-.088 1.947-1.593 3.453-3.453 3.453z"></path>
                        <circle cx="12.559" cy="20.099" r="2.479"></circle>
                        <path d="M76.66 13.193l-.885-3.984.443-1.505-7.083-1.151S58.333 1.152 56.209.887C49.215.002 40.361-.353 34.163.976c0 0-2.922 1.062-11.156 6.817 0 0-13.458.885-18.416 2.745l-2.036.797-2.125 3.01.177 2.125-.62.708s.443 3.896.354 3.896l5.666.974h.177a7.38 7.38 0 01-.266-1.948c0-3.63 3.01-6.64 6.64-6.64s6.64 3.01 6.64 6.64c0 .708-.089 1.328-.266 1.948h37.806a6.911 6.911 0 01-.266-1.948c0-3.63 3.01-6.64 6.64-6.64s6.64 3.01 6.64 6.64c0 .443 0 .797-.089 1.151h.266l7.526-1.24.443-5.755c.002 0-.529-.443-1.238-1.063zM5.034 14.521l-3.01 1.151s.62-2.125 2.036-3.01c.796-.443 3.541-1.062 3.541-1.062l-2.567 2.921zm57.992-5.578c-6.64.708-14.874.531-30.191 1.328-5.578.266-10.005.443-10.713.531-3.01.266-9.031.354-10.89.62 2.302-.885 7.88-1.417 12.395-1.594 5.047-3.719 9.562-6.552 10.89-6.906 1.417-.443 4.515-1.062 8.677-.974l-.62 7.083c.885 0 2.568-.089 2.656-.089l.62-6.817c2.479.089 7.968.354 10.447.885l-.443 5.578c.266 0 1.417 0 1.859-.089l.443-5.047c4.692 2.125 7.614 5.312 7.614 5.312 0-.086-1.062.002-2.744.179z"></path>
                        <path d="M63.026 14.698c-3.01 0-5.401 2.391-5.401 5.401s2.391 5.401 5.401 5.401 5.401-2.391 5.401-5.401-2.391-5.401-5.401-5.401zm0 8.766c-1.859 0-3.453-1.505-3.453-3.453 0-1.859 1.505-3.453 3.453-3.453 1.859 0 3.453 1.505 3.453 3.453 0 1.947-1.594 3.453-3.453 3.453z"></path>
                        <circle cx="63.026" cy="20.099" r="2.479"></circle>
                      </svg>
                    </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        {{ $type->name }}
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        {{ $type->description }}
                      </p>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </li>
          <li class="relative" x-on:mouseover="megamenuOpened = true, openedMegamenu = 'megamenu-2'">
            <button type="button" class="group relative inline-flex items-center gap-1 text-base font-sans font-light py-2 md:mx-2 tw-accessibility text-white hover:text-primary-500 z-50" :class="[
              megamenuOpened ? 'z-40' : 'z-50',
            ]">
              <span>Brands</span>
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" :class="[
                openedMegamenu === 'megamenu-2' &amp;&amp; megamenuOpened ? 'rotate-180' : '',
              ]" data-icon="lucide:chevron-down" class="iconify w-5 h-5 text-white group-hover:text-primary-500 transition-transform duration-300 iconify--lucide"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9l6 6l6-6"></path></svg>
            </button>
            <!--Megamenu-->
            <div class="fixed lg:absolute top-0 lg:top-14 inset-x-0 lg:left-0 w-full lg:w-[540px] h-screen lg:h-auto pt-2 lg:-translate-x-1/4 transition-all duration-300 opacity-0 translate-y-1 pointer-events-none z-0" x-bind:class="{
                'opacity-100 translate-y-0 z-50': openedMegamenu === 'megamenu-2',
                'opacity-0 translate-y-1 pointer-events-none z-0': openedMegamenu !== 'megamenu-2'
              }">
              <div class="
                  relative
                  w-full
                  px-3
                  pb-3
                  pt-12
                  lg:p-3
                  bg-white
                  dark:bg-muted-800
                  border border-muted-200
                  dark:border-muted-700
                  shadow-2xl shadow-muted-500/20
                  dark:shadow-muted-800/20
                ">
                <!--Close button-->
                <button type="button" class="
                    absolute
                    top-2
                    right-2
                    h-12
                    w-12
                    flex
                    lg:hidden
                    items-center
                    justify-center
                    text-muted-600
                    dark:text-muted-200
                  " @click="megamenuOpened = false, openedMegamenu = ''">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="lucide:x" class="iconify w-6 h-6 iconify--lucide"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 6L6 18M6 6l12 12"></path></svg>
                </button>

                <!--Grid-->
                <div class="
                    grid
                    md:grid-cols-2
                    gap-1
                    md:gap-2
                    text-left
                    overflow-y-auto
                    slimscroll
                    ptablet:pb-10
                    ltablet:pb-10
                  ">
                  @foreach($brands as $brand)
                  <!--Grid item-->
                  <a href="{{ url('/cars') }}" class="
                      relative
                      flex
                      gap-4
                      p-4
                      hover:bg-muted-100
                      dark:hover:bg-muted-900
                      z-10
                      transition-colors
                      duration-300
                    ">
                    <div class="w-10 text-muted-500">
                        <img src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}" class="w-full h-full rounded-full">
                    </div>
                    <div>
                      <h4 class="
                        font-heading font-semibold
                        text-sm text-muted-800
                        dark:text-white
                      ">
                        {{ $brand->name }}
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        USA - {{ $brand->year }}
                      </p>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
            </div>
          </li>
          <li x-on:mouseover="megamenuOpened = false, openedMegamenu = ''">
            <a href="{{ url('contact') }}" class="
                block
                text-base
                font-sans font-light
                text-white
                hover:text-primary-500
                py-2
                md:mx-2
                tw-accessibility
              ">
              Contact
            </a>
          </li>
          @if(Auth::check())
          <li x-on:mouseover="megamenuOpened = false, openedMegamenu = ''">
            <a href="/dashboard.html" class="
                block
                text-base
                font-sans font-light
                text-white
                hover:text-primary-500
                py-2
                md:mx-2
                tw-accessibility
              ">
              Account
            </a>
          </li>
          @endif
        </ul>
        <div class="flex flex-col my-3 lg:hidden">
          <div class="flex items-center justify-center mb-4">
            <!--Dark mode-->
            <label class="
                block
                w-10
                h-10
                overflow-hidden
                relative
                lg:m-0
                outline-1
                focus-within:tw-accessibility-static
              ">
              <input type="checkbox" class="absolute top-0 left-0 z-[2] w-full h-full opacity-0 cursor-pointer" @change="toggleTheme()">
              <span class="
                  block
                  relative
                  w-10
                  h-10
                  bg-muted-800/30
                ">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="block absolute top-1/2 left-1/2 w-5 h-5 text-yellow-400 transition-all duration-300 pointer-events-none opacity-0 -translate-x-[50%] -translate-y-[150%]" :class="[
                    !$store.app.isDark
                      ? 'opacity-100 -translate-x-[50%] -translate-y-1/2'
                      : 'opacity-0  -translate-x-[50%] -translate-y-[150%]',
                  ]" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" class="fill-current"></circle>
                    <path class="fill-current" d="M12 1v2"></path>
                    <path class="fill-current" d="M12 21v2"></path>
                    <path class="fill-current" d="M4.22 4.22l1.42 1.42"></path>
                    <path class="fill-current" d="M18.36 18.36l1.42 1.42"></path>
                    <path class="fill-current" d="M1 12h2"></path>
                    <path class="fill-current" d="M21 12h2"></path>
                    <path class="fill-current" d="M4.22 19.78l1.42-1.42"></path>
                    <path class="fill-current" d="M18.36 5.64l1.42-1.42"></path>
                  </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="block absolute top-1/2 left-1/2 w-5 h-5 text-yellow-400 transition-all duration-300 pointer-events-none opacity-100 -translate-x-[45%] -translate-y-1/2" :class="[
                    !$store.app.isDark
                      ? 'opacity-0 -translate-x-[45%] -translate-y-[150%]'
                      : 'opacity-100 -translate-x-[45%] -translate-y-1/2',
                  ]" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path class="fill-current" d="M21 12.79A9 9 0 1 1 11.21 3A7 7 0 0 0 21 12.79z"></path>
                  </g>
                </svg>
              </span>
            </label>
          </div>
          <a href="/signup.html" class="
              relative
              w-full
              font-sans font-normal
              inline-flex
              items-center
              justify-center
              leading-5
              no-underline
              min-w-[130px]
              space-x-1
              text-white
              bg-primary-500
              h-12
              px-5
              py-3
              text-base
              hover:bg-primary-600 hover:shadow-xl hover:shadow-primary-500/20
              tw-accessibility
              transition-all
              duration-300
            ">
            Register
          </a>
        </div>
      </div>

      <div class="
          hidden
          lg:flex lg:items-center lg:w-1/5 lg:justify-end lg:gap-x-2
        ">
        <button type="button" class="
            group
            h-12
            w-12
            rounded-full
            flex
            items-center
            justify-center
            tw-accessibility
          ">
        </button>
        <div class="h-10 w-10 flex items-center justify-center">
          <!--Dark mode-->
          <label class="
              block
              w-10
              h-10
              overflow-hidden
              relative
              lg:m-0
              outline-1
              focus-within:tw-accessibility-static
            ">
            <input type="checkbox" class="absolute top-0 left-0 z-[2] w-full h-full opacity-0 cursor-pointer" @change="toggleTheme()">
            <span class="
                block
                relative
                w-10
                h-10
                bg-muted-800/30
              ">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="block absolute top-1/2 left-1/2 w-5 h-5 text-yellow-400 transition-all duration-300 pointer-events-none opacity-0 -translate-x-[50%] -translate-y-[150%]" :class="[
                  !$store.app.isDark
                    ? 'opacity-100 -translate-x-[50%] -translate-y-1/2'
                    : 'opacity-0  -translate-x-[50%] -translate-y-[150%]',
                ]" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="5" class="fill-current"></circle>
                  <path class="fill-current" d="M12 1v2"></path>
                  <path class="fill-current" d="M12 21v2"></path>
                  <path class="fill-current" d="M4.22 4.22l1.42 1.42"></path>
                  <path class="fill-current" d="M18.36 18.36l1.42 1.42"></path>
                  <path class="fill-current" d="M1 12h2"></path>
                  <path class="fill-current" d="M21 12h2"></path>
                  <path class="fill-current" d="M4.22 19.78l1.42-1.42"></path>
                  <path class="fill-current" d="M18.36 5.64l1.42-1.42"></path>
                </g>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="block absolute top-1/2 left-1/2 w-5 h-5 text-yellow-400 transition-all duration-300 pointer-events-none opacity-100 -translate-x-[45%] -translate-y-1/2" :class="[
                  !$store.app.isDark
                    ? 'opacity-0 -translate-x-[45%] -translate-y-[150%]'
                    : 'opacity-100 -translate-x-[45%] -translate-y-1/2',
                ]" width="32" height="32" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path class="fill-current" d="M21 12.79A9 9 0 1 1 11.21 3A7 7 0 0 0 21 12.79z"></path>
                </g>
              </svg>
            </span>
          </label>
        </div>
        @if(Auth::check())
          <a href="/dashboard.html" class="
            relative
            font-sans font-normal
            inline-flex
            items-center
            justify-center
            leading-5
            no-underline
            space-x-1
            text-white
            bg-muted-800/30
            dark:bg-muted-900
            h-10
            w-10
            text-base
            hover:bg-muted-700
            dark:hover:bg-muted-1000
            tw-accessibility
            transition-all
            duration-300
            ">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="lucide:user" class="iconify w-4 h-4 iconify--lucide"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></g></svg>
          </a>
        @else
            <!--<a href="{{ route('login.index') }}" class="-->
            <a href="" class="
              relative
              font-sans font-normal
              inline-flex
              items-center
              justify-center
              leading-5
              no-underline
              space-x-1
              text-white
              bg-muted-800/30
              dark:bg-muted-900
              h-10
              w-10
              text-base
              hover:bg-muted-700
              dark:hover:bg-muted-1000
              tw-accessibility
              transition-all
              duration-300
            ">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="lucide:user" class="iconify w-4 h-4 iconify--lucide"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></g></svg>
          </a>
        @endif
      </div>
    </div>
  </div>
</nav>