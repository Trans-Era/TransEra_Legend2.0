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

    <main class="w-full">
      <!-- Renders the page body -->
      {{ $slot }}
    </main>

  </body>
</html>
