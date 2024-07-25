@extends('backend.layout')

@section('content')

<main class="bg-white min-h-screen">
  
<!-- navigation -->
@include('backend.components._navigation')

  <div class="h-max flex flex-col py-0 ">
    <div class="flex flex-col py-4 px-2 md:px-6 space-y-3 mx-auto w-full ">
      <div class=" flex flex-row space-x-2  mx-auto w-12/12 md:w-11/12 bg-green-100 rounded py-2 px-2  border-l-8 border-green-500">
        <div class="flex flex-row leading-tight">
          <span class="text-sm text-slate-900 font-semibold2 ">
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

      <div class=" relative mx-auto w-full md:w-11/12 border-2 rounded-lg shadow-lg space-y-4 py-3 pb-7 bg-white">
        <div class="px-5">
          <span class="text-lg font-bold tracking-tighter uppercase">
            about you
          </span>
        </div>
        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-11/12">
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Name
            </label>
            <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="Name" />
          </div>
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Gender
            </label>
            <div class="flex flex-row space-x-2">
              <select class=" py-3 px-3 text-sm bg-white focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry">
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
            </div>
          </div>
        </div>

        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-11/12">
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Date of Birth
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="date Birth" value="03 April 2000" />
              <button class="absolute inline-block bottom-3 right-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                </svg>
              </button>
            </div>
          </div>
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Email
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="email" placeholder="email" />
            </div>
          </div>
        </div>
      </div>

      <div class=" relative mx-auto w-full md:w-11/12 border-2 rounded-lg shadow-lg space-y-4 py-3 pb-7 bg-white">
        <div class="px-5">
          <span class="text-lg font-bold tracking-tighter uppercase">
            Address
          </span>
        </div>

        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-11/12">
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Address1
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="address1" />
            </div>
          </div>
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Address2
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="address2" />
            </div>
          </div>
        </div>
        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-11/12">
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              City
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="city" />
            </div>
          </div>
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Post Code / Zip Code
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="Post code" />
            </div>
          </div>
        </div>
      </div>

      <div class=" relative mx-auto w-full md:w-11/12 border-2 rounded-lg shadow-lg space-y-4 py-3 pb-7 bg-white">
        <div class="px-5">
          <span class="text-lg font-bold tracking-tighter uppercase">
            Phone number
          </span>
        </div>

        <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-2 mx-auto w-11/12 md:w-11/12">
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Home Phone
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="21219923" />
              <button class="absolute inline-block bottom-3 right-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
              </button>
            </div>
          </div>
          <div class="w-full md:w-1/2 flex flex-col space-y-1 ">
            <label class="text-sm md:text-base font-semibold block text-gray-800">
              Mobile Number
            </label>
            <div class="relative items-center">
              <input class="w-full bg-white py-3 px-3 text-sm  focus:outline-none outline-none focus:border-blue-400 border border-gray-800 rounded text-gray-800 font-mabry" type="text" placeholder="21219923" />
              <button class="absolute inline-block bottom-3 right-4 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={1.5} stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                </svg>
              </button>
            </div>
          </div>
        </div>



      </div>

      <div class="mx-auto w-full md:w-11/12  py-3 pb-7 ">
        <div class="flex justify-center w-full py-2 rounded-md bg-blue-700 hover:bg-blue-800 cursor-pointer text-lg text-white tracking-tighter uppercase font-semibold">
          <span>Submit Change</span>
        </div>
      </div>

    </div>
  </div>
</main>

@endsection