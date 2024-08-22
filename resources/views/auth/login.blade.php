{{-- 
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
--}}

<x-registration-layout>
    <x-header-registration />
<section class=" bg-white min-h-[800px]">
        <div class="relative">
          <Image src="{{ asset('assets/img/download.svg') }}" alt="bg" class="w-full" />
        </div>
        <div class="absolute mx-auto w-full top-64 flex justify-center items-center">
          <div class="relative mx-auto w-11/12 md:w-8/12 lg:w-6/12 border-2 rounded-lg shadow-lg space-y-4 py-5  bg-white">
            <div class="absolute m-auto left-0 right-0 -top-7 w-9/12 md:w-1/2 rounded border-2 border-gray-800  ">
              <div class="flex flex-row w-full items-center">
                <a
                  href="{{ url('login') }}"
                  class="w-1/2 flex py-2 bg-[#001838] justify-center items-center text-center"
                >
                  <p class="text-lg md:text-2xl text-white font-bold uppercase">
                    Sign In
                  </p>
                </a>
                <a
                  href="{{ url('register') }}"
                  class="w-1/2 flex py-2 bg-white justify-center items-center"
                >
                  <p class="text-lg md:text-2xl text-gray-800 font-bold uppercase">
                    Register
                  </p>
                </a>
              </div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12 pt-2">
              <label for="email" class="text-sm md:text-base block text-gray-800 font-semibold">
                Email Address
              </label>
              <input
                class="w-full py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry"
                id="email"
                type="email"
                name="email"
                placeholder="Email"
                :value="old('email')" required autofocus autocomplete="username"
              />
            </div>
            <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
              <label for="password" class="text-sm md:text-base block text-gray-800 font-semibold">
                Password
              </label>
              <div class="relative items-center">
                <input
                  class="w-full py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry"
                  id="password"
                  type="password"
                  name="password"
                  placeholder="Password"
                  required autocomplete="current-password"
                />
                <button class="absolute inline-block bottom-3 right-4 ">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width={1.5}
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <div class="flex justify-between items-center space-y-1.5 mx-auto w-11/12 md:w-10/12 text-left mt-2 ">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm ont-semibold text-gray-700">{{ __('Remember me') }}</span>
                </label>
                <div>
                <a
                href="{{ route('password.request') }}"
                class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700 underline underline-offset-1"
              >
                Forgot Password?
              </a>
                </div>
            </div>
            <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
              <button type="submit" class="w-full py-2 bg-blue-800 hover:bg-blue-700 border border-gray-800 rounded text-lg uppercase font-bold text-gray-50 transition duration-200 ">
              {{ __('Log in') }}
              </button>
            </div>
            </form>
            <div class=" flex flex-row space-x-2  mx-auto w-11/12 md:w-10/12 bg-green-100 rounded py-2 px-2  border-l-8 border-green-500">
              <div></div>
              <div class="flex flex-row">
                <span class="text-sm text-slate-900">
                  We&lsquo;ve changed how you sign in to Man City. If
                  you&lsquo;ve previously signed in via any social networks,
                  <a href="#" class="underline">
                    create a new password here to sign into your account.
                  </a>
                </span>
              </div>
            </div>
            <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
              <div class="flex flex-row text-sm md:text-base space-x-1 text-slate-900 font-semibold py-3 border-t border-blue-300 justify-center">
                <span>Dont have an account?</span>
                <a href="{{ url('register') }}" class="underline underline-offset-1">
                  Register Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <x-footer-registration />
</x-registration-layout>