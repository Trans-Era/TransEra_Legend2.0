<section
  class="
    relative
    w-full
    h-screen
    py-12
    px-4
    bg-muted-100
    dark:bg-muted-900
    overflow-hidden
  "
>
  <!--Pill nav-->
  <x-navbar.pill/>

  <!--Map body-->
  <div class="absolute inset-0 bg-muted-300 dark:bg-muted-900">
    <iframe
      width="100%"
      height="100%"
      frameborder="0"
      marginheight="0"
      marginwidth="0"
      title="map"
      scrolling="no"
      src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=49.6116,6.1319&amp;ie=UTF8&amp;t=&amp;z=9&amp;iwloc=B&amp;output=embed"
      style="filter: grayscale(1) contrast(1.2) opacity(0.4)"
    ></iframe>
  </div>
  <div class="w-full max-w-7xl px-5 py-24 mx-auto flex">
    <!--Contact form-->
    <div
      class="
        lg:w-1/3
        md:w-1/2
        bg-white
        dark:bg-muted-800
        rounded
        p-8
        flex flex-col
        md:ml-auto
        w-full
        mt-10
        md:mt-0
        relative
        shadow-xl shadow-muted-400/10
        dark:shadow-muted-800/10
        z-10
      "
    >
      <h2
        class="
          font-heading
          text-muted-800
          dark:text-white
          text-xl
          mb-1
          font-medium
        "
      >
        Contact
      </h2>
      <p
        class="font-sans leading-tight mb-5 text-muted-500 dark:text-muted-400"
      >
      Posez-nous votre question, nous y répondrons dans les plus brefs délais.
      </p>
      <input
        class="
          bg-white
          dark:bg-muted-700
          border border-muted-300
          dark:border-muted-500
          focus:shadow-xl focus:shadow-muted-400/10
          dark:focus:shadow-muted-800/10
          placeholder:text-muted-300
          dark:placeholder:text-muted-500
          text-base text-muted-600
          dark:text-muted-200
          px-4
          py-2
          mb-4
          transition-all
          duration-300
          tw-accessibility
        "
        id="name"
        placeholder="Votre nom"
        type="name"
      />
      <input
        class="
          bg-white
          dark:bg-muted-700
          border border-muted-300
          dark:border-muted-500
          focus:shadow-xl focus:shadow-muted-400/10
          dark:focus:shadow-muted-800/10
          placeholder:text-muted-300
          dark:placeholder:text-muted-500
          text-base text-muted-600
          dark:text-muted-200
          px-4
          py-2
          mb-4
          transition-all
          duration-300
          tw-accessibility
        "
        id="email"
        placeholder="Votre adresse mail"
        type="email"
      />
      <textarea
        class="
          bg-white
          dark:bg-muted-700
          border border-muted-300
          dark:border-muted-500
          focus:shadow-xl focus:shadow-muted-400/10
          dark:focus:shadow-muted-800/10
          placeholder:text-muted-300
          dark:placeholder:text-muted-500
          text-base text-muted-600
          dark:text-muted-200
          h-32
          px-4
          py-2
          mb-4
          resize-none
          transition-all
          duration-300
          tw-accessibility
        "
        id="body"
        placeholder="Votre message"
      ></textarea>
      <button
        class="
          font-sans
          text-white
          bg-primary-500
          border-0
          py-3
          px-6
          focus:outline-none
          hover:bg-primary-600
          text-base
          hover:shadow-xl hover:shadow-primary-500/20
          transition-all
          duration-300
        "
        onclick="sendMail()"
      >
        Send Message
      </button>
    </div>
  </div>
</section>