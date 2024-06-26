@extends('frontend.layout')

@section('content')
<div class="h-max flex flex-col py-0 md:py-6 px-6 bg-[#f5f7f9]">
    <div class="mx-auto w-1/2 lg:w-1/2">
        <div class="py-5">
            <span class="text-2xl font-bold">
                Cant find the answer to your question in our FAQ? Contact Us
            </span>
        </div>
        <form class="w-full max-w-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        First Name*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane" />
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Last Name*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        E-mail*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" />
                    <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Message*
                    </label>
                    <textarea class=" no-resize appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
                    <p class="text-gray-600 text-xs italic">By submiting this form I accept the <span class="text-blue-500 font-semibold cursor-pointer">privacy policy</span> as well as the privacy information</p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button class="shadow bg-blue-800 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>
    </div>
</div>
@endsection