<div
  x-cloak
  class="
    fixed
    top-0
    left-0
    w-[250px]
    h-full
    z-20
    border border-muted-200
    dark:border-muted-800
    bg-white
    dark:bg-muted-900
    transition-all
    duration-300
  "
  :class="[
    $store.app.isSidebarActive ? '-translate-x-full lg:translate-x-0' : 'lg:-translate-x-full',
    $store.app.isSidebarMobileActive ? 'translate-x-0' : '-translate-x-full',
  ]"
>
  <div class="w-full h-[80px] flex items-center justify-between px-6">
    <a
      href="{{ url('/dashboard') }}"
      class="
        group
        flex
        font-sans font-light
        items-center
        gap-4
        text-muted-800
        dark:text-white
      "
    >
      <div
        class="
          h-12
          w-12
          group-hover:text-primary-500
          transition-colors
          duration-300
        "
      >
      </div>
    </a>
    <!--Desktop button-->
    <button
      type="button"
      class="
        ml-auto
        h-10
        w-10
        hidden
        lg:flex
        items-center
        justify-center
        hover:bg-muted-100
        dark:hover:bg-muted-800
        transition-colors
        duration-300
      "
      @click="$store.app.isSidebarActive = false"
    >
      <i
        class="iconify w-5 h-5 text-muted-600 dark:text-muted-200"
        data-icon="lucide:arrow-left"
      ></i>
    </button>
    <!--Mobile button-->
    <button
      type="button"
      class="
        ml-auto
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
      @click="$store.app.isSidebarMobileActive = false"
    >
      <i
        class="iconify w-5 h-5 text-muted-600 dark:text-muted-200"
        data-icon="lucide:arrow-left"
      ></i>
    </button>
  </div>
  <div class="w-full h-[calc(100%_-_80px)] flex flex-col py-6 px-4">
    <ul>
      <li>
        <a
          href="{{ url('/dashboard') }}"
          class="flex items-center gap-3 p-4 transition-colors duration-300"
          :class="$store.app.activeApp === 'dashboard' ? 'text-muted-800 dark:text-muted-100 bg-muted-100 dark:bg-muted-800' : 'text-muted-500 dark:text-muted-400/80 hover:bg-muted-50 dark:hover:bg-muted-800/50'"
          @click="$store.app.activeApp = 'dashboard', $store.isSidebarMobileActive = false"
        >
          <i
            class="iconify w-5 h-5"
            :class="$store.app.activeApp === 'dashboard' ? 'text-primary-500' : 'text-muted-500'"
            data-icon="ph:grid-four-duotone"
          ></i>
          <span class="font-sans">Dashboard</span>
        </a>
      </li>
      <li>
        <a
          href="{{ url('/account') }}"
          class="flex items-center gap-3 p-4 transition-colors duration-300"
          :class="$store.app.activeApp === 'account' ? 'text-muted-800 dark:text-muted-100 bg-muted-100 dark:bg-muted-800' : 'text-muted-500 dark:text-muted-400/80 hover:bg-muted-50 dark:hover:bg-muted-800/50'"
          @click="$store.app.activeApp = 'account', $store.isSidebarMobileActive = false"
        >
          <i
            class="iconify w-5 h-5"
            :class="$store.app.activeApp === 'account' ? 'text-primary-500' : 'text-muted-500'"
            data-icon="ph:user-duotone"
          ></i>
          <span class="font-sans text-muted-800 dark:text-muted-500">
            Account
          </span>
        </a>
      </li>
      <li>
        <a
          href="{{ url('/') }}"
          class="flex items-center gap-3 p-4 transition-colors duration-300"
          :class="$store.app.activeApp === 'accueil' ? 'text-muted-800 dark:text-muted-100 bg-muted-100 dark:bg-muted-800' : 'text-muted-500 dark:text-muted-400/80 hover:bg-muted-50 dark:hover:bg-muted-800/50'"
          @click="$store.app.activeApp = 'accueil', $store.isSidebarMobileActive = false"
        >
          <i
            class="iconify w-5 h-5"
            :class="$store.app.activeApp === 'accueil' ? 'text-primary-500' : 'text-muted-500'"
            data-icon="ph:house-duotone"
          ></i>
          <span class="font-sans text-muted-800 dark:text-muted-500">
            Accueil
          </span>
        </a>
      </li>
    </ul>
    <!--Bottom-->
    <div class="mt-auto">
      <ul>
        <li>
          <a
            href="#"
            onclick="document.getElementById('formLogout').submit()"
            class="
              flex
              items-center
              gap-3
              p-4
              hover:bg-muted-100
              dark:hover:bg-muted-800
              transition-colors
              duration-300
            "
          >
            <i
              class="iconify w-5 h-5 text-muted-500"
              data-icon="ph:sign-out-duotone"
            ></i>
            <span class="font-sans text-muted-800 dark:text-muted-500">
              Logout
            </span>
            <form id="formLogout" method="POST" action="{{ route('login.toLogout') }}">
              @csrf
            </form>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>