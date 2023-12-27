<div x-show="activeTab === 'cash'">
  <!--Pricing-->
  <div
    x-show="activeOption === 'standard'"
    class="flex items-center justify-between"
  >
    <div class="font-sans">
      <h4 class="font-semibold text-muted-800 dark:text-muted-200">Tarifs</h4>
      <p class="text-sm text-muted-500">Pour une location à la journée</p>
    </div>
  </div>
  <!--Pricing-->
  <div
    x-show="activeOption === 'premium'"
    class="flex items-center justify-between"
  >
    <div class="font-sans">
      <h4 class="font-semibold text-muted-800 dark:text-muted-200">Tarifs</h4>
      <p class="text-sm text-muted-500">Pour une location à la journée le week end, samedi et dimanche une majoration s'applique.</p>
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
            Journée simple
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
              <span class="font-sans text-sm text-muted-400">Jour simple</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                -prixVoiture-€
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
            Journée week end
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
              <span class="font-sans text-sm text-muted-400">Jour simple</span>
              <span
                class="
                  font-sans font-semibold
                  text-sm text-muted-800
                  dark:text-muted-100
                "
              >
                -prixVoiture-€¨(+30%)
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
    </div>
  </div>
</div>
