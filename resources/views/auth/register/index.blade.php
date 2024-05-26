@section('meta_title', 'Creez votre compte - Suivis location Mustang')
@section('meta_description', 'En créant votre compte, vous simplifiez votre prochaine location de Mustang, Corvette et Pontiac. Accédez à votre rêve plus simplement.')

<x-minimal-layout>
    <!--Signup screen-->
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

<div class="w-full flex items-center justify-center">
  <div class="relative w-full max-w-2xl mx-auto">
    <!--Form-->
    <form action="{{ route('register.createUser') }}" method="POST">
      @csrf
      <div class="mr-auto ml-auto w-full mt-28">
        <div class="w-full max-w-md mr-auto ml-auto mt-4">
          <div
            class="
              bg-white
              dark:bg-muted-800
              border border-muted-200
              dark:border-muted-700
              shadow-xl shadow-muted-400/10
              dark:shadow-muted-800/10
              rounded-md
              px-8
              py-8
              mb-4
              ml-auto
              mr-auto
            "
          >
            <!--Field-->
            <div class="mb-4">
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
              <div class="mt-1 rounded-md shadow-sm">
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
                    py-3
                    transition-all
                    duration-300
                    tw-accessibility
                  "
                  placeholder="Adresse email"
                  type="text"
                  name="email"
                />
              </div>
              @error('email')
                <div class="mt-2 text-sm text-red-600">
                  {{ "Veuillez vérifier votre email et réessayer." }}
                </div>
              @enderror
            </div>
            <!--Field-->
            <div class="mb-6">
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
              <div class="mt-1 rounded-md shadow-sm">
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
                    py-3
                    transition-all
                    duration-300
                    tw-accessibility
                  "
                  placeholder="Mot de passe"
                  type="password"
                  name="password"
                />
              </div>
              @error('password')
                <div class="mt-2 text-sm text-red-600">
                  {{ "Votre mot de passe doit contenir au moins 8 caractères." }}
                </div>
              @enderror
            </div>
            <div class="mb-6">
              <div class="w-full">
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
                      focus-within:outline-dashed focus-within:outline-muted-300
                      dark:focus-within:outline-muted-600
                      focus-within:outline-offset-2
                      cursor-pointer
                      transition-all
                      duration-300
                    "
                  >
                    <input
                      id="remember_me"
                      type="checkbox"
                      name="cgu"
                      required
                      class="
                        peer
                        cursor-pointer
                        opacity-0
                        absolute
                        h-5
                        w-5
                        z-20
                      "
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
                    J'accepte les
                    <a
                      href="{{ url('cgu') }}"
                      class="
                        text-primary-600
                        font-medium
                        text-sm
                        duration-200
                        transition-colors
                        hover:text-primary-800
                      "
                    >
                      Termes de la CGU
                    </a>
                  </label>
                </div>
              </div>
            </div>
            <div class="mb-6">
              <button
                type="submit"
                class="
                  bg-primary-500
                  hover:bg-primary-600
                  shadow-lg
                  text-white
                  font-semibold
                  text-sm
                  py-4
                  px-0
                  text-center
                  w-full
                  hover:bg-tertiary
                  duration-200
                  transition-all
                "
              >
                Creer votre compte
              </button>
            </div>
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
              <span>Vous avez deja un compte ?</span>
              <a
                href="{{ url('login') }}"
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
                Connexion
              </a>
            </p>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</section>

<!--End Layout-->
</x-minimal-layout>