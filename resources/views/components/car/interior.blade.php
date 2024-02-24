<div
  id="vehicle-interior"
  class="
    w-full
    py-12
    px-4
    border-t border-muted-200
    dark:border-muted-800
    overflow-hidden
  "
>
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
      Intérieur
    </h2>
    <!--Subtitle-->
    <p class="font-sans font-light text-lg text-muted-500 dark:text-muted-400">
      {{ $descriptions['principalInterior'] }}
    </p>
  </div>

  <div class="max-w-3xl">
    <!--Images-->
    <div class="grid grid-cols-12 gap-4 mb-6">
      <img
        class="col-span-12"
        src="{{ asset($photos['int0']) }}"
        alt="Vehicle image"
      />
      <img
        class="col-span-6"
        src="{{ asset($photos['int1']) }}"
        alt="Vehicle image"
      />
      <img
        class="col-span-6"
        src="{{ asset($photos['int2']) }}"
        alt="Vehicle image"
      />
    </div>
    <!--Content-->
    <div class="grid grid-cols-2 gap-6">
      <div>
        <h4 class="font-medium text-lg text-muted-800 dark:text-muted-100">
          {{ $descriptions['interiorTitle1'] }}
        </h4>
        <p class="text-sm text-muted-500 dark:text-muted-400">
          {{ $descriptions['interior1'] }}
        </p>
      </div>
      <div>
        <h4 class="font-medium text-lg text-muted-800 dark:text-muted-100">
          {{ $descriptions['interiorTitle2'] }}
        </h4>
        <p class="text-sm text-muted-500 dark:text-muted-400">
          {{ $descriptions['interior2'] }}
        </p>
      </div>
    </div>
  </div>
</div>
