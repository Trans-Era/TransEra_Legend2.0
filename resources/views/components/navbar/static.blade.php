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
                        Muscle car
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Voiture de sport d'origine USA 
                      </p>
                    </div>
                  </a>
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
                    <div class="w-full max-w-[60px] my-2 text-muted-500">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.912 25.673" class="w-full fill-current">
                        <path d="M13.016 17.673c-1.379 0-2.574 1.195-2.574 2.574 0 .368.092.736.276 1.103.46.828 1.287 1.471 2.299 1.471s1.931-.552 2.299-1.471c.184-.368.276-.736.276-1.103-.001-1.47-1.105-2.574-2.576-2.574zm52.777-3.034c-3.034 0-5.517 2.483-5.517 5.517s2.483 5.517 5.517 5.517c3.034 0 5.517-2.483 5.517-5.517s-2.483-5.517-5.517-5.517zm0 9.011c-1.931 0-3.494-1.563-3.494-3.494s1.563-3.494 3.494-3.494c1.931 0 3.494 1.563 3.494 3.494s-1.563 3.494-3.494 3.494z"></path>
                        <path d="M13.016 14.639c-3.034 0-5.517 2.483-5.517 5.517s2.483 5.517 5.517 5.517 5.517-2.483 5.517-5.517-2.482-5.517-5.517-5.517zm0 9.011c-1.931 0-3.494-1.563-3.494-3.494s1.563-3.494 3.494-3.494 3.494 1.563 3.494 3.494-1.563 3.494-3.494 3.494z"></path>
                        <path d="M79.625 13.076l-.919-4.138.46-1.563-7.265-1.195C59.581.204 47.536-1.267 36.962 1.031c0 0-3.034.644-11.493 6.436 0 0-15.723.919-20.78 2.758l-2.115.828L.46 14.179l.184 2.207-.644.828s.46 4.046.368 4.046l5.885 1.103h.184c-.184-.644-.368-1.379-.368-2.115 0-3.77 3.034-6.804 6.804-6.804s6.804 3.034 6.804 6.804c0 .736-.092 1.471-.368 2.115h.46l39.077-.092.184-.092a7.656 7.656 0 01-.276-2.023 6.788 6.788 0 016.804-6.804 6.788 6.788 0 016.804 6.804c0 .46 0 .828-.092 1.195h.276c1.287-.276 7.723-1.287 7.723-1.287l.644-5.885c-.001 0-.553-.459-1.288-1.103zM5.057 14.271l-3.126 1.195s.644-2.207 2.115-3.034c.828-.46 3.586-1.103 3.586-1.103l-2.575 2.942zm62.155-5.7c-1.655.184-4.046.368-6.896.46-15.907.46-35.767 1.563-35.951 1.563-4.046.184-9.654.552-9.654.552s2.666-1.103 11.677-1.563c4.505-3.77 10.206-6.528 10.206-6.528 2.85-.828 6.988-1.195 7.172-1.195 2.023-.184 4.138-.092 6.344.092l-.644 6.62c1.287-.092 2.483-.092 3.586-.092l.644-6.068c4.689.736 9.195 2.207 12.137 3.954.276.184-3.31 1.379-4.781 1.839 5.057-.276 8.735.092 8.735.092s-.92.09-2.575.274z"></path>
                        <circle cx="65.793" cy="20.156" r="2.574"></circle>
                      </svg>
                    </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Exotic car
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Coupé élégant de haut standing
                      </p>
                    </div>
                  </a>
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
                    <div class="w-full max-w-[60px] my-2 text-muted-500">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.912 25.673" class="w-full fill-current">
                        <path d="M13.016 17.673c-1.379 0-2.574 1.195-2.574 2.574 0 .368.092.736.276 1.103.46.828 1.287 1.471 2.299 1.471s1.931-.552 2.299-1.471c.184-.368.276-.736.276-1.103-.001-1.47-1.105-2.574-2.576-2.574zm52.777-3.034c-3.034 0-5.517 2.483-5.517 5.517s2.483 5.517 5.517 5.517c3.034 0 5.517-2.483 5.517-5.517s-2.483-5.517-5.517-5.517zm0 9.011c-1.931 0-3.494-1.563-3.494-3.494s1.563-3.494 3.494-3.494c1.931 0 3.494 1.563 3.494 3.494s-1.563 3.494-3.494 3.494z"></path>
                        <path d="M13.016 14.639c-3.034 0-5.517 2.483-5.517 5.517s2.483 5.517 5.517 5.517 5.517-2.483 5.517-5.517-2.482-5.517-5.517-5.517zm0 9.011c-1.931 0-3.494-1.563-3.494-3.494s1.563-3.494 3.494-3.494 3.494 1.563 3.494 3.494-1.563 3.494-3.494 3.494z"></path>
                        <path d="M79.625 13.076l-.919-4.138.46-1.563-7.265-1.195C59.581.204 47.536-1.267 36.962 1.031c0 0-3.034.644-11.493 6.436 0 0-15.723.919-20.78 2.758l-2.115.828L.46 14.179l.184 2.207-.644.828s.46 4.046.368 4.046l5.885 1.103h.184c-.184-.644-.368-1.379-.368-2.115 0-3.77 3.034-6.804 6.804-6.804s6.804 3.034 6.804 6.804c0 .736-.092 1.471-.368 2.115h.46l39.077-.092.184-.092a7.656 7.656 0 01-.276-2.023 6.788 6.788 0 016.804-6.804 6.788 6.788 0 016.804 6.804c0 .46 0 .828-.092 1.195h.276c1.287-.276 7.723-1.287 7.723-1.287l.644-5.885c-.001 0-.553-.459-1.288-1.103zM5.057 14.271l-3.126 1.195s.644-2.207 2.115-3.034c.828-.46 3.586-1.103 3.586-1.103l-2.575 2.942zm62.155-5.7c-1.655.184-4.046.368-6.896.46-15.907.46-35.767 1.563-35.951 1.563-4.046.184-9.654.552-9.654.552s2.666-1.103 11.677-1.563c4.505-3.77 10.206-6.528 10.206-6.528 2.85-.828 6.988-1.195 7.172-1.195 2.023-.184 4.138-.092 6.344.092l-.644 6.62c1.287-.092 2.483-.092 3.586-.092l.644-6.068c4.689.736 9.195 2.207 12.137 3.954.276.184-3.31 1.379-4.781 1.839 5.057-.276 8.735.092 8.735.092s-.92.09-2.575.274z"></path>
                        <circle cx="65.793" cy="20.156" r="2.574"></circle>
                      </svg>
                    </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Old car
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Voiture ancienne de renommée
                      </p>
                    </div>
                  </a>
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
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                    <div class="w-10 text-muted-500"><svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve" class="w-full h-full">
              <g transform="matrix(2.6914334,0,0,2.6914334,3.9289753e-4,0.00201068)">
                <path inkscape:connector-curvature="0" class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M56.7,52.4c0.7,3.7-1.2,6.8-2.8,9.7c-1.8,2.8-4.7,5.1-8.3,4.8
                c-7.9-0.1-15.7-1.3-22.9-3.5c-0.3-0.1-0.7-0.3-0.8-0.6c-0.1-0.4,0.1-0.8,0.4-1.1c6.6-5.3,14.4-7.8,22.1-10.4c2.9-0.8,6-1.7,9.2-1.3
                C54.9,50.2,56.2,51.1,56.7,52.4z M83.8,36.6c3.7,3,7,7.2,5.9,12.2c-1.8,7.4-9.9,11.3-16.3,13.8c-3.5,1.2-7,2.4-10.8,2.7
                c-0.2,0-0.6,0-0.7-0.3l0.1-0.4c5.4-6.1,9.5-12.9,13.1-19.9c1.7-3.1,3.2-6.3,4.6-9.5c0.2-0.2,0.4-0.4,0.7-0.4
                C81.8,34.9,82.7,35.9,83.8,36.6L83.8,36.6z M31.9,28.8l-0.1,0.4c-7.8,8.9-13,19.2-17.9,29.5c-1,0.9-1.9-0.3-2.7-0.7
                C6.8,55.2,2.9,50.5,4,45.1c1.8-7.1,9.2-10.9,15.3-13.5c3.6-1.4,7.4-2.5,11.4-3.1C31.1,28.4,31.7,28.4,31.9,28.8z M70.7,30.2
                c0.4,0.2,1,0.3,1.3,0.8c0.2,0.5-0.2,0.8-0.5,1.2c-6.2,4.8-13.2,7.5-20.4,9.9c-3.7,0.9-7.4,2.5-11.4,1.6c-1-0.2-1.8-0.9-2.4-1.8
                c-1-2.8,0.4-5.7,1.5-8.2c1.6-3.1,4.4-6.7,8.2-6.7C55.4,26.9,63.3,28.1,70.7,30.2z M81,30.4c6.3,3.5,13.5,9.5,12.7,17.6
                c-0.9,7.5-7.9,12.7-14.1,15.9c-18.2,8.7-43.9,9-62.7,1.4c-6.4-2.6-13.5-7.2-16.2-14c-2.1-5.6,0.4-11.5,4.6-15.4
                c8.8-8,20-10.7,31.5-12.3c12.5-1.5,25.7-0.2,36.8,3.7C76.2,28.2,78.7,29.2,81,30.4z"></path>
              </g>
            </svg>
            </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Hyundai
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Korea
                      </p>
                    </div>
                  </a>
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                    <div class="w-10 text-muted-500"><svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve">
              <g>
                <path class="fill-current" d="M215.3,36.9C191.5,13.1,159.8,0,126.1,0C56.6,0,0,56.6,0,126.1c0,33.7,13.1,65.4,36.9,89.2c23.8,23.8,55.5,36.9,89.2,36.9
                c33.7,0,65.4-13.1,89.2-36.9c23.8-23.8,36.9-55.5,36.9-89.2C252.3,92.4,239.1,60.8,215.3,36.9z M126.1,247.9
                c-32.5,0-63.1-12.7-86.1-35.7c-23-23-35.7-53.6-35.7-86.1C4.4,93.6,17,63,40,40C63,17,93.6,4.4,126.1,4.4S189.2,17,212.2,40
                c23,23,35.7,53.6,35.7,86.1C247.9,193.3,193.3,247.9,126.1,247.9z"></path>
                <path class="fill-current" d="M56.4,126.1h69.8V56.4C87.6,56.4,56.4,87.6,56.4,126.1z M126.1,126.1v69.8c38.5,0,69.8-31.2,69.8-69.8L126.1,126.1
                L126.1,126.1z"></path>
                <path class="fill-current" d="M49.8,52.9c1-1.2,3.4-1.2,4.9,0.1c1.7,1.4,1.7,3.4,0.6,4.7l-8.9,10.6l-5.6-4.7L49.8,52.9z M65.7,65.4l-9.4,11.2l-5.9-4.9
                l9.5-11.3c1.1-1.3,3.5-1.6,5.1-0.3C66.7,61.6,66.9,63.9,65.7,65.4L65.7,65.4z"></path>
                <path class="fill-current" d="M126.1,9.4C61.7,9.4,9.4,61.7,9.4,126.1s52.3,116.7,116.7,116.7s116.7-52.3,116.7-116.7S190.6,9.4,126.1,9.4z M109.1,15.8
                h9.2l8.4,21.9l8.4-21.9h9.2v30.7h-6.2V25L130,46.5h-6.7L115.2,25v21.5h-6.2V15.8z M31.6,66.3l15-17.9c3.1-3.7,7.4-6.7,11.6-3.2
                c1.3,1.1,1.8,1.4,3.4,4.2c0.4,1,0.6,2.8,0,4.6c3.6-2.2,7.4-1.5,9.9,0.9c3.8,3.7,3.2,8-0.4,12.3L55.1,86.1L31.6,66.3z M126.7,200.7
                c-41.2,0-74.6-33.4-74.6-74.6c0-41.2,33.4-74.6,74.6-74.6s74.6,33.4,74.6,74.6C201.2,167.3,167.9,200.7,126.7,200.7z M195.6,86.7
                l-5.6-6.9l11.1-16.3l-0.1-0.1l-18.2,7.5l-5.6-6.9l19.3-24.8l4.8,5.9l-12.1,15.8l18.4-7.9l5.1,6.3h0l-11.6,16.4l18-8.5l4.8,5.9
                L195.6,86.7z"></path>
              </g>
            </svg>
            </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        BMW
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Germany
                      </p>
                    </div>
                  </a>
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                    <div class="w-10 text-muted-500"><svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve">
              <path class="fill-current" d="M11,89.1c0,0,0.2-0.5,0.2-0.7c0.1-0.1,0.4-1.4,2.2-1.5c0,0,0.9-0.1,1.9,0.2c0,0-0.6,1.5-3,1.8C12.3,89,11.4,89.1,11,89.1
              M249.8,158.4c-0.6,1.5-3.2,3.4-6.3,4.4c-3.2,1.1-9.9,1.1-13.4,0c0,0-0.7-0.8-3.1-1.5c-5.6-1.7-7.4-2.8-10.3-5.5
              c-2-1.9-4.2-4.2-6.4-6.5c-1-1-3.3-3.3-7.4-4c-4.3-0.7-14.8-1.5-18.6-2.9c-2.6-0.9-5.7-2.7-9.5-8.5c-1.9-2.8-3.3-3.6-5.9-5.3
              c0,0,2,1.6,3.1,3.6c1.6,2.8,2.3,4.9,3.1,6.4c0.9,1.5,1.8,2.9,3.4,4.1c1.9,1.5,3.1,1.9,5.3,2.3c2.1,0.4,9.1,0.7,15.1,1
              c5.9,0.2,8.5,2.1,10.3,3.6c1.7,1.4,4.4,5.6,6.3,7.2c2.6,2.2,2.6,2.3,5.6,4.1c1.5,0.9,2.8,1.6,4,2c2.7,1.6,1.6,4.4,1.6,4.4
              c-0.8,2.2-3.6,3-6.9,2.6c-5-0.4-9.2-4.6-12.8-7.5c-2-1.6-2.7-2.5-6.5-5.1c-5.8-4-19.5-3.7-19.5-3.7l-10-0.1
              c-19.5,0.3-26.6-15.4-28.6-18.7c-0.7-1.1-1.3-2.1-1.9-2.8c-0.9-1.2-5.8-7.6-11-9.9c0,0,5,4.4,4.5,6.7c-1.1,0-2.3,0.1-3.8,0.1
              c-19.7,0.6-23.7-0.5-26.8-1.1c-3.1-0.6-8.3-2.2-13.4-4.5c0,0,0.6-4.8-1.4-8.9c0,0,16.2,5.7,29.1,4.1c0,0-20.8-1-33.8-11.4
              c0,0,3.2,10.9,0.7,15.5c0,0-3.4,8.3-20.9,2.8c0,0-8.1-3.1-14.3-3.1c0,0-4.7,0.2-5.3,2.7c0,0-0.3,1.2,0.9,1.7c0,0,1.4,0.4,0.7,1.4
              c-1.1,1.7-2.5,3-4,3.7c-4.9-0.2-4.5-4.3-4.5-4.3c0.1-1.4,0.5-2.4,1-3.4c3.1-6.9,13.9-7.9,13.9-7.9c11.5-1.1,23.5,1.6,23.5,1.6
              c-8.6-2.1-11.5-3.6-14-5.6c-3.3-2.8-6.4-12.1-6.4-12.1c-1.3,4.6,0.3,9.2,1.4,11.5c-1.6-2.6-4-4.8-6-6.5c-5.3-4.2-13-5.6-13-5.6
              c-2.2-0.4-3.1-2.7-3.1-2.7c-2.9-5.2-6.1-5.5-6.1-5.5c1.6,2.2,1.4,5.2,1.4,5.2c0,5.5-7.1,7.3-7.1,7.3c-5.3,5.3-6.2,5.1-7.2,5.2
              c-1,0.1-1.8-1-1.8-1c-0.3-0.5,0.2-1,0.2-1c0.9-0.6,1.7-1.3,1.7-1.3c5.2-4.1,5.9-6.3,5.5-9.1c-0.8-5.8-5.5-5.3-5.5-5.3
              c-2.2,0-3.3,1.7-3.3,1.7c-0.8,1-2.7,4.1-2.7,4.1c-1.6,2.7-3.1,2.3-3.1,2.3c-1.8,0.1-3.1-1.5-3.1-1.5C3.5,98.1,3.4,98,3.4,98
              c-1.3-1.4-0.2-3.1-0.2-3.1c2.2-3.9,6-4.2,6.5-4.3c0.5,0,2.3-0.2,2.3-0.2c4.3-0.3,7-4.4,7-4.4c-1.8-0.9-5-0.4-5-0.4
              c-3.1,0.2-3.9,3.5-4,3.5c-2.7,0.4-2.6-1.7-2-2.2c0.5-0.5,2.1-3.1,12.4-4.7c0,0,5.5-1.1,15.2,0c0.4,0,0.7,0.4,0.2,0.9
              c-1.2,1.4-5.1,4.6-11.2,3.1c0,0-0.1,2.5,6.6,3.7c0,0,6.1,1.3,15.9,9.2c0,0-4.8-8.9-13.1-11.6c0,0-0.6-0.4-0.1-1
              c0,0,3.9-3.5,10.8-3.1c0,0,22.9,1.2,35.7,14.6c0,0-0.4-2.2-2.4-5.5c0,0-0.4-0.4-0.2-0.7c0,0,0.2-0.6,2.4-0.1c0,0,8.2,1.3,27.1,8.3
              c0,0,14.2,5,22,8.2c11.6,4.8,40.8,16.7,59.2,26.9c3.3,1.8,17,8.6,17,8.6c10.2,6.4,19.7,11,19.7,11c9.3,4.3,16,2.3,16,2.3
              c2.2-0.8,6.3-3,7.9-1.5C250.2,156.3,250.3,157.4,249.8,158.4L249.8,158.4z M252.1,154.8c-1.2-2.8-5.1-2.1-5.1-2.1
              c-1.8,0.1-4,2-7.2,2.6c-6.7,1.4-11.9-0.9-11.9-0.9c-9.9-4.4-16.7-9.3-21-11.8c-4.4-2.5-20.6-11-36.7-19.1c0,0-18.5-9.5-46-20.8
              c0,0-52.9-24-91-24c0,0-19.7-0.2-26.4,7.3c0,0-1.2,1-0.6,2.2c0,0,0.1,0.3-0.2,0.5c0,0-2.9,1.9-5.3,4.7c0,0-1.3,1.3-0.3,3.3
              c0,0,1.3,2.2,2.1,3.2c0.8,1,2.4,2.6,4.9,2.4c1.1-0.1,1.1-0.4,1.1-0.4c1.1,1.1,3.1,1.2,3.1,1.2c-0.2-0.7-1-2.1-1-2.9
              c-0.1-0.9,0.3-1.8,0.3-1.8c0.4-1,1.2-2.2,2-2.9c0.7-0.6,2.4-1.1,3.8-0.2c1,0.7,2.2,3.1,0.9,6.2c0,0-1.4,2.4-2.7,2.7l-0.4,0
              c-0.7,0-2.4-0.9-2.4-0.9s-0.1,0.2,0.1,1c0.1,0.5,0.3,1,0.4,1.4l-0.3,0.3c0,0-1,0.8-0.6,2.1c0,0,1,3.8,3.9,3.8
              c2.5,0.1,4.6-2.3,4.6-2.3c5.4-5.8,13-6.6,13-6.6c8.4-0.6,20.5,8.1,23.8,10.6c-12.5-0.1-17.5,4.7-17.5,4.7c-7,5.5-4.3,12.1-4.3,12.1
              c0.5,1.4,2,2.5,2.9,2.9c1.3,0.6,2.4,0.6,3.4,0.5c0.7-0.1,1.6-0.4,2-0.6c1-0.6,2.7-1.7,3.5-2.9c0.6-0.6,1.1-2.1,0.7-3.4
              c0,0-0.2-1.1,0.8-1.3c0,0,3.3-0.8,10,2.1c0,0,7.3,4.2,16.7,5.1c0,0,10.7,1.1,13.3-4.7c0,0,6.2,2.5,15.2,3.6c0,0,8.8,0.9,23-0.2
              c2.8-0.2,6.1,0,6.1,0c4.6,0.5,7.5,2.9,8.6,4.8c4.7,7.6,10.2,22.5,33.1,21.9l10.3-0.3c6.3,0,11.4,0.1,16.4,2.7
              c2.2,1.2,8,6.9,11.5,8.9c10.6,7.1,16.7,3.8,16.7,3.8c3.6-2.1,3.3-5.8,2.4-7.9c-1.1-0.3,13.1,2.1,19.1-5.9
              C252.3,157.4,252.5,155.8,252.1,154.8L252.1,154.8z"></path>
            </svg>
            </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Jaguar
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">UK</p>
                    </div>
                  </a>
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                      <svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve">
                        <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M126.1,0C56.5,0,0,56.5,0,126.1c0,69.7,56.5,126.1,126.1,126.1c69.7,0,126.1-56.5,126.1-126.1
                          C252.3,56.5,195.8,0,126.1,0z M22.9,66.8c21-36.5,59.8-59.1,101.9-59.7l-16.3,108.1v0l-86.2,69.7C1.5,148.2,1.8,103.3,22.9,66.8z
                          M126.6,245.7c-42.2,0.2-81.3-21.9-102.8-58.2l102.4-42.4L229,186.9C207.6,223.3,168.7,245.6,126.6,245.7z M143.4,116.7L143.4,116.7
                          L143.4,116.7L143.4,116.7L127.8,7.2c41.9,0.6,80.4,23.2,101.4,59.5c21.1,36.3,21.6,80.8,1.3,117.5L143.4,116.7z">
                        </path>
                      </svg>
                    </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Mercedes
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Germany
                      </p>
                    </div>
                  </a>
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                    <div class="w-10 text-muted-500"><svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve">
              <g>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M126.1,63.4C56.5,63.4,0,91.5,0,126.1c0,34.7,56.5,62.8,126.1,62.8c69.7,0,126.1-28.1,126.1-62.8
                C252.3,91.5,195.8,63.4,126.1,63.4z M126.1,183.7c-66.5,0-120.4-25.8-120.4-57.6c0-31.8,53.9-57.6,120.4-57.6
                c66.5,0,120.4,25.8,120.4,57.6S192.6,183.7,126.1,183.7z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M159.6,96.3c3.9,0,2.3,6.5,1,9.7c-0.7,1.6-1.7,3.2-2.8,4.5c-0.7,0.8-1.5,1.4-2.5,1.8c-0.5,0.2-1,0.3-1.5,0.3
                h-2.2l5.7-16.3L159.6,96.3L159.6,96.3z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M198,134.1c5.5,0.1,2.2,5.4-1.4,5.4h-2.5l1.8-5.4L198,134.1z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M84.1,134.1c5.2,0.1,2.5,5.4-1.4,5.4h-2.5l1.8-5.4L84.1,134.1z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M96,108.8h-4.5l3.9-6.7L96,108.8z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M114.1,149.7c-1.7,1.8-5.1,2.1-6.1-0.6c-0.6-1.7-0.8-3.4-0.5-5.2c0.4-3,1.7-5.9,3.6-8.3c2-2.5,6.3-1.6,6.8,1.7
                C118.6,141.9,117.2,146.4,114.1,149.7L114.1,149.7z"></path>
                <path class="fill-current" clip-rule="evenodd" fill-rule="evenodd" d="M126.1,70.8C60.9,70.8,7.9,95.6,7.9,126.1c0,30.5,52.9,55.3,118.2,55.3c65.3,0,118.2-24.7,118.2-55.3
                C244.3,95.6,191.4,70.8,126.1,70.8z M176.3,113.4l12.3-5.1H178l2.8-7.8h20.6l-3,7.8l-23.1,7.8L176.3,113.4z M159.6,88.1
                c2.9,0,5.7,0.7,8.2,2.1c2.4,1.6,4,4.1,4.4,6.9c0.3,3.8-0.4,7.7-1.9,11.2c-1.5,3.5-3.9,6.6-7,8.8c-2.7,2.2-6.1,3.3-9.6,3.2
                l-14.7,0.1l10-29c0.3-1,0.3-2.1-0.1-3.2H159.6z M117.7,91.4c0.4-1,0.4-2.2,0-3.2l9.7-0.1l2.7,14.4l5.1-14.4h9l-11.7,32.1h-8.8
                l-2.5-14l-5.6,14h-8.1L117.7,91.4z M94,88.1l9.8,0l1.7,32.1h-8.9l-0.6-4.2H87l-3,4.2h-9.2l18.7-28.9v0C94.1,90.4,94.3,89.2,94,88.1
                z M62.9,91.4c0.3-1,0.3-2.2,0-3.2h11l-8.4,24.7h9.6l-3.1,7.4H53.1L62.9,91.4z M61.7,137.8l-2.8,7.9H38.2l3-7.9l23.1-7.8l-0.9,2.6
                l-12.3,5.1H61.7z M95.8,139.3c-0.7,2-2.1,3.6-3.8,4.8c-1.6,1.2-3.5,2-5.5,2.4l6.3,12.2h-9.5l-6-11.5l-4.1,11.5h-9.5l10.3-29
                c0.4-1,0.4-2.2,0-3.2h12.8c2,0,4.1,0.5,5.9,1.4c1.3,0.6,2.4,1.6,3,2.8C97,133.5,97.1,136.6,95.8,139.3z M123.9,151.4
                c-2,2.6-4.6,4.7-7.5,6.1c-2.8,1.3-5.9,1.8-9,1.3c-4.5-1-8.1-4.4-9.2-8.9c-0.9-3.2-0.8-6.6,0.3-9.7c2-6.3,6.8-11.4,13-13.6
                c3.7-1.2,7.8-0.6,11.1,1.5c2.5,1.7,4.2,4.4,4.9,7.3C128.8,141.1,127.5,147,123.9,151.4z M131.5,158.7l-0.6-28.9
                c0.1-1.1-0.2-2.2-0.7-3.2l9.9,0l0.1,17.3l11.6-17.3h10.4l-23.6,32.1H131.5z M173.6,158.7h-20.2l0,0l9.8-28.1c0.4-1.3,0.4-2.7,0-4
                h21.5l-2.4,7h-10.4l-1.9,5.6h8l-2.6,7h-7.9c-0.7,1.8-1.3,3.7-1.8,5.5h10.6L173.6,158.7z M209.7,139.3c-0.7,2-2.1,3.6-3.8,4.8
                c-1.6,1.2-3.5,2-5.5,2.4l6.3,12.2h-9.5l-6-11.5l-4.1,11.5h-9.5l10.3-29c0.4-1,0.4-2.2,0-3.2h12.8c2,0,4,0.5,5.8,1.4
                c1.3,0.6,2.4,1.6,3,2.8C210.9,133.5,211,136.6,209.7,139.3z"></path>
              </g>
            </svg>
            </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Landrover
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        UK
                      </p>
                    </div>
                  </a>
                  <!--Grid item-->
                  <a href="/inventory.html" class="
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
                    <div class="w-10 text-muted-500"><svg version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 252.3 252.3" style="enable-background: new 0 0 252.3 252.3" xml:space="preserve">
              <g>
                <path class="fill-current" d="M43.7,169.9c-11.1,0-21.7-4.2-29.9-11.8c-8.5-8-13.5-18.8-13.8-30.5c-0.8-24.1,18.2-44.4,42.3-45.2l0.2,0l2.8,0
                c9.8,0.3,18.8,3.9,26,9.7c7.1-5.8,16.1-9.4,26-9.7l0.2,0l2.8,0c9.8,0.3,18.8,3.9,26,9.7c7.1-5.8,16.1-9.4,26-9.7l0.2,0l2.8,0
                c9.8,0.3,18.8,3.9,26,9.7c7.1-5.8,16.1-9.4,26-9.7l0.2,0l2.8,0c23,0.8,41.5,19.3,42.3,42.3c0.4,11.7-3.8,22.8-11.8,31.4
                c-8,8.5-18.8,13.5-30.5,13.8c-10.9,0.4-21-3.3-28.9-9.7c-7.4,5.9-16.4,9.3-26,9.7c-10.9,0.4-21-3.3-28.9-9.7
                c-7.4,5.9-16.4,9.3-26,9.7c-10.9,0.4-21-3.3-28.9-9.7c-7.4,5.9-16.4,9.3-26,9.7C44.7,169.9,44.2,169.9,43.7,169.9z M42.6,91.5
                c-19.1,0.7-34,16.7-33.4,35.8c0.3,9.2,4.2,17.8,11,24.1c6.8,6.3,15.6,9.6,24.8,9.3c7.3-0.2,14.1-2.7,19.8-7
                c-5.8-7.2-9.5-16.2-9.8-26.1c-0.4-11,3.3-21.1,9.8-29c-5.5-4.2-12.3-6.8-19.7-7H42.6z M187.6,153.7c6.1,4.6,13.8,7.3,22.1,7
                c9.2-0.3,17.8-4.2,24.1-11c6.3-6.8,9.6-15.6,9.3-24.8c-0.6-18.1-15.3-32.8-33.4-33.5h-2.5c-7.4,0.3-14.2,2.9-19.7,7
                c5.8,7.2,9.5,16.2,9.8,26.1C197.7,135.3,194.2,145.5,187.6,153.7z M132.7,153.7c6.1,4.6,13.8,7.3,22.1,7c7.3-0.2,14.1-2.7,19.8-7
                c-5.8-7.2-9.5-16.2-9.8-26.1c-0.4-11,3.3-21.1,9.8-29c-5.5-4.2-12.3-6.8-19.7-7h-2.5c-7.4,0.3-14.2,2.9-19.7,7
                c5.8,7.2,9.5,16.2,9.8,26.1C142.8,135.3,139.3,145.5,132.7,153.7z M77.8,153.7c6.1,4.6,13.8,7.3,22.1,7c7.3-0.2,14.1-2.7,19.8-7
                c-5.8-7.2-9.5-16.2-9.8-26.1c-0.4-11,3.3-21.1,9.8-29c-5.5-4.2-12.3-6.8-19.7-7h-2.5c-7.4,0.3-14.2,2.9-19.7,7
                c5.8,7.2,9.5,16.2,9.8,26.1C87.9,135.3,84.5,145.5,77.8,153.7z M181,105c-4.7,6.1-7.4,13.9-7.2,22.2c0.3,7.5,2.9,14.4,7.2,20
                c4.9-6.4,7.4-14.1,7.2-22.3C187.9,117.5,185.3,110.6,181,105z M126.1,105c-4.7,6.1-7.4,13.9-7.2,22.2c0.3,7.5,2.9,14.4,7.2,20
                c4.9-6.4,7.4-14.1,7.2-22.3C133,117.5,130.4,110.6,126.1,105z M71.2,105c-4.7,6.1-7.4,13.9-7.2,22.2c0.3,7.5,2.9,14.4,7.2,20
                c4.9-6.4,7.4-14.1,7.2-22.3C78.2,117.5,75.5,110.6,71.2,105z"></path>
              </g>
            </svg>
            </div>
                    <div>
                      <h4 class="
                          font-heading font-semibold
                          text-sm text-muted-800
                          dark:text-white
                        ">
                        Audi
                      </h4>
                      <p class="font-sans text-xs text-muted-500 dark:text-muted-400">
                        Germany
                      </p>
                    </div>
                  </a>
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
            <a href="{{ route('login.index') }}" class="
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