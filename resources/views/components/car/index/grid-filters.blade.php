<div class="px-2">
  <!--Filter group-->
  <div class="pb-10 border-b border-muted-200 dark:border-muted-800">
    <h3
      class="
        font-sans font-light
        text-lg
        mb-6
        text-muted-800
        dark:text-muted-100
      "
    >
      Maximum price
    </h3>
    <!--Select-->
    <div class="relative max-w-[210px]">
      <div class="relative group">
        <select title="select" class="appearance-none px-3 py-2 h-10 text-sm leading-5 font-sans w-full border border-muted-300 bg-white text-muted-600 placeholder-muted-300 focus-visible:border-muted-300 focus-visible:shadow-lg dark:placeholder-muted-600 dark:bg-muted-700 dark:text-muted-200 dark:border-muted-600 dark:focus-visible:border-muted-600 focus-visible:ring-0 outline-transparent focus-visible:outline-2 focus-visible:outline-dashed focus-visible:outline-muted-300 dark:focus-visible:outline-muted-600 focus-visible:outline-offset-2 transition-all duration-300">
          <option>No limit</option>
          <option>0 - $20,000</option>
          <option>$20,000 - $40,000</option>
          <option>$40,000 - $80,000</option>
          <option>$80,000 - $120,000</option>
          <option>More than $120,000</option>
        </select>
        <div class="absolute top-0 right-0 h-10 w-10 flex justify-center items-center text-muted-400 transition-transform duration-300 group-focus-within:-rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </div>
      </div>
    </div>
  </div>
  <!--Filter group-->
  <div class="pt-6 pb-10 border-b border-muted-200 dark:border-muted-800">
    <h3
      class="
        font-sans font-light
        text-lg
        mb-6
        text-muted-800
        dark:text-muted-100
      "
    >
      Driving concept
    </h3>
    <!--Radio options-->
    <div class="space-y-4">
      
      <!--Radio Option-->
      <div class="flex items-center gap-3 cursor-pointer">
        @foreach($types as $type)
        <div
          class="
            bg-white
            dark:bg-muted-900
            rounded-full
            w-4
            h-4
            flex flex-shrink-0
            justify-center
            items-center
            relative
          "
        >
          <input
            id="radio-0"
            type="radio"
            name="radio_concept"
            class="
              peer
              appearance-none
              ring-offset-white
              dark:ring-offset-muted-900
              focus:opacity-100
              focus:ring-2
              focus:ring-offset-2
              focus:ring-primary-600
              focus:outline-none
              border
              rounded-full
              border-muted-400
              absolute
              cursor-pointer
              w-full
              h-full
              checked:border-none
            "
            checked
          />
          <div
            class="
              border-2 border-transparent
              peer-checked:border-primary-600
              rounded-full
              w-full
              h-full
              z-1
            "
          ></div>
        </div>
        <label
          for="radio-0"
          class="
            ml-2
            text-sm
            leading-4
            font-normal
            text-muted-800
            dark:text-muted-400
          "
        >
          {{ $type->name }}
        </label>
        @endforeach
      </div>
    </div>
  </div>
</div>
