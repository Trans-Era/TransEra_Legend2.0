<section class="w-full py-12 px-4 bg-white dark:bg-muted-900 overflow-hidden">
    <div class="w-full max-w-7xl mx-auto">
      <!--Section title-->
      <div class="w-full max-w-xl mx-auto text-center space-y-4 py-6">
        <!--Badge-->
        <span
          class="
            inline-block
            font-sans
            text-xs
            py-1.5
            px-3
            m-1 rounded-full
            bg-primary-100
            text-primary-500
            dark:bg-primary-500 dark:text-white
          "
        >
          Unforgettable
        </span>
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
          Share the Experience
        </h2>
        <!--Subtitle-->
        <p
          class="font-sans font-light text-lg text-muted-500 dark:text-muted-400"
        >
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tum Torquatus:
          Prorsus, inquit, assentior.
        </p>
      </div>
  
      <!--Video-->
      <div class="w-full max-w-4xl mx-auto py-6">
        <video id="myVideo" x-ref="video" class="w-full h-auto" controls>
          <source src="{{ asset('video/mustang.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </section>
  