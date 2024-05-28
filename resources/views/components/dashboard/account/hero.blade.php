<div class="py-8 px-4 md:px-6 pb-24">
  <!--Profile block-->
  <div class="text-center w-full max-w-4xl mx-auto my-6">
    <div class="relative h-24 w-24 rounded-full mx-auto mb-4">
      <img class="rounded-full" src="/img/photo/pp.webp" alt="User image" />
      <button
        class="
          absolute
          bottom-0
          right-0
          h-8
          w-8
          flex
          items-center
          justify-center
          rounded-full
          text-muted-800
          dark:text-muted-100
          border border-muted-200
          dark:border-muted-700
          bg-white
          dark:bg-muted-800
        "
      >
        <i class="iconify" data-icon="lucide:plus"></i>
      </button>
    </div>
    <h3
      class="font-sans font-light text-2xl text-muted-800 dark:text-muted-50"
    >
      {{ Auth::user()->name }}
    </h3>
    <p class="font-sans text-muted-400">{{ Auth::user()->city }}</p>
  </div>
  <!--Form block-->
  <div class="w-full max-w-xl mx-auto">
    <form class="space-y-12" method="POST" action="{{ route('account.update', Auth::user() ) }}">
      <!--Fieldset-->
      @csrf
      @method('PUT')
      <div>
        <h4
          class="
            font-sans
            text-xs
            tracking-wider
            uppercase
            text-muted-500
            pb-4
            mb-4
            border-b border-muted-200
            dark:border-muted-800
          "
        >
          A propos de vous
        </h4>
        <div class="grid md:grid-cols-2 gap-x-6 gap-y-4">
          <!--Input-->
          <div class="relative">
            <label class="font-sans text-sm text-muted-400">Votre nom et prénom</label>
            <div class="group relative">
              <input
                type="text"
                name="name"
                class="
                  pl-10
                  pr-3
                  py-2
                  h-10
                  text-sm
                  leading-5
                  font-sans
                  w-full
                  bg-white
                  text-muted-600
                  border border-muted-300
                  focus-visible:border-muted-300
                  focus-visible:shadow-lg
                  focus-visible:shadow-muted-300/50
                  dark:focus-visible:shadow-muted-800/50
                  placeholder:text-muted-300
                  dark:placeholder:text-muted-500
                  dark:bg-muted-800
                  dark:text-muted-200
                  dark:border-muted-700
                  dark:focus-visible:border-muted-600
                  focus-visible:ring-0
                  outline-transparent
                  focus-visible:outline-2
                  focus-visible:outline-dashed
                  focus-visible:outline-muted-300
                  dark:focus-visible:outline-muted-600
                  focus-visible:outline-offset-2
                  transition-all
                  duration-300
                "
                placeholder="Votre nom et prénom"
                value="{{ Auth::user()->name }}"
              />
              <div
                class="
                  absolute
                  top-0
                  left-0
                  h-10
                  w-10
                  flex
                  justify-center
                  items-center
                  text-muted-400
                  group-focus-within:text-primary-500
                  transition-colors
                  duration-300
                "
              >
                <i class="iconify w-4 h-4" data-icon="lucide:user"></i>
              </div>
            </div>
          </div>
          <!--Input-->
          <div class="relative">
            <label class="font-sans text-sm text-muted-400">Votre adresse</label>
            <div class="group relative">
              <input
                type="text"
                name="adress"
                class="
                  pl-10
                  pr-3
                  py-2
                  h-10
                  text-sm
                  leading-5
                  font-sans
                  w-full
                  bg-white
                  text-muted-600
                  border border-muted-300
                  focus-visible:border-muted-300
                  focus-visible:shadow-lg
                  focus-visible:shadow-muted-300/50
                  dark:focus-visible:shadow-muted-800/50
                  placeholder:text-muted-300
                  dark:placeholder:text-muted-500
                  dark:bg-muted-800
                  dark:text-muted-200
                  dark:border-muted-700
                  dark:focus-visible:border-muted-600
                  focus-visible:ring-0
                  outline-transparent
                  focus-visible:outline-2
                  focus-visible:outline-dashed
                  focus-visible:outline-muted-300
                  dark:focus-visible:outline-muted-600
                  focus-visible:outline-offset-2
                  transition-all
                  duration-300
                "
                placeholder="Votre adresse"
                value="{{ Auth::user()->adress }}"
              />
              <div
                class="
                  absolute
                  top-0
                  left-0
                  h-10
                  w-10
                  flex
                  justify-center
                  items-center
                  text-muted-400
                  group-focus-within:text-primary-500
                  transition-colors
                  duration-300
                "
              >
                <i class="iconify w-4 h-4" data-icon="lucide:user"></i>
              </div>
            </div>
          </div>
          <!--Input-->
          <div class="relative">
            <label class="font-sans text-sm text-muted-400">
              Votre adresse mail
            </label>
            <div class="group relative">
              <input
                type="text"
                name="email"
                class="
                  pl-10
                  pr-3
                  py-2
                  h-10
                  text-sm
                  leading-5
                  font-sans
                  w-full
                  bg-white
                  text-muted-600
                  border border-muted-300
                  focus-visible:border-muted-300
                  focus-visible:shadow-lg
                  focus-visible:shadow-muted-300/50
                  dark:focus-visible:shadow-muted-800/50
                  placeholder:text-muted-300
                  dark:placeholder:text-muted-500
                  dark:bg-muted-800
                  dark:text-muted-200
                  dark:border-muted-700
                  dark:focus-visible:border-muted-600
                  focus-visible:ring-0
                  outline-transparent
                  focus-visible:outline-2
                  focus-visible:outline-dashed
                  focus-visible:outline-muted-300
                  dark:focus-visible:outline-muted-600
                  focus-visible:outline-offset-2
                  transition-all
                  duration-300
                "
                placeholder="Votre adresse mail"
                value="{{ Auth::user()->email }}"
              />
              <div
                class="
                  absolute
                  top-0
                  left-0
                  h-10
                  w-10
                  flex
                  justify-center
                  items-center
                  text-muted-400
                  group-focus-within:text-primary-500
                  transition-colors
                  duration-300
                "
              >
                <i class="iconify w-4 h-4" data-icon="lucide:mail"></i>
              </div>
            </div>
          </div>
          <!--Input-->
          <div class="relative">
            <label class="font-sans text-sm text-muted-400">Votre date de naissance</label>
            <div class="group relative">
              <input
                type="text"
                name="birth"
                class="
                  pl-10
                  pr-3
                  py-2
                  h-10
                  text-sm
                  leading-5
                  font-sans
                  w-full
                  bg-white
                  text-muted-600
                  border border-muted-300
                  focus-visible:border-muted-300
                  focus-visible:shadow-lg
                  focus-visible:shadow-muted-300/50
                  dark:focus-visible:shadow-muted-800/50
                  placeholder:text-muted-300
                  dark:placeholder:text-muted-500
                  dark:bg-muted-800
                  dark:text-muted-200
                  dark:border-muted-700
                  dark:focus-visible:border-muted-600
                  focus-visible:ring-0
                  outline-transparent
                  focus-visible:outline-2
                  focus-visible:outline-dashed
                  focus-visible:outline-muted-300
                  dark:focus-visible:outline-muted-600
                  focus-visible:outline-offset-2
                  transition-all
                  duration-300
                "
                placeholder="Votre date de naissance"
                value="{{ Auth::user()->birth }}"
              />
              <div
                class="
                  absolute
                  top-0
                  left-0
                  h-10
                  w-10
                  flex
                  justify-center
                  items-center
                  text-muted-400
                  group-focus-within:text-primary-500
                  transition-colors
                  duration-300
                "
              >
                <i
                  class="iconify w-4 h-4"
                  data-icon="lucide:calendar-heart"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Fieldset-->
      
      <!--Save-->
      <div class="w-full -mt-4 md:col-start-2">
        <!--Button-->
        <button
          type="submit"
          class="
            relative
            font-sans font-normal
            inline-flex
            items-center
            justify-center
            leading-5
            no-underline
            mt-6
            w-full
            space-x-1
            text-white
            bg-muted-800
            dark:bg-primary-600
            h-12
            px-5
            py-3
            text-base
            hover:bg-muted-700
            dark:hover:bg-primary-500
            hover:shadow-xl hover:shadow-muted-300/20
            dark:hover:shadow-primary-600/20
            tw-accessibility
            transition-all
            duration-300
          "
        >
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</div>
