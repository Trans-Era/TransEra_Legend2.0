<section x-data="inventory()" class="w-full py-12 px-4 bg-muted-100 dark:bg-muted-1000">
    <div class="relative w-full h-full max-w-7xl mx-auto">

        <!--Inventory toolbar-->
        <x-car.index.grid-toolbar />

        <!--Grid wrapper-->
        <div class="py-10">
            <div class="grid grid-cols-12 md:gap-12 pb-20">

                <!--Filters-->
                <div class="hidden lg:block col-span-12 lg:col-span-3">
                    <x-car.index.grid-filters />
                </div>

                <!--Content-->
                <div class="col-span-12 lg:col-span-9">
                    <!--Subgrid-->
                    <x-car.index.grid-content />
                </div> 
            </div>
        </div>
    </div>
</section>
  