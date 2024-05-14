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
    <body class="bg-muted-100 dark:bg-muted-900 transition-all duration-300">
    <!-- prettier-ignore -->

    <!-- Sidebar -->
    <x-navbar.sidebar :brands="$brandsNav" :types="$typesNav"/>

    <main
        x-cloak
        class="
            relative
            z-10
            bg-muted-100
            dark:bg-muted-1000
            transition-all
            duration-300
            overflow-hidden
        "
        :class="$store.app.isSidebarActive ? 'w-full lg:max-w-[calc(100%_-_250px)] lg:ml-[250px]' : 'w-full'"
    >
    <!--Container-->
    <div
        class="
        w-full
        min-h-screen
        mx-auto
        transition-all
        duration-300
        "
    >
        <!-- Renders the page body -->
        {{ $slot }}
    </div>
    </main>

    <!--Back to top button-->
    <x-layouts.backtotop />


    </body>
</html>