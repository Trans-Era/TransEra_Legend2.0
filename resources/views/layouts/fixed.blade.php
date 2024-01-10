<!DOCTYPE html>
<html
  lang="en"
  x-data="layout()"
  :class="{
  'dark': $store.app.isDark,
  '': !$store.app.isDark
}"
>
  <x-layouts.head />
  <body class="w-full h-full bg-white dark:bg-muted-900">
    <!-- prettier-ignore -->

    <!--Site navbar-->
    <x-navbar.fixed/>

    <main
      class="relative w-full transition-all duration-300 z-10"
    >
      <!--Container-->
      <div
        class="
          w-full
          min-h-screen
          mx-auto
          bg-white
          dark:bg-muted-900
        "
      >

        <!-- Renders the page body -->
        {{ $slot }}
      </div>
    </main>

    <!--Footer-->
    <x-layouts.footer />

    <!--Back to top button-->
    <x-layouts.backtotop />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="/scripts/main.js"></script>
  </body>
</html>