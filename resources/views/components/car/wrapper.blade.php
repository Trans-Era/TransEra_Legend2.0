<section class="w-full py-12 px-4 bg-muted-100 dark:bg-muted-1000 xs:overflow-hidden">
  <div class="w-full max-w-7xl mx-auto">
    <!--Grid-->
    <div
      class="
        w-full
        flex flex-col
        ltablet:flex-row
        lg:flex-row
        gap-0
        ltablet:gap-10
        lg:gap-28
      "
    >
      <!--Column-->
      <div class="w-full ltablet:w-7/12 lg:w-8/12">
        <!--Design-->
        <x-car.design :car='$car' :descriptions='$descriptions' :photos='$photos'/>
        <!--Interior--> 
        <x-car.interior :car='$car' :descriptions='$descriptions' :photos='$photos'/>
        <!--CTA-->
        <x-car.cta :car='$car'/>
      </div>
      <!--Column-->
      <div class="w-full ltablet:w-5/12 lg:w-4/12">
        <div class="h-full pt-10">
          <!--Purchase vehicle-->
          <x-car.purchase :car='$car'/>
        </div>
      </div>
    </div>
  </div>
</section>
