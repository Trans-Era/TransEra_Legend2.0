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
              Email address
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
                placeholder="Email address"
                type="email"
              />
            </div>
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
              Password
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
                placeholder="Password"
                type="password"
              />
            </div>
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
                  I accept the
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
                    Terms Of Service
                  </a>
                </label>
              </div>
            </div>
          </div>
          <div class="mb-6">
            <button
              type="button"
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
              Sign Up
            </button>
          </div>
          <div class="grid sm:grid-cols-3 gap-0 mb-6">
            <hr
              class="
                mt-3
                hidden
                sm:block
                border-t border-muted-200
                dark:border-muted-700
              "
            />
            <span
              class="
                relative
                top-0.5
                font-sans
                text-center
                bg-white
                dark:bg-muted-800
                text-sm text-muted-600
                dark:text-muted-400
              "
            >
              Or continue with
            </span>
            <hr
              class="
                mt-3
                hidden
                sm:block
                border-t border-muted-200
                dark:border-muted-700
              "
            />
          </div>
          <!--Social signup-->
          <div class="grid grid-cols-3 gap-2">
            <button
              type="button"
              class="
                relative
                inline-flex
                justify-center
                items-center
                shadow-sm
                font-semibold
                text-sm
                py-3
                px-0
                bg-muted-200
                dark:bg-muted-700
                hover:bg-muted-100
                dark:hover:bg-muted-600
                text-muted-600
                dark:text-muted-400
                text-center
                w-full
                transition-all
                duration-300
              "
            >
              <i class="iconify w-5 h-5" data-icon="fa6-brands:google"></i>
            </button>
            <button
              type="button"
              class="
                relative
                inline-flex
                justify-center
                items-center
                shadow-sm
                font-semibold
                text-sm
                py-3
                px-0
                bg-muted-200
                dark:bg-muted-700
                hover:bg-muted-100
                dark:hover:bg-muted-600
                text-muted-600
                dark:text-muted-400
                text-center
                w-full
                transition-all
                duration-300
              "
            >
              <i class="iconify w-5 h-5" data-icon="fa6-brands:twitter"></i>
            </button>
            <button
              type="button"
              class="
                relative
                inline-flex
                justify-center
                items-center
                shadow-sm
                font-semibold
                text-sm
                py-3
                px-0
                bg-muted-200
                dark:bg-muted-700
                hover:bg-muted-100
                dark:hover:bg-muted-600
                text-muted-600
                dark:text-muted-400
                text-center
                w-full
                transition-all
                duration-300
              "
            >
              <i
                class="iconify w-5 h-5"
                data-icon="fa6-brands:linkedin-in"
              ></i>
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
            <span>Already have an account?</span>
            <a
              href="/login.html"
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
              Sign In
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!--End Layout-->
</x-minimal-layout>