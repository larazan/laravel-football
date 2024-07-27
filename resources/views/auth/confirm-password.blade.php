{{-- 
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
--}}

<x-registration-layout>
    <x-header-registration />
    <section class="bg-white min-h-[720px]">
        <div class="relative">
            <image src="{{ asset('assets/img/download.svg') }}" alt="bg" />
        </div>
        <div class="absolute top-64 flex justify-center items-center">
            <div class="relative mx-auto w-11/12 md:w-8/12 border-2 rounded-lg shadow-lg space-y-4 py-5  bg-white">
                <div class="absolute m-auto left-0 right-0 -top-7 w-9/12 md:w-1/2 rounded border-2 border-gray-800  ">
                    <div class="flex flex-row w-full items-center">
                        <div class="w-full flex py-2 bg-[#001838] justify-center items-center text-center">
                            <p class="text-lg md:text-2xl text-white font-bold uppercase">
                                Confirm Password
                            </p>
                        </div>
                    </div>
                </div>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.confirm') }}" class="flex flex-col space-y-3">
                    @csrf
                    <div class="flex flex-col space-y-1 mx-auto w-11/12 md:w-10/12 pt-2">
                        <label for="password" class="text-sm md:text-base block text-gray-800 font-semibold">
                            Password
                        </label>
                        <input 
                            id="password" 
                            type="password" name="password" required autocomplete="current-password" autofocus
                            class="w-full py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" 
                            placeholder="Password" 
                        />
                    </div>

                    <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
                        <button type="submit" class="w-full py-2 bg-blue-800 hover:bg-blue-700 border border-gray-800 rounded text-lg uppercase font-bold text-gray-50 transition duration-200 ">
                        {{ __('Confirm') }}
                        </button>
                    </div>
                </form>
                <div class="flex flex-row space-x-2  mx-auto w-11/12 md:w-10/12 bg-green-100 rounded py-2 px-2  border-l-8 border-green-500">
                    <div></div>
                    <div class="flex flex-row">
                        <span class="text-sm  text-slate-900">
                        This is a secure area of the application. Please confirm your password before continuing.
                        </span>
                    </div>
                </div>
                <div class="hidden flex2 flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
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