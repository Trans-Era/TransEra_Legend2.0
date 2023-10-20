<!DOCTYPE html>
<html
    lang="en"
    x-data="layout()"
    :class="{
    'dark': $store.app.isDark,
    '': !$store.app.isDark
    }"
    >
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/png" href="/img/favicon.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Finity - Tailwind CSS Car retailer template</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,300;8..144,400;8..144,500;8..144,600&display=swap"
        rel="stylesheet"
        />
        {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
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
