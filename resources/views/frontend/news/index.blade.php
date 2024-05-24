@extends('frontend.layout')

<div class="h-max  flex flex-row space-x-6 px-2 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]" bis_skin_checked="1">
    <div class="flex flex-col space-y-4 mx-auto w-full lg:w-1/2" bis_skin_checked="1">
        <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center" bis_skin_checked="1"><span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">News</span></div>
        <div class="flex flex-col md:flex-row w-full space-y-3 md:space-y-0 md:space-x-4" bis_skin_checked="1">
            <div class="w-full md:w-2/3 flex flex-wrap space-x-2" bis_skin_checked="1"><button class="flex rounded px-2 py-1 items-center bg-[#dc052d] "><span class=" font-semibold text-white text-sm">All</span></button><button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200"><span class=" font-semibold text-[#002f6c] text-sm">Club</span></button><button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200"><span class=" font-semibold text-[#002f6c] text-sm">Bundesliga</span></button><button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200"><span class=" font-semibold text-[#002f6c] text-sm">Champions League</span></button></div>
            <div class="w-full md:w-1/3 flex md:justify-end" bis_skin_checked="1">
                <form class="w-full md:w-2/3">
                    <div class="relative" bis_skin_checked="1"><label class="sr-only">Search</label><input class="w-full h-9 border-0 focus:ring-transparent placeholder-[#002f6c] placeholder-semibold appearance-none py-2 pl-7 pr-4 rounded outline-none bg-blue-100 text-sm text-[#002f6c]" type="search" placeholder="Search Anything…"><button class="absolute inset-0 right-auto group" type="submit" aria-label="Search"><svg class="w-3 h-3 shrink-0 fill-current text-[#002f6c] group-hover:text-slate-500 ml-2 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg></button></div>
                </form>
            </div>
        </div>
        <div class="w-full" bis_skin_checked="1">
            <div class="relative w-full" bis_skin_checked="1"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full object-contain" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews1.0fc2c1ff.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews1.0fc2c1ff.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews1.0fc2c1ff.png&amp;w=1080&amp;q=75" style="color: transparent;"></div>
        </div>
        <div class="flex mx-auto  w-12/12 md:w-12/12 py-2 justify-center2 items-center" bis_skin_checked="1">
            <div class="grid grid-cols-2 mx-auto gap-x-7 gap-y-8 sm:grid-cols-1 md:grid-cols-2" bis_skin_checked="1">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow " bis_skin_checked="1"><a class="relative" href="/news/1"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full object-cover" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews2.4e494174.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews2.4e494174.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews2.4e494174.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal" bis_skin_checked="1"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight" bis_skin_checked="1">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500" bis_skin_checked="1">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow " bis_skin_checked="1"><a class="relative" href="/news/1"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews3.929778de.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews3.929778de.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews3.929778de.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal" bis_skin_checked="1"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight" bis_skin_checked="1">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500" bis_skin_checked="1">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow " bis_skin_checked="1"><a class="relative" href="/news/1"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews4.d4e2e7b3.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews4.d4e2e7b3.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews4.d4e2e7b3.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal" bis_skin_checked="1"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight" bis_skin_checked="1">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500" bis_skin_checked="1">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow " bis_skin_checked="1"><a class="relative" href="/news/1"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews5.83d0ea49.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews5.83d0ea49.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fnews5.83d0ea49.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal" bis_skin_checked="1"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight" bis_skin_checked="1">
                        <div class="font-semibold text-xs md:text-sm uppercase text-red-500" bis_skin_checked="1">Membership</div>
                        <h3 class="font-semibold text-base md:text-lg leading-tight text-[#002f6c]"><a href="/news/1">Become part of the FC Bayern family!</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>