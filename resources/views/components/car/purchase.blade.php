<div
  class="
    sticky
    inset-x-0
    top-28
    left-0
    p-5
    md:p-8
    ptablet:max-w-md ptablet:mx-auto ptablet:-mt-8
    ltablet:p-6
    bg-white
    dark:bg-muted-900
    border border-muted-200
    dark:border-muted-800
    rounded-md
    shadow-xl shadow-muted-400/10
    dark:shadow-muted-800/10
  "
>
  <div class="w-full">
    <div class="w-full relative flex rounded-md bg-muted-100 dark:bg-muted-800">
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        :class="activeTab === 'cash'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        data-tab="cash"
        @click.prevent="toggleTabs($event)"
      >
        Jour
      </a>
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        :class="activeTab === 'lease'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        data-tab="lease"
        @click.prevent="toggleTabs($event)"
      >
        Semaine
      </a>
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        data-tab="loan"
        :class="activeTab === 'loan'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        @click.prevent="toggleTabs($event)"
      >
        Mois
      </a>
      <span
        class="
          block
          absolute
          h-full
          w-1/3
          rounded-md
          bg-white
          dark:bg-muted-1000
          border border-muted-200
          dark:border-muted-800
          shadow-xl shadow-muted-400/10
          dark:shadow-muted-800/10
          transition-all
          duration-300
        "
        :class="[
                    activeTab === 'cash' && 'ml-0' ,
                    activeTab === 'lease' && 'ml-[33.3%]' ,
                    activeTab === 'loan' && 'ml-[66.6%]' 
                  ]"
      ></span>
    </div>

    <!--Content-->
    <div class="w-full pt-6">
      <!--Cash-->
      <x-car.purchase.cash :car='$car'/>
      <!--Lease-->
      <x-car.purchase.lease :car='$car'/>
      <!--Loan-->
      <x-car.purchase.loan :car='$car'/>
    </div>
  </div>
</div>
