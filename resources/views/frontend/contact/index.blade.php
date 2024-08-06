@extends('frontend.layout')

@section('content')
<div class="h-max flex flex-col py-0 md:py-6 px-6 bg-[#f5f7f9]" x-data="{ alertShow: true }">
    @if ($message = Session::get('success'))
        <div class="bg-green-200 px-6 py-4 my-4 rounded-md text-lg flex items-center mx-auto max-w-lg">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                </path>
            </svg>
            <span class="text-green-800">{{ $message }}</span>
        </div>
	@endif

	@if ($message = Session::get('error'))
    <div class="bg-red-200 px-6 py-4 my-4 rounded-md text-lg flex items-center mx-auto max-w-lg">
        <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
            <path fill="currentColor"
                d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z">
            </path>
        </svg>
        <span class="text-red-800">{{ $message }}</span>
    </div>
	@endif

    <!-- message error -->
    @if($errors->any())
    <div class="flex justify-between bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-2 rounded" role="alert" x-show="alertShow">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                <span class="block sm:inline pl-2">
                    {{ $error }}
                </span>
            </li>
            @endforeach
        </ul>
        <span class="inline" @click="alertShow = !alertShow">
            <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
    @endif

    <div class="mx-auto w-full md:w-1/2 lg:w-1/2 mb-8">
        <div class="py-5">
            <span class="text-lg md:text-2xl leading-tight font-bold">
                Cant find the answer to your question in our FAQ? Contact Us
            </span>
        </div>
        <form method="POST" action="{{ route('contact.submit') }}" class="w-full max-w-lg">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text" name="name" />
                    <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        E-mail*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" name="email" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="subject">
                        Subject*
                    </label>
                    <input class="appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="subject" type="text" name="subject" />
                    <p class="text-gray-600 text-xs italic">Some tips - what you needed</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                        Message*
                    </label>
                    <textarea class=" no-resize appearance-none block w-full bg-blue-100 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="message"></textarea>
                    <p class="text-gray-600 text-xs italic">By submiting this form I accept the <span class="text-blue-500 font-semibold cursor-pointer">privacy policy</span> as well as the privacy information</p>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button type="submit" class="shadow bg-blue-800 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>
    </div>
</div>
@endsection