<section class="w-full py-12 px-4 bg-white dark:bg-muted-900 overflow-hidden">
  <div class="w-full max-w-6xl mx-auto">
    <!--Section title-->
    <div class="w-full max-w-xl space-y-2 py-6">
      <h2
        class="
          font-heading font-light
          text-3xl
          md:text-4xl
          text-muted-800
          dark:text-white
        "
      >
        Nos Marques
      </h2>
      <!--Subtitle-->
      <p
        class="font-sans font-light text-lg text-muted-500 dark:text-muted-400"
      >
        Nous travaillons avec des marques exclusives Américaine qui reflète le sport ou le luxe afin de cibler une clientèle haut de gamme. Voici quelques-unes d'entre elles :
      </p>
    </div>

    <!--Grid-->
    <div class="relative w-full max-w-6xl mx-auto py-10 grid grid-cols-2 ptablet:grid-cols-4 ltablet:grid-cols-5 lg:grid-cols-5 gap-10">
    @foreach($brands as $brand)
      <!--Grid item-->
      <div class="group flex flex-col text-center">
        <div
          class="
            h-16
            w-16
            mx-auto
            mb-4
            text-muted-500
            group-hover:text-primary-500
            transition-colors
            duration-300
          "
        >
            <img src="{{ asset($brand->icon) }}" alt="{{ $brand->name }}" />
        </div>
        <div>
          <h3
            class="
              font-sans font-medium
              text-lg text-muted-800
              dark:text-muted-100
            "
          >
            {{ $brand->name }}
          </h3>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
