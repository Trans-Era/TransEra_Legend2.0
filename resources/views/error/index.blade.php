<!--Start Layout-->
<x-minimal-layout>

<!--Error screen-->
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
  <!--Fake nav-->
  <div class="absolute top-0 left-0 w-full">
    <div
      class="
        w-full
        max-w-7xl
        mx-auto
        h-16
        flex
        items-center
        justify-between
        px-4
      "
    >
      <!--Logo-->
      <a
        href="/home.html"
        class="
          flex
          title-font
          font-medium
          items-center
          text-muted-900
          dark:text-muted-100
        "
      >
        <img
          class="h-11"
          src="/img/logo/logo-square.svg"
          alt="Mistral logo"
          width="48"
          height="48"
        />
        <span class="font-heading font-light text-2xl ml-3">TransEra Legend</span>
      </a>

      <!--Theme toggler-->
      <div><x-theme.toggler-base/></div>
    </div>
  </div>

  <div class="w-full h-full flex items-center justify-center">
    <div class="relative w-full max-w-2xl mx-auto">
      <!--Error-->
      <div class="flex flex-col gap-4 mt-12">
        <div class="relative w-full">
          <img
            class="
              relative
              block
              dark:hidden
              w-full
              max-w-sm
              mx-auto
              object-contain
              z-20
            "
            src="/img/illustrations/404.svg"
            alt="Error illustration"
            width="384"
            height="384"
          />
          <img
            class="
              relative
              hidden
              dark:block
              w-full
              max-w-sm
              mx-auto
              object-contain
              z-20
            "
            src="/img/illustrations/404-dark.svg"
            alt="Error illustration"
            width="384"
            height="384"
          />
          <div
            class="
              absolute
              inset-x-0
              top-1/2
              -translate-y-1/2
              hidden
              ptablet:block
              ltablet:block
              lg:block
              ptablet:-translate-x-10
              ltablet:-translate-x-24
              lg:-translate-x-24
              z-10
              text-center
            "
          >
            <span
              class="
                font-heading font-extrabold
                text-[15rem]
                ptablet:text-[22rem]
                ltablet:text-[26rem]
                lg:text-[26rem]
                text-black
                dark:text-white
                opacity-5
              "
            >
              404
            </span>
          </div>
        </div>
        <div class="mt-4 text-center relative z-20">
          <h2
            class="
              font-heading
              text-4xl
              leading-9
              font-light
              text-muted-800
              dark:text-muted-100
              mb-2
            "
          >
            Nous n’avons pas trouvé cette page
          </h2>
          <p class="w-full max-w-md mx-auto font-sans text-lg text-muted-400">
            Désolé, il semble que cette page n'existe pas ou soit en cours de maintenance. Si vous rencontrez à nouveau ce problème, 
            veuillez contacter un administrateur du site.
          </p>
          <!--Link-->
          <a
            class="
              group
              inline-flex
              items-center
              gap-2
              text-primary-500
              hover:text-primary-400
              transition-colors
              duration-300
              cursor-pointer
              mt-4
            "
            onclick="history.go(-1)"
          >
            <i
              class="
                iconify
                w-5
                h-5
                group-hover:-translate-x-1
                transition-transform
                duration-300
              "
              data-icon="lucide:arrow-left"
            ></i>
            <span class="font-sans font-medium text-lg">Retour</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--End Layout-->
</x-minimal-layout>
