@extends('backend.layout')

@section('content')

<main class="bg-white min-h-screen">
  
<!-- navigation -->
@include('backend.components._navigation')

  <div class="py-3 mx-auto w-11/12 ">
    <div class="flex w-full flex-col space-y-2">
      <div class="pt-5">
        <span class="text-lg font-semibold tracking-tighter capitalize text-gray-800">
          Notification
        </span>
      </div>
      <div class="overflow-x-auto py-4 ">
        <table class="min-w-full text-sm selectedTable">
          <thead class="bg-white border border-gray-300">
            <tr class="text-left">
              <th class="text-xs text-center p-4 uppercase text-gray-500">
                <p>link</p>
              </th>
              <th class="text-xs  p-4 uppercase text-gray-500">
                <p>Notification</p>
              </th>
              <th class="text-xs text-center p-4 uppercase text-gray-500">
                <p>date</p>
              </th>
              <th class="text-xs text-center p-4 uppercase text-gray-500">
                <p>mark as read</p>
              </th>

            </tr>
          </thead>
          <tbody>
            <tr class="bg-white text-gray-800 border border-gray-300 font-bold ">
              <td class="text-sm flex justify-center p-4 uppercase text-slate-900">
                <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={2} stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
                </a>
              </td>
              <td class="text-xs  p-4 ">
                <p>your order have a approved</p>
              </td>
              <td class="text-xs text-center p-4">
                <p>1 minute ago</p>
              </td>
              <td class="flex justify-center text-sm text-center p-4">
                <a href="/" class="flex justify-center items-center h-5 w-5 md:h-6 md:w-6 rounded-full bg-white hover:bg-black text-black hover:text-white border shadow border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={2} stroke="currentColor" class="w-3 h-3 md:w-4 md:h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
                </a>
              </td>
            </tr>
            <tr class="bg-white text-gray-800 border border-gray-300 font-bold ">
              <td class="text-sm flex justify-center p-4 uppercase text-slate-900">
                <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={2} stroke="currentColor" class="w-4 h-4 md:w-5 md:h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
                </a>
              </td>
              <td class="text-xs  p-4 ">
                <p>your order will be shipped</p>
              </td>
              <td class="text-xs text-center p-4">
                <p>1 minute ago</p>
              </td>
              <td class="flex justify-center text-sm text-center p-4">
                <a href="/" class="flex justify-center items-center h-5 w-5 md:h-6 md:w-6 rounded-full bg-white hover:bg-black text-black hover:text-white border shadow border-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width={2} stroke="currentColor" class="w-3 h-3 md:w-4 md:h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

@endsection