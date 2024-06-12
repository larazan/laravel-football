@extends('frontend.layout')

@section('content')

<div class="h-max flex flex-col py-0 md:py-6  bg-[#f5f7f9]">
    <div class="mx-auto w-full lg:w-1/2">
        <img alt="" src="{{ url('assets/img/muller_training.png') }}">
    </div>
</div>

<div class="h-max flex flex-col py-0 md:py-6  bg-[#f5f7f9]">
    <div class="flex flex-col space-y-3 mx-auto w-11/12 md:w-8/12 lg:w-1/2 justify-center">
        <div class="flex pt-3 flex-row justify-between md:justify-normal space-x-3">
            <div>
                <span class="text-sm font-semibold text-[#dc052d]">Individual Training</span>
            </div>
            <div>
                <span class="text-xs md:text-sm font-semibold text-gray-400">Fri, 21/07/23, 20:45 GMT+7</span>
            </div>
        </div>
        <div>
            <h1 class="text-2xl leading-tight font-bold text-[#002f6c]">Thomas Muller to stay in Munich</h1>
        </div>
        <div class="md:py-6 pb-6 text-gray-800">
            <p>Thomas Muller will continue to train at Sabaner strabe while FC Bayern head off fot this years Audi Summer Tour in Tokyo and Singapore on Monday. This is because of muscular problems in his left hip. Following consultations with coaches and medical team, the attacker will remain in Munich and use the facilities at the clubs training ground.</p>
        </div>
    </div>
    <div class="flex flex-row py-4 md:py-6 border-y">
        <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row mx-auto w-11/12 md:w-8/12 lg:w-1/2">
            <div class="flex flex-col w-full md:w-1/2 ">
                <div>
                    <span class="text-sm font-semibold text-gray-400">Topics of this article</span>
                </div>
                <div>
                    <div class="flex flex-wrap ">
                        <button class="flex mr-2 mt-2 rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                            <span class=" font-semibold text-[#002f6c] text-sm">News</span>
                        </button>
                        <button class="flex mr-2 mt-2 rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                            <span class=" font-semibold text-[#002f6c] text-sm">Thomas Muller</span>
                        </button>
                        <button class="flex mr-2 mt-2 rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                            <span class=" font-semibold text-[#002f6c] text-sm">Training</span>
                        </button>
                        <button class="flex mr-2 mt-2 rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
                            <span class=" font-semibold text-[#002f6c] text-sm">Audi Summer Tour 2023</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-1/2 space-y-3">
                <div>
                    <span class="text-sm font-semibold text-gray-400">Share this article</span>
                </div>
                <div class="flex space-x-4 OuQGd">
                    <a class="" href="/">
                        <span class="text-[#002f6c]">
                            <svg height="28" width="28" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                <title>icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 2.25C1.0335 2.25 0.25 3.0335 0.25 4V20C0.25 20.9665 1.0335 21.75 2 21.75H22C22.9665 21.75 23.75 20.9665 23.75 20V4C23.75 3.0335 22.9665 2.25 22 2.25H2ZM1.75 4C1.75 3.86193 1.86193 3.75 2 3.75H22C22.1381 3.75 22.25 3.86193 22.25 4V5.58833L12.0001 12.111L1.75 5.58825V4ZM1.75 7.36621V20C1.75 20.1381 1.86193 20.25 2 20.25H22C22.1381 20.25 22.25 20.1381 22.25 20V7.3663L12.4027 13.6327C12.1571 13.7891 11.8431 13.7891 11.5974 13.6327L1.75 7.36621Z"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="" href="/">
                        <span class="text-[#002f6c]">
                            <svg height="28" width="28" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                <title>icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75001 12C2.75001 6.89137 6.89138 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C10.2442 21.25 8.60468 20.7615 7.20751 19.9134L6.92235 19.7403L3.11862 20.8814L4.25974 17.0777L4.08663 16.7925C3.23852 15.3953 2.75001 13.7559 2.75001 12ZM12 1.25C6.06295 1.25 1.25001 6.06294 1.25001 12C1.25001 13.9172 1.75252 15.719 2.63334 17.2788L0.881409 23.1186L6.7212 21.3667C8.28102 22.2475 10.0828 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM16.6343 15.49C16.6437 15.5613 16.6322 15.6334 16.6012 15.6978C16.4974 15.9132 16.0529 16.3188 15.3019 16.491C14.45 16.6864 12.6727 16.6682 10.3388 14.3513C8.00483 12.0344 7.98647 10.2702 8.18318 9.42493C8.35656 8.67908 8.76521 8.23751 8.98223 8.13447C9.04699 8.10376 9.11965 8.09241 9.19141 8.1017C9.40361 8.12905 9.87427 8.19306 10.1219 8.2269L10.204 8.23807C10.3259 8.25471 10.4328 8.32944 10.4903 8.43762C10.6203 8.68279 11.059 9.55519 11.2455 10.4867C11.2655 10.5869 11.2435 10.6904 11.1844 10.7729L10.5892 11.6047C10.6949 11.8495 11.0064 12.4842 11.613 13.0864C12.226 13.6949 12.8586 13.9993 13.105 14.103L13.9433 13.5117C14.0264 13.4531 14.1307 13.4312 14.2317 13.4511C15.1702 13.6364 16.0489 14.0718 16.2959 14.2008C16.405 14.2582 16.4802 14.3642 16.4969 14.4851L16.5006 14.5116C16.5315 14.7349 16.6043 15.2625 16.6343 15.49Z"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="" href="/">
                        <span class="text-[#002f6c]">
                            <svg height="28" width="28" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="eCHnXp">
                                <title>icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 12C1.25 6.06294 6.06293 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.3664 18.8186 21.8129 13.6788 22.6195L12.8125 22.7554V14.1406H15.2488L15.4621 12.75H12.8125V10.1242C12.8125 9.61973 12.9348 9.02962 13.3442 8.55619C13.7712 8.06245 14.4081 7.8125 15.1921 7.8125H15.7031V6.75421C15.6883 6.75246 15.6733 6.75071 15.6581 6.74896C15.25 6.70183 14.7218 6.65625 14.2146 6.65625C13.2241 6.65625 12.4878 6.95361 12.0001 7.4418C11.5131 7.92924 11.1875 8.69342 11.1875 9.79688V12.75H8.64844V14.1406H11.1875V22.7554L10.3212 22.6195C5.18143 21.8129 1.25 17.3664 1.25 12ZM16.4531 6.10156L16.5793 5.36225L17.2031 5.46872V9.3125H15.1921C14.7339 9.3125 14.5561 9.44797 14.4788 9.53735C14.3839 9.64705 14.3125 9.83777 14.3125 10.1242V11.25H17.2097L16.5363 15.6406H14.3125V20.9586C18.3019 19.932 21.25 16.3097 21.25 12C21.25 6.89136 17.1086 2.75 12 2.75C6.89136 2.75 2.75 6.89136 2.75 12C2.75 16.3097 5.69805 19.932 9.6875 20.9586V15.6406H7.14844V11.25H9.6875V9.79688C9.6875 8.39408 10.1084 7.21295 10.9389 6.38164C11.7687 5.55108 12.921 5.15625 14.2146 5.15625C14.8016 5.15625 15.3926 5.20833 15.8302 5.25886C16.0506 5.28431 16.2357 5.30979 16.3665 5.32904C16.4319 5.33868 16.4839 5.34677 16.5201 5.35256L16.5624 5.35942L16.5741 5.36138L16.5775 5.36195L16.5793 5.36225C16.5794 5.36226 16.5793 5.36225 16.4531 6.10156Z"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="" href="/">
                        <span class="text-[#002f6c]">
                            <svg height="28" width="28" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                <title>icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.74995 12C2.74995 6.89137 6.89132 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C10.2441 21.25 8.60462 20.7615 7.20745 19.9134L6.92229 19.7403L3.11856 20.8814L4.25967 17.0777L4.08657 16.7925C3.23846 15.3953 2.74995 13.7559 2.74995 12ZM12 1.25C6.06289 1.25 1.24995 6.06294 1.24995 12C1.24995 13.9172 1.75246 15.719 2.63328 17.2788L0.881348 23.1186L6.72114 21.3667C8.28095 22.2475 10.0828 22.75 12 22.75C17.937 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.937 1.25 12 1.25ZM6 15L11 9.5L14 11L18 9L14 15L11 13L6 15Z"></path>
                            </svg>
                        </span>
                    </a>
                    <a class="" href="/">
                        <span class="text-[#002f6c]">
                            <svg height="28" width="28" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                                <title>icon</title>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7489 1.55201L22.1977 3.53011C22.1232 3.79735 22.0368 4.05442 21.9484 4.29111L23.9214 3.28228L22.6493 5.48248C22.1499 6.34614 21.5278 7.12178 20.8083 7.76796L20.8136 8.0045V8.01291C20.8136 11.1356 19.7875 14.4977 17.8037 17.0948C15.8079 19.7078 12.8273 21.5589 8.9744 21.5589C6.59849 21.5589 4.39616 20.7533 2.5535 19.388L0.233276 17.6688L3.09684 18.0416C3.37247 18.0775 3.64994 18.097 3.92964 18.097C4.99575 18.097 6.01153 17.8228 6.92588 17.3245C5.57894 16.8311 4.32683 15.8235 3.46824 14.3374L2.60635 12.8456L4.28534 13.2312C4.27149 13.228 4.27187 13.228 4.29218 13.2292C4.30826 13.2302 4.33683 13.232 4.38074 13.2335C4.1457 13.0342 3.92215 12.8158 3.71473 12.5807C2.86794 11.6212 2.25001 10.3374 2.25001 8.85968V6.79288L3.41594 8.13826C3.17709 7.5032 3.04664 6.80724 3.04664 6.08253C3.04664 5.14199 3.26462 4.25296 3.65479 3.48298L4.21773 2.37202L4.93636 3.38924C6.564 5.69317 8.89061 7.25795 11.5086 7.67571C11.5068 7.61612 11.506 7.55634 11.506 7.4964C11.506 4.70396 13.49 2.25 16.1538 2.25C17.3581 2.25 18.439 2.76327 19.2491 3.5788C19.8865 3.38592 20.4916 3.0919 21.0525 2.70923L22.7489 1.55201ZM4.02077 10.2667C4.2124 10.7536 4.49593 11.199 4.83941 11.5882C5.49895 12.3356 6.3394 12.8293 7.06032 12.9967L9.75657 13.6227L7.1131 14.4435C7.09355 14.4496 7.07285 14.4561 7.0511 14.4629C6.75263 14.5564 6.25551 14.7122 5.79412 14.7122C5.75449 14.7122 5.69372 14.7136 5.61615 14.7157C6.55148 15.6771 7.71651 16.1527 8.78585 16.175L10.674 16.2145L9.2732 17.4812C8.23286 18.4219 6.98923 19.0977 5.62445 19.4074C6.67707 19.8302 7.80358 20.0589 8.9744 20.0589C12.2915 20.0589 14.8555 18.4836 16.6117 16.1843C18.3783 13.8715 19.3118 10.8393 19.3136 8.02121L19.2925 7.08316L19.5739 6.85157C19.8843 6.59608 20.1773 6.31008 20.4493 5.99757L19.5697 5.74107L20.0242 4.92084L20.0274 4.91497L20.0363 4.89854C19.7524 4.99943 19.4619 5.08422 19.1655 5.1519L18.7106 5.25575L18.4164 4.89361C17.8281 4.16945 17.0207 3.75 16.1538 3.75C14.5126 3.75 13.006 5.3239 13.006 7.4964C13.006 7.79976 13.0357 8.0938 13.092 8.37252L13.2849 9.32623L12.3135 9.26993C9.29268 9.09485 6.59228 7.6301 4.60167 5.38022C4.56559 5.607 4.54664 5.84172 4.54664 6.08253C4.54664 7.42753 5.14052 8.57802 5.98802 9.23144L7.84791 10.6654L5.50117 10.5748C5.10059 10.5594 4.54872 10.4506 4.02077 10.2667ZM20.6806 5.28379L20.4842 5.95714C20.4843 5.95698 20.4841 5.9573 20.4842 5.95714C20.5044 5.88723 20.5553 5.71344 20.6806 5.28379Z"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="h-max flex flex-col space-y-3 px-0 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
    <div class="mx-auto w-12/12 md:w-12/12 lg:w-1/2">
        <div class="flex flex-row justify-between mx-auto md:mx-0 w-11/12 md:w-12/12 lg:w-1/2 space-x-6 items-center">
            <a class="flex space-x-1 items-center hover:opacity-80" href="/">
                <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">Related News</span>
            </a>
        </div>
        <div class="flex flex-row flex-wrap  mx-auto w-full md:w-12/12 ">
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/one">
                        <img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div>
                        <a href="/news/one">
                            <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/one">
                        <img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div>
                        <a href="/news/one">
                            <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/one">
                        <img alt="" loading="lazy" width="660" height="367" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=750&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=1920&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=1920&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div>
                        <a href="/news/one">
                            <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
                    <a class="relative" href="/news/one">
                        <img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans1.b55b6a25.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div>
                        <a href="/news/one">
                            <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow "><a class="relative" href="/news/one"><img alt="" loading="lazy" width="520" height="293" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=640&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=1080&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffans2.8e4e29db.png&amp;w=1080&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div><a href="/news/one"><span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span></a>
                    </div>
                </div>
            </div>
            <div class="px-3 py-3 w-1/2 md:w-1/3 lg:w-1/3">
                <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow "><a class="relative" href="/news/one"><img alt="" loading="lazy" width="660" height="367" decoding="async" data-nimg="1" class="w-full" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=750&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=1920&amp;q=75 2x" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdigital1.77d92f4b.png&amp;w=1920&amp;q=75" style="color: transparent;">
                        <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
                    </a>
                    <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
                        <div class="font-semibold text-xs md:text-xs uppercase text-red-500">Membership</div><a href="/news/one"><span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">Become part of the FC Bayern family!</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection