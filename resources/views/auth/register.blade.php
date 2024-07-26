{{--
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
@csrf

<div>
    <x-label for="first_name" value="First Name" />
    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
</div>

<div class="mt-4">
    <x-label for="last_name" value="Last Name" />
    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
</div>

<div class="mt-4">
    <x-label for="email" value="{{ __('Email') }}" />
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
</div>

<div class="mt-4">
    <x-label for="password" value="{{ __('Password') }}" />
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
</div>

@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
<div class="mt-4">
    <x-label for="terms">
        <div class="flex items-center">
            <x-checkbox name="terms" id="terms" required />

            <div class="ml-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                ]) !!}
            </div>
        </div>
    </x-label>
</div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-button class="ml-4">
        {{ __('Register') }}
    </x-button>
</div>
</form>
</x-authentication-card>
</x-guest-layout>
--}}

<x-registration-layout>
    <x-header-registration />
    <section class=" bg-white min-h-[1280px] md:min-h-[1150px]">
        <div class="relative">
            <image src="{{ asset('assets/img/download.svg') }}" alt="bg" />
        </div>
        <div class="absolute top-64 flex justify-center items-center">
            <div class="relative mx-auto w-11/12 md:w-8/12 border-2 rounded-lg shadow-lg space-y-4 py-5  bg-white">
                <div class="absolute m-auto left-0 right-0 -top-7 w-9/12 md:w-1/2 rounded border-2 border-gray-800  ">
                    <div class="flex flex-row w-full items-center">
                        <a href="{{ url('login') }}" class="w-1/2 flex py-2 bg-white justify-center items-center">
                            <p class="text-lg md:text-2xl text-gray-800 font-bold uppercase">
                                Sign In
                            </p>
                        </a>
                        <a href="{{ url('register') }}" class="w-1/2 flex py-2 bg-[#001838] justify-center items-center text-center">
                            <p class="text-lg md:text-2xl text-white font-bold uppercase">
                                Register
                            </p>
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf
                    <div class="hidden flex2 flex-col space-y-1 mx-auto w-11/12 md:w-10/12 pt-2">
                        <label class="text-sm md:text-base font-semibold block text-gray-800">
                            Date of Birth
                        </label>
                        <div class="flex flex-row space-x-2">
                            <select placeholder="day" class=" py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <select class=" py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry">
                                <option value="1">January</option>
                                <option value="2">Pebruary</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                            </select>
                            <select class=" py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry">
                                <option value="1">1990</option>
                                <option value="2">1991</option>
                                <option value="3">1992</option>
                                <option value="4">1993</option>
                                <option value="5">1994</option>
                            </select>
                        </div>
                        <span class="text-sm leading-tight text-slate-900">
                            You must supply an accurate date of birth, as this will be used
                            for identification and security in the future.
                        </span>
                    </div>
                    <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-10/12">
                        <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
                            <label for="first_name" class="text-sm md:text-base font-semibold block text-gray-800">
                                First Name
                            </label>
                            <div class="relative items-center">
                                <input id="first_name" class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" placeholder="First name" />
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
                            <label for="last_name" class="text-sm md:text-base font-semibold block text-gray-800">
                                Last Name
                            </label>
                            <div class="relative items-center">
                                <input id="last_name" class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" placeholder="Last name" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-1 mx-auto w-11/12 md:w-10/12 pt-2">
                        <label for="email" class="text-sm md:text-base font-semibold block text-gray-800">
                            Email Address
                        </label>
                        <input id="email" class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                    </div>
                    <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-10/12">
                        <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
                            <label for="password" class="text-sm md:text-base font-semibold block text-gray-800">
                                Password
                            </label>
                            <div class="relative items-center">
                                <input id="password" class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                                <button class="absolute inline-block bottom-3 right-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
                            <label for="password_confirmation" class="text-sm md:text-base font-semibold block text-gray-800">
                                Confirm Password
                            </label>
                            <div class="relative items-center">
                                <input id="password_confirmation" class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Password" />
                                <button class="absolute inline-block bottom-3 right-4 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path strokeLinecap="round" strokeLinejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12 text-left mt-2 ">
                        <div class="leading-tight">
                            <span class="font-bold text-sm md:text-[17px] leading-tight text-slate-900">
                                Do you want to be the first to hear about our competitions,
                                new signings, ticket and club news, and partner offers by
                                receiving our exclusive emails?
                            </span>
                        </div>
                        <div class="leading-tight">
                            <span class="text-xs md:text-sm leading-tight text-slate-900">
                                We send offers and news on behalf of our partners but do not
                                share your information directly with them.
                            </span>
                        </div>
                        <div class="flex flex-row w-full space-x-2">
                            <button class="w-full py-2 bg-white hover:bg-slate-200 border border-gray-800 rounded text-base uppercase font-bold text-gray-700 transition duration-200 ">
                                Yes
                            </button>
                            <button class="w-full py-2 bg-white hover:bg-slate-200 border border-gray-800 rounded text-base uppercase font-bold text-gray-700 transition duration-200 ">
                                No
                            </button>
                        </div>
                        <div class="leading-tight">
                            <span class="text-xs md:text-sm leading-tight text-slate-900">
                                You can access our preference centre at any time to opt-out of
                                marketing communications and control how we use your data.
                            </span>
                        </div>
                        <div class="leading-tight">
                            <span class="text-sm md:text-base font-semibold leading-tight text-slate-900">
                                Please note, you will still receive general communications,
                                including ticket sales and important club notifications.
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
                        <button type="submit" class="w-full py-2 bg-blue-800 hover:bg-blue-700 border border-gray-800 rounded text-lg uppercase font-bold text-gray-50 transition duration-200 ">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                <div class=" flex flex-row space-x-2  mx-auto w-11/12 md:w-10/12 bg-green-100 rounded py-2 px-2  border-l-8 border-green-500">
                    <div></div>
                    <div class="flex flex-row leading-tight">
                        <span class="text-sm text-slate-900 font-semibold2">
                            By submitting your details, you agree to the use of your data
                            by City Football Group in accordance with our
                            <a href="#" class="underline">
                                Privacy Policy.
                            </a>
                            We use your data to personalise and improve your experience on
                            our platforms, provide services you request and learn about
                            your interests.
                        </span>
                    </div>
                </div>
                <div class="flex flex-col space-y-1.5 mx-auto w-11/12 md:w-10/12">
                    <div class="flex flex-row text-sm md:text-base text-slate-900 space-x-1 font-semibold py-3 border-t border-blue-300 justify-center">
                        <span>Already have an account?</span>
                        <a href="{{ url('login') }}" class="underline underline-offset-1">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer-registration />
</x-registration-layout>