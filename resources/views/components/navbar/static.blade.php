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
          </div>
          <span class="text-2xl whitespace-nowrap">Trans Era Legend</span>
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
              <span>Vehicules</span>
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
              <span>Marque</span>
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
            <a href="{{ url('/dashboard') }}" class="
                block
                text-base
                font-sans font-light
                text-white
                hover:text-primary-500
                py-2
                md:mx-2
                tw-accessibility
              ">
              Dashboard
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
          <!--<a href="{{ url('/login') }}" class="
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
            Connexion
          </a>-->
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
        <!--@if(Auth::check())
          <a href="{{ url('/account') }}" class="
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
        @endif-->
      </div>
    </div>
  </div>
</nav>