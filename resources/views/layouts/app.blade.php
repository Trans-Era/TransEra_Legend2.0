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
        <x-navbar.navbar-static />

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
        {{-- {{> footer/footer}}

        <!--Back to top button-->
        {{> misc/backtotop}} --}}
    </body>
</html>
