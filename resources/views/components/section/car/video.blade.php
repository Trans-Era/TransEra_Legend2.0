<section class="w-full py-12 px-4 bg-white dark:bg-muted-900 overflow-hidden">
  <div class="w-full max-w-7xl mx-auto">
    <!--Section title-->
    <div class="w-full max-w-xl mx-auto text-center space-y-4 py-6">
      <!--Badge-->
      <span class="
          inline-block
          font-sans
          text-xs
          py-1.5
          px-3
          m-1 rounded-full
          bg-primary-100
          text-primary-500
          dark:bg-primary-500 dark:text-white
        ">
        Notre media
      </span>
      <!--Title-->
      <h2 class="
          font-heading font-light
          text-4xl
          md:text-5xl
          text-muted-800
          dark:text-white
        ">
        Experience Visuelle
      </h2>
      <!--Subtitle-->
      <p class="font-sans font-light text-lg text-muted-500 dark:text-muted-400">
        Pourquoi avoir que des simple images quand une video d'une Mustang peut vous transporter bien
        plus simplement et plus loin. (cliquez sur l'image)
      </p>
    </div>

    <!--Video-->
    <div x-data="{ videoPlaying: false }" class="relative w-full">
      <video id="myVideo" x-ref="video" class="w-full h-auto" controls>
        <source src="{{ asset('video/mustang.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div
        x-show="!videoPlaying"s
        @click="videoPlaying = true; $refs.video.play();"
        class="absolute inset-0 flex items-center justify-center bg-cover bg-no-repeat bg-center"
        style="background-image: url('/img/illustrations/car/profil.png');"
      >
      </div>
    </div>
  </div>
</section>