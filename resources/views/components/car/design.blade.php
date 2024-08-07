<div id="vehicle-design" class="w-full py-12 px-4 overflow-hidden">
  <!--Section title-->
  <div class="w-full max-w-lg space-y-4 py-6">
    <!--Title-->
    <h2
      class="
        font-heading font-light
        text-4xl
        md:text-5xl
        text-muted-800
        dark:text-white
      "
    >
      Design
    </h2>
    <!--Subtitle-->
    <p class="font-sans font-light text-lg text-muted-500 dark:text-muted-400">
      {{ $descriptions['design'] }}
    </p>
  </div>

  <div class="max-w-3xl">
    <!--Image-->
    <img
      class="max-w-xl"
      src="{{ asset($photos['lateral']) }}"
      alt="Vehicle image"
    />
    <!--Icon features-->
    <div class="grid xs:grid-cols-2 grid-cols-3 gap-4 mt-6">
      <div class="font-sans">
        <i
          class="iconify w-8 h-8 mb-2 text-primary-500"
          data-icon="ph:wave-square-duotone"
        ></i>
        <h4 class="font-medium text-muted-800 dark:text-muted-100">
          {{ $descriptions['miniTitre1'] }}
        </h4>
        <p class="text-sm text-muted-500 dark:text-muted-400">
          {{ $descriptions['mini1'] }}
        </p>
      </div>
      <div class="font-sans">
        <i
          class="iconify w-8 h-8 mb-2 text-primary-500"
          data-icon="ph:headlights-duotone"
        ></i>
        <h4 class="font-medium text-muted-800 dark:text-muted-100">
          {{ $descriptions['miniTitre2'] }}
        </h4>
        <p class="text-sm text-muted-500 dark:text-muted-400">
          {{ $descriptions['mini2'] }}
        </p>
      </div>
      <div class="font-sans">
        <i
          class="iconify w-8 h-8 mb-2 text-primary-500"
          data-icon="ph:gauge-duotone"
        ></i>
        <h4 class="font-medium text-muted-800 dark:text-muted-100">
          {{ $descriptions['miniTitre3'] }}
        </h4>
        <p class="text-sm text-muted-500 dark:text-muted-400">
        {{ $descriptions['mini3'] }}
        </p>
      </div>
    </div>
  </div>
</div>
