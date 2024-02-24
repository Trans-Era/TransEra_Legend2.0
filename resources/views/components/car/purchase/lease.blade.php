<div x-show="activeTab === 'lease'">
  <!--Pricing-->
  <div
    x-show="activeOption === 'standard'"
    class="flex items-center justify-between"
  >
    <div class="font-sans">
      <h4 class="font-semibold text-muted-800 dark:text-muted-200">Tarifs</h4>
      <p class="text-sm text-muted-500">Pour une location d'une semaine, une remise de 20% s'applique sur le cout total.</p>
    </div>
  </div>
  <!--Pricing-->
  <div
    x-show="activeOption === 'premium'"
    class="flex items-center justify-between"
  >
    <div class="font-sans">
      <h4 class="font-semibold text-muted-800 dark:text-muted-200">Tarifs</h4>
      <p class="text-sm text-muted-500">Location du samedi au lundi, qui est plus avantageux que si vous prenez les jours séparement</p>
    </div>
  </div>
  <!--Pricing-->
  <div
    x-show="activeOption === 'luxury'"
    class="flex items-center justify-between"
  >
    <div class="font-sans">
      <h4 class="font-semibold text-muted-800 dark:text-muted-200">Pack 3 journées</h4>
      <p class="text-sm text-muted-500">Ce pack n'est pas compatible avec le weekend (Samedi et dimanche), il vous permet d'avoir une remise de 20%.</p>
    </div>
  </div>
  <!--Cash options-->
  <div class="w-full mt-6">
    <div class="border border-muted-200 dark:border-muted-800">
      <!--Cash option-->
      <div class="w-full">
        <!--trigger-->
        <button
          type="button"
          class="w-full flex items-center gap-3 p-4 text-left"
          @click="activeOption = 'standard'"
        >
          <span
            class="flex items-center justify-center h-5 w-5 rounded-full border"
            :class="activeOption === 'standard' ? 'border-primary-500' : 'border-muted-200 dark:border-muted-800'"
          >
            <span
              class="
                block
                h-1.5
                w-1.5
                rounded-full
                bg-primary-500
                transition-transform
                duration-300
              "
              :class="activeOption === 'standard' ? '' : 'scale-0'"
            ></span>
          </span>
          <span
            class="
              block
              font-sans font-semibold
              text-muted-800
              dark:text-muted-200
            "
          >
            Semaine complete
          </span>
          <span class="ml-auto flex items-center justify-center text-muted-500">
            <i
              class="iconify w-4 h-4 transition-transform duration-300"
              :class="activeOption === 'standard' ? 'rotate-180' : ''"
              data-icon="lucide:chevron-down"
            ></i>
          </span>
        </button>
        <!--Content-->
        <div x-show="activeOption === 'standard'" x-collapse class="px-4 pb-4">
          <ul class="space-y-2">
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">Semaine</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                {{ $car->getWeekPrice() }}€
              </span>
            </li>
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">km autorisé/jour</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                250
              </span>
            </li>
          </ul>
        </div>
      </div>
      <!--Cash option-->
      <div class="w-full border-t border-muted-200 dark:border-muted-800">
        <!--trigger-->
        <button
          type="button"
          class="w-full flex items-center gap-3 p-4 text-left"
          @click="activeOption = 'premium'"
        >
          <span
            class="flex items-center justify-center h-5 w-5 rounded-full border"
            :class="activeOption === 'premium' ? 'border-primary-500' : 'border-muted-200 dark:border-muted-800'"
          >
            <span
              class="
                block
                h-1.5
                w-1.5
                rounded-full
                bg-primary-500
                transition-transform
                duration-300
              "
              :class="activeOption === 'premium' ? '' : 'scale-0'"
            ></span>
          </span>
          <span
            class="
              block
              font-sans font-semibold
              text-muted-800
              dark:text-muted-200
            "
          >
            Week end complet
          </span>
          <span class="ml-auto flex items-center justify-center text-muted-500">
            <i
              class="iconify w-4 h-4 transition-transform duration-300"
              :class="activeOption === 'premium' ? 'rotate-180' : ''"
              data-icon="lucide:chevron-down"
            ></i>
          </span>
        </button>
        <!--Content-->
        <div x-show="activeOption === 'premium'" x-collapse class="px-4 pb-4">
          <ul class="space-y-2">
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">Week end</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                {{ $car->getWeekEndPrice() }}€
              </span>
            </li>
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">km autorisé/jour</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                300
              </span>
            </li>
          </ul>
        </div>
      </div>
      <!--Cash option-->
      <div class="w-full border-t border-muted-200 dark:border-muted-800">
        <!--trigger-->
        <button
          type="button"
          class="w-full flex items-center gap-3 p-4 text-left"
          @click="activeOption = 'luxury'"
        >
          <span
            class="flex items-center justify-center h-5 w-5 rounded-full border"
            :class="activeOption === 'luxury' ? 'border-primary-500' : 'border-muted-200 dark:border-muted-800'"
          >
            <span
              class="
                block
                h-1.5
                w-1.5
                rounded-full
                bg-primary-500
                transition-transform
                duration-300
              "
              :class="activeOption === 'luxury' ? '' : 'scale-0'"
            ></span>
          </span>
          <span
            class="
              block
              font-sans font-semibold
              text-muted-800
              dark:text-muted-200
            "
          >
            Pack 3 journées
          </span>
          <span class="ml-auto flex items-center justify-center text-muted-500">
            <i
              class="iconify w-4 h-4 transition-transform duration-300"
              :class="activeOption === 'luxury' ? 'rotate-180' : ''"
              data-icon="lucide:chevron-down"
            ></i>
          </span>
        </button>
        <!--Content-->
        <div x-show="activeOption === 'luxury'" x-collapse class="px-4 pb-4">
          <ul class="space-y-2">
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">3 jours</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
              {{ $car->get3dayPrice() }}€
              </span>
            </li>
            <li class="flex items-center justify-between">
              <span class="font-sans text-sm text-muted-400">km autorisé/jour</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                250
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div
    class="
      relative
      font-sans font-normal
      inline-flex
      items-center
      justify-center
      leading-5
      no-underline
      mt-6
      w-full
      space-x-1
      text-white
      bg-muted-800
      dark:bg-primary-600
      h-10
      px-5
      py-3
      text-base
      hover:bg-muted-700
      dark:hover:bg-primary-500
      hover:shadow-xl hover:shadow-muted-300/20
      dark:hover:shadow-primary-600/20
      tw-accessibility
      transition-all
      duration-300
    "
  >
    Contactez nous
  </div>
</div>