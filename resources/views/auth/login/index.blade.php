@section('meta_title', 'Connexion - Historique location Mustang')
@section('meta_description', 'En vous connectant, vous bénéficiez de fonctionnalités telles qu un historique avec des factures, ainsi que des réductions via notre système de réduction.')

<x-minimal-layout>
    <div class="min-h-screen bg-white dark:bg-muted-800 flex">
      <div
        class="
          hidden
          lg:flex
          items-center
          justify-center
          lg:w-3/5
          relative
          w-0
          flex-1
          bg-muted-100
          dark:bg-muted-1000
        "
        data-background="{{ asset('img/login/city.webp') }}"
      ></div>
      <div
        class="
          relative
          flex-1 flex flex-col
          justify-center
          py-12
          px-6
          lg:flex-none lg:w-2/5
        "
      >
        <div class="relative mx-auto w-full max-w-sm bg-white dark:bg-muted-800">
          <!--Nav-->
          <div
            class="
              absolute
              -top-16
              right-0
              w-full
              flex
              items-center
              justify-between
            "
          >
            <a
              href="{{ url('/') }}"
              class="
                flex
                items-center
                gap-2
                font-sans font-medium
                text-muted-400
                hover:text-primary-500
                transition-colors
                duration-300
              "
            >
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" viewBox="0 0 24 24" data-icon="gg:arrow-long-left" class="iconify w-5 h-5 iconify--gg"><path fill="currentColor" d="m1.027 11.993l4.235 4.25L6.68 14.83l-1.821-1.828L22.974 13v-2l-18.12.002L6.69 9.174L5.277 7.757l-4.25 4.236Z"></path></svg>
              <span>Retour</span>
            </a>
            <!--Theme button-->
            <!-- theme/theme-toggler-base -->
          </div>
          <div>
            <h2
              class="
                font-heading
                mt-6
                text-3xl
                leading-9
                font-light
                text-muted-800
                dark:text-muted-100
              "
            >
              Ah, vous revoilà !
            </h2>
            <p class="font-sans text-sm text-muted-400 mb-6">
              Heureux de vous revoir.
            </p>
          </div>
    
          <!--Form section-->
          <div class="mt-6">
            <div class="mt-5">
              <!--Form-->
              <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <!--Field-->
                <div>
                  <label
                    for="email"
                    class="
                      block
                      font-sans
                      text-sm
                      font-medium
                      leading-5
                      text-muted-700
                      dark:text-muted-500
                    "
                  >
                    Adresse email
                  </label>
                  <div class="mt-1 shadow-sm">
                    <input
                      class="
                        w-full
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
                        transition-all
                        duration-300
                        tw-accessibility
                      "
                      placeholder="Adresse email"
                      id="email" 
                      type="email"
                      name="email"
                    />
                  </div>
                </div>
    
                <!--Field-->
                <div class="mt-5">
                  <label
                    for="password"
                    class="
                      block
                      font-sans
                      text-sm
                      font-medium
                      leading-5
                      text-muted-700
                      dark:text-muted-500
                    "
                  >
                    Mot de passe
                  </label>
                  <div class="mt-1 shadow-sm">
                    <input
                      class="
                        w-full
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
                        transition-all
                        duration-300
                        tw-accessibility
                      "
                      placeholder="Mot de passe"
                      id="password"
                      type="password"
                      name="password"
                    />
                  </div>
                </div>
                
                @error('email')
                  <div class="mt-2 text-sm text-red-600">
                    {{ $message }}
                  </div>
                @enderror
    
                <!--Remember-->
                <div class="mt-6 flex items-center justify-between">
                  <div class="flex items-center">
                    <div
                      class="
                        group
                        relative
                        overflow-hidden
                        text-slate-500
                        w-5
                        h-5
                        flex flex-shrink-0
                        justify-center
                        items-center
                        mr-1
                        outline-1
                        focus-within:ring-0
                        outline-transparent
                        focus-within:outline-dashed focus-within:outline-gray-300
                        dark:focus-within:outline-gray-600
                        focus-within:outline-offset-2
                        cursor-pointer
                        transition-all
                        duration-300
                      "
                    >
                      <input
                        id="remember_me"
                        name="remember_me"
                        type="checkbox"
                        class="peer cursor-pointer opacity-0 absolute h-5 w-5 z-20"
                      />
                      <div
                        class="
                          absolute
                          top-0
                          left-0
                          h-full
                          w-full
                          bg-white
                          dark:bg-slate-700 dark:border-slate-700
                          border-2 border-slate-400
                          z-0
                          peer-checked:border-primary-500
                          peer-checked:dark:border-primary-600
                        "
                      ></div>
                      <svg
                        class="
                          relative
                          fill-current
                          opacity-0
                          w-2.5
                          h-2.5
                          text-primary-500
                          pointer-events-none
                          transition
                          duration-300
                          translate-y-6
                          peer-checked:opacity-100 peer-checked:translate-y-0
                          z-10
                        "
                        version="1.1"
                        viewBox="0 0 17 12"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g fill="none" fill-rule="evenodd">
                          <g
                            transform="translate(-9 -11)"
                            fill="currentColor"
                            fill-rule="nonzero"
                          >
                            <path
                              d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z"
                            />
                          </g>
                        </g>
                      </svg>
                    </div>
                    <label
                      for="remember_me"
                      class="
                        font-sans
                        ml-2
                        block
                        text-sm
                        leading-5
                        text-muted-800
                        dark:text-muted-400
                      "
                    >
                      Se souvenir de moi
                    </label>
                  </div>
    
                  <!--<div class="text-sm leading-5">
                    <a
                      href="/forgot.html"
                      class="
                        font-medium
                        text-primary-600
                        hover:text-primary-500
                        focus:outline-none focus:underline
                        transition
                        ease-in-out
                        duration-150
                      "
                    >
                      Forgot your password?
                    </a>
                  </div>-->
                </div>
    
                <!--Submit-->
                <div class="mt-6">
                  <span class="block w-full shadow-sm">
                    <button
                      type="submit"
                      class="
                        w-full
                        flex
                        justify-center
                        py-3
                        px-4
                        border border-transparent
                        text-sm
                        font-medium
                        text-white
                        bg-primary-600
                        hover:bg-primary-500
                        transition
                        duration-150
                        ease-in-out
                        tw-accessibility
                      "
                    >
                      Connexion
                    </button>
                  </span>
                </div>
              </form>
    
              <!--No account link-->
              <p
                class="
                  flex
                  justify-between
                  mt-4
                  font-sans
                  text-sm
                  leading-5
                  text-muted-600
                  dark:text-muted-400
                  max-w
                "
              >
                <a 
                  href="{{ route('register.index') }}" 
                  class="
                    font-medium
                    text-primary-600
                    hover:text-primary-500
                    focus:outline-none focus:underline
                    transition
                    ease-in-out
                    duration-150
                  "
                >
                  Vous n'avez pas de compte ?
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-minimal-layout>