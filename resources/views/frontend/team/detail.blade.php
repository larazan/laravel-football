@extends('frontend.layout')

@section('content')

@dump($player)

<div class="relative w-full">
  <img src="{{ url('assets/img/horizontal.png') }}" alt="" class="w-full  sm:h-20 md:h-80 h-60 lg:h-[470px]" />
  <div class="absolute lg:mx-auto mt-2 lg:w-1/2 bottom-0 flex lg:left-[25%] space-x-6 z-20">
    <div class="w-1/2 md:w-1/3 lg:w-1/2">
      <img src="{{ url('assets/img/teams/benjamin_pavard.png') }}" alt="" class="w-[900px]" />
    </div>
    <div class="flex flex-col space-y-0 w-1/2 md:w-2/3 lg:w-1/2 justify-center">
      <div class="flex flex-col text-white w-24 leading-tight">
        <span class="text-4xl font-semibold">{{ $player->shirt_number }}</span>
        <div>
          <span class="text-2xl md:text-4xl uppercase leading-tight font-semibold">
            {{ $player->name }}
          </span>
        </div>
      </div>
      <div>
        <span class="text-white uppercase text-xs font-bold">
          {{ $player->position->name }}
        </span>
      </div>
      <div class="py-4 flex space-x-2">
        @if($player->facebook)
        <a href="{{ $player->facebook }}" target="_blank" class="text-white">
          <span class="text-white">
            <svg height="22" width="22" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="eCHnXp">
              <title>icon</title>
              <path fillRule="evenodd" clipRule="evenodd" d="M1.25 12C1.25 6.06294 6.06293 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.3664 18.8186 21.8129 13.6788 22.6195L12.8125 22.7554V14.1406H15.2488L15.4621 12.75H12.8125V10.1242C12.8125 9.61973 12.9348 9.02962 13.3442 8.55619C13.7712 8.06245 14.4081 7.8125 15.1921 7.8125H15.7031V6.75421C15.6883 6.75246 15.6733 6.75071 15.6581 6.74896C15.25 6.70183 14.7218 6.65625 14.2146 6.65625C13.2241 6.65625 12.4878 6.95361 12.0001 7.4418C11.5131 7.92924 11.1875 8.69342 11.1875 9.79688V12.75H8.64844V14.1406H11.1875V22.7554L10.3212 22.6195C5.18143 21.8129 1.25 17.3664 1.25 12ZM16.4531 6.10156L16.5793 5.36225L17.2031 5.46872V9.3125H15.1921C14.7339 9.3125 14.5561 9.44797 14.4788 9.53735C14.3839 9.64705 14.3125 9.83777 14.3125 10.1242V11.25H17.2097L16.5363 15.6406H14.3125V20.9586C18.3019 19.932 21.25 16.3097 21.25 12C21.25 6.89136 17.1086 2.75 12 2.75C6.89136 2.75 2.75 6.89136 2.75 12C2.75 16.3097 5.69805 19.932 9.6875 20.9586V15.6406H7.14844V11.25H9.6875V9.79688C9.6875 8.39408 10.1084 7.21295 10.9389 6.38164C11.7687 5.55108 12.921 5.15625 14.2146 5.15625C14.8016 5.15625 15.3926 5.20833 15.8302 5.25886C16.0506 5.28431 16.2357 5.30979 16.3665 5.32904C16.4319 5.33868 16.4839 5.34677 16.5201 5.35256L16.5624 5.35942L16.5741 5.36138L16.5775 5.36195L16.5793 5.36225C16.5794 5.36226 16.5793 5.36225 16.4531 6.10156Z"></path>
            </svg>
          </span>
        </a>
        @endif
        @if($player->instagram)
        <a href="{{ $player->instagram }}" target="_blank" class="text-white">
          <span class="text-white">
            <svg height="22" width="22" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
              <title>icon</title>
              <path fillRule="evenodd" clipRule="evenodd" d="M1.25 6C1.25 3.37665 3.37665 1.25 6 1.25H18C20.6234 1.25 22.75 3.37665 22.75 6V18C22.75 20.6234 20.6234 22.75 18 22.75H6C3.37665 22.75 1.25 20.6234 1.25 18V6ZM6 2.75C4.20507 2.75 2.75 4.20507 2.75 6V18C2.75 19.7949 4.20507 21.25 6 21.25H18C19.7949 21.25 21.25 19.7949 21.25 18V6C21.25 4.20507 19.7949 2.75 18 2.75H6ZM12 7.75C9.65279 7.75 7.75 9.65279 7.75 12C7.75 14.3472 9.65279 16.25 12 16.25C14.3472 16.25 16.25 14.3472 16.25 12C16.25 9.65279 14.3472 7.75 12 7.75ZM6.25 12C6.25 8.82436 8.82436 6.25 12 6.25C15.1756 6.25 17.75 8.82436 17.75 12C17.75 15.1756 15.1756 17.75 12 17.75C8.82436 17.75 6.25 15.1756 6.25 12ZM18.5 7C19.3284 7 20 6.32843 20 5.5C20 4.67157 19.3284 4 18.5 4C17.6716 4 17 4.67157 17 5.5C17 6.32843 17.6716 7 18.5 7Z"></path>
            </svg>
          </span>
        </a>
        @endif
        @if($player->twitter)
        <a href="{{ $player->twitter }}" target="_blank" class="text-white">
          <span class="text-white">
            <svg height="22" width="22" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
              <title>icon</title>
              <path fillRule="evenodd" clipRule="evenodd" d="M22.7489 1.55201L22.1977 3.53011C22.1232 3.79735 22.0368 4.05442 21.9484 4.29111L23.9214 3.28228L22.6493 5.48248C22.1499 6.34614 21.5278 7.12178 20.8083 7.76796L20.8136 8.0045V8.01291C20.8136 11.1356 19.7875 14.4977 17.8037 17.0948C15.8079 19.7078 12.8273 21.5589 8.9744 21.5589C6.59849 21.5589 4.39616 20.7533 2.5535 19.388L0.233276 17.6688L3.09684 18.0416C3.37247 18.0775 3.64994 18.097 3.92964 18.097C4.99575 18.097 6.01153 17.8228 6.92588 17.3245C5.57894 16.8311 4.32683 15.8235 3.46824 14.3374L2.60635 12.8456L4.28534 13.2312C4.27149 13.228 4.27187 13.228 4.29218 13.2292C4.30826 13.2302 4.33683 13.232 4.38074 13.2335C4.1457 13.0342 3.92215 12.8158 3.71473 12.5807C2.86794 11.6212 2.25001 10.3374 2.25001 8.85968V6.79288L3.41594 8.13826C3.17709 7.5032 3.04664 6.80724 3.04664 6.08253C3.04664 5.14199 3.26462 4.25296 3.65479 3.48298L4.21773 2.37202L4.93636 3.38924C6.564 5.69317 8.89061 7.25795 11.5086 7.67571C11.5068 7.61612 11.506 7.55634 11.506 7.4964C11.506 4.70396 13.49 2.25 16.1538 2.25C17.3581 2.25 18.439 2.76327 19.2491 3.5788C19.8865 3.38592 20.4916 3.0919 21.0525 2.70923L22.7489 1.55201ZM4.02077 10.2667C4.2124 10.7536 4.49593 11.199 4.83941 11.5882C5.49895 12.3356 6.3394 12.8293 7.06032 12.9967L9.75657 13.6227L7.1131 14.4435C7.09355 14.4496 7.07285 14.4561 7.0511 14.4629C6.75263 14.5564 6.25551 14.7122 5.79412 14.7122C5.75449 14.7122 5.69372 14.7136 5.61615 14.7157C6.55148 15.6771 7.71651 16.1527 8.78585 16.175L10.674 16.2145L9.2732 17.4812C8.23286 18.4219 6.98923 19.0977 5.62445 19.4074C6.67707 19.8302 7.80358 20.0589 8.9744 20.0589C12.2915 20.0589 14.8555 18.4836 16.6117 16.1843C18.3783 13.8715 19.3118 10.8393 19.3136 8.02121L19.2925 7.08316L19.5739 6.85157C19.8843 6.59608 20.1773 6.31008 20.4493 5.99757L19.5697 5.74107L20.0242 4.92084L20.0274 4.91497L20.0363 4.89854C19.7524 4.99943 19.4619 5.08422 19.1655 5.1519L18.7106 5.25575L18.4164 4.89361C17.8281 4.16945 17.0207 3.75 16.1538 3.75C14.5126 3.75 13.006 5.3239 13.006 7.4964C13.006 7.79976 13.0357 8.0938 13.092 8.37252L13.2849 9.32623L12.3135 9.26993C9.29268 9.09485 6.59228 7.6301 4.60167 5.38022C4.56559 5.607 4.54664 5.84172 4.54664 6.08253C4.54664 7.42753 5.14052 8.57802 5.98802 9.23144L7.84791 10.6654L5.50117 10.5748C5.10059 10.5594 4.54872 10.4506 4.02077 10.2667ZM20.6806 5.28379L20.4842 5.95714C20.4843 5.95698 20.4841 5.9573 20.4842 5.95714C20.5044 5.88723 20.5553 5.71344 20.6806 5.28379Z"></path>
            </svg>
          </span>
        </a>
        @endif
      </div>
    </div>
  </div>
</div>

<div class="h-max flex flex-col space-y-3 px-4 lg:px-0 py-3 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
  <!-- submenu -->
  <div class="mx-auto w-full lg:w-1/2 space-y-2">
    <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
      <span class="text-2xl font-bold text-[#002f6c]">Personal</span>
    </div>
    <div class="flex space-x-2">
      <button class="flex rounded px-2 py-1 items-center bg-[#dc052d]">
        <span class=" font-semibold text-white text-sm">Details</span>
      </button>
      <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
        <span class=" font-semibold text-[#002f6c] text-sm">Bio</span>
      </button>
      <button class="flex rounded px-2 py-1 items-center bg-blue-100 hover:bg-blue-200">
        <span class=" font-semibold text-[#002f6c] text-sm">
          Honours
        </span>
      </button>
    </div>
  </div>
  <div class="flex flex-col md:flex-row md:divide-x gap-3 space-y-3 md:space-x-3 mx-auto w-full lg:w-1/2">
    <div class="w-full md:w-1/2 flex flex-col space-y-4">

      <div class="grid grid-cols-2 gap-5">
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">
              {{ $player->height }} cm
            </span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">
            Tinggi
          </span>
        </div>
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">{{ $player->shirt_number }}</span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">No Punggung</span>
        </div>
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">
              20 tahun
            </span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">
            {{ $player->birth_number }}
          </span>
        </div>
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">
              {{ $player->prefered_foot }}
            </span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">
            Kaki andalan
          </span>
        </div>
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">
              {{ $player->country_id }}
            </span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">
            Negara
          </span>
        </div>
        <div class="flex flex-col py-2 px-2 border-b">
          <div>
            <span class="font-bold text-lg text-slate-800">
              {{ $player->contract_until }}
            </span>
          </div>
          <span class="text-sm text-slate-600 font-semibold">
            Kontrak
          </span>
        </div>
      </div>
    </div>
    <div class="w-full md:w-1/2 flex justify-between px-2 md:px-4">
      <div class="space-y-2">
        <div>
          <span class="text-lg font-bold text-slate-800">
            Posisi
          </span>
        </div>
        <div>
          <ul class="text-sm font-semibold text-slate-700">
            <li>{{ $player->position->name }}</li>
          </ul>
        </div>
      </div>

      <!-- Position -->
      <section class="relative flex justify-center w-[170px] h-[230px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="170" height="230" viewBox="0 0 170 230" fill="none">
          <path d="M164 0H6C2.68629 0 0 2.68629 0 6V224C0 227.314 2.68629 230 6 230H164C167.314 230 170 227.314 170 224V6C170 2.68629 167.314 0 164 0Z" fill="rgba(209, 209, 219, 1)"></path>
          <path d="M34 230V186.617C33.9992 186.351 34.1041 186.095 34.2915 185.906C34.479 185.717 34.7337 185.61 35 185.608H135C135.266 185.61 135.521 185.717 135.709 185.906C135.896 186.095 136.001 186.351 136 186.617V230H139V186.617C139.005 185.552 138.586 184.528 137.836 183.771C137.085 183.015 136.066 182.587 135 182.582H104.828C102.459 179.594 99.4446 177.18 96.0111 175.521C92.5776 173.861 88.8135 172.999 85 172.999C81.1866 172.999 77.4224 173.861 73.9889 175.521C70.5555 177.18 67.5414 179.594 65.172 182.582H35C33.9346 182.587 32.9146 183.015 32.1645 183.771C31.4144 184.528 30.9955 185.552 31 186.617V230H34ZM85 176.026C87.9343 176.027 90.8394 176.607 93.5494 177.732C96.2593 178.857 98.7208 180.506 100.793 182.583H69.207C71.2792 180.506 73.7407 178.857 76.4506 177.732C79.1606 176.607 82.0658 176.027 85 176.026Z" fill="rgba(250, 250, 250, 1)"></path>
          <path d="M106 208H64.0001C62.9392 208 61.9218 208.421 61.1716 209.172C60.4215 209.922 60.0001 210.939 60.0001 212V230H63.0001V212C63.0001 211.735 63.1054 211.48 63.293 211.293C63.4805 211.105 63.7348 211 64.0001 211H106C106.265 211 106.52 211.105 106.707 211.293C106.895 211.48 107 211.735 107 212V230H110V212C110 210.939 109.579 209.922 108.828 209.172C108.078 208.421 107.061 208 106 208Z" fill="rgba(250, 250, 250, 1)"></path>
          <path d="M34 0V43.383C33.9992 43.6493 34.104 43.905 34.2914 44.0942C34.4789 44.2833 34.7337 44.3904 35 44.392H135C135.266 44.3904 135.521 44.2833 135.709 44.0942C135.896 43.905 136.001 43.6493 136 43.383V0H139V43.383C139.004 44.4485 138.586 45.4721 137.836 46.2288C137.085 46.9855 136.065 47.4132 135 47.418H104.828C102.459 50.4061 99.4446 52.82 96.0111 54.4794C92.5776 56.1387 88.8134 57.0006 85 57.0006C81.1865 57.0006 77.4224 56.1387 73.9889 54.4794C70.5554 52.82 67.5413 50.4061 65.172 47.418H35C33.9345 47.4132 32.9146 46.9855 32.1644 46.2288C31.4143 45.4721 30.9955 44.4485 31 43.383V0H34ZM85 53.974C87.9342 53.9728 90.8394 53.393 93.5493 52.2679C96.2592 51.1428 98.7207 49.4944 100.793 47.417H69.207C71.2791 49.4945 73.7406 51.1429 76.4506 52.2681C79.1605 53.3932 82.0657 53.9729 85 53.974Z" fill="rgba(250, 250, 250, 1)"></path>
          <path d="M106 22H64C62.9391 22 61.9217 21.5786 61.1716 20.8284C60.4214 20.0783 60 19.0609 60 18V0H63V18C63 18.2652 63.1054 18.5196 63.2929 18.7071C63.4804 18.8946 63.7348 19 64 19H106C106.265 19 106.52 18.8946 106.707 18.7071C106.895 18.5196 107 18.2652 107 18V0H110V18C110 19.0609 109.579 20.0783 108.828 20.8284C108.078 21.5786 107.061 22 106 22Z" fill="rgba(250, 250, 250, 1)"></path>
          <path d="M170 114H107.444C107.064 108.306 104.534 102.97 100.367 99.0719C96.1993 95.1737 90.7063 93.0049 85 93.0049C79.2937 93.0049 73.8007 95.1737 69.6334 99.0719C65.4662 102.97 62.9363 108.306 62.556 114H0V117H62.556C62.9363 122.694 65.4662 128.03 69.6334 131.928C73.8007 135.826 79.2937 137.995 85 137.995C90.7063 137.995 96.1993 135.826 100.367 131.928C104.534 128.03 107.064 122.694 107.444 117H170V114ZM85 96C89.908 96.0076 94.6329 97.8645 98.2329 101.201C101.833 104.537 104.043 109.107 104.424 114H65.576C65.9566 109.107 68.1671 104.537 71.7671 101.201C75.3671 97.8645 80.092 96.0076 85 96ZM85 135C80.092 134.992 75.3671 133.135 71.7671 129.799C68.1671 126.463 65.9566 121.893 65.576 117H104.424C104.043 121.893 101.833 126.463 98.2329 129.799C94.6329 133.135 89.908 134.992 85 135Z" fill="rgba(250, 250, 250, 1)"></path>
        </svg>
        <div title="Kiper" class="gk">
          <span class="inline-block px-2 py-1 text-xs text-white">GK</span>
        </div>
        <div title="Bek Kanan" class="rb">
          <span class="inline-block px-2 py-1 text-xs text-white">RB</span>
        </div>
        <div title="Bek Tengah" class="cb">
          <span class="inline-block px-2 py-1 text-xs text-white">CB</span>
        </div>
        <div title="Bek Kiri" class="lb">
          <span class="inline-block px-2 py-1 text-xs text-white">LB</span>
        </div>
        <div title="Gelandang Bertahan Tengah" class="dm">
          <span class="inline-block px-2 py-1 text-xs text-white">DM</span>
        </div>
        <div title="Gelandang Kanan" class="rm">
          <span class="inline-block px-2 py-1 text-xs text-white">RM</span>
        </div>
        <div title="Gelandang Tengah" class="cm">
          <span class="inline-block px-2 py-1 text-xs text-white">CM</span>
        </div>

        <div title="Gelandang Kiri" class="lm">
          <span class="inline-block px-2 py-1 text-xs text-white">LM</span>
        </div>
        <div title="Sayap Kanan" class="rw">
          <span class="inline-block px-2 py-1 text-xs text-white">RW</span>
        </div>
        <div title="Gelandang Serang Tengah" class="am">
          <span class="inline-block px-2 py-1 text-xs text-white">AM</span>
        </div>
        <div title="Sayap Kiri" class="lw">
          <span class="inline-block px-2 py-1 text-xs text-white">LW</span>
        </div>
        <div title="Penyerang" class="st">
          <span class="inline-block px-2 py-1 text-xs text-white">ST</span>
        </div>
      </section>

    </div>
  </div>
  <div class="flex flex-col md:flex-row space-y-3 md:space-x-3 mx-auto w-full lg:w-1/2">
    <div class="w-full md:w-1/2 flex flex-col space-y-4">
      <div class="flex flex-row justify-between mx-auto w-full md:w-12/12 space-x-6 items-center">
        <span class="text-2xl font-bold text-[#002f6c]">
          Statistic
        </span>
      </div>
      <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2 ">
        <div class="flex flex-wrap md:flex-nowrap md:justify-end space-x-2">

          <!-- SortSeason -->

        </div>
        <div class="flex space-x-2">
          <div class="flex flex-wrap md:flex-nowrap items-center space-x-2">

            <!-- SortCompetition -->

          </div>
        </div>
      </div>
      <div class="w-full">
        <table class="w-full">
          <tbody>
            <tr>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path fillRule="evenodd" clipRule="evenodd" d="M11.532 5.25H0.0890503L1.14829 10.6642L9.28908 11.8703L8.73617 12.4842L8.77645 12.8221C9.17309 16.1496 11.9511 18.75 15.347 18.75C18.3485 18.75 20.8665 16.7195 21.6854 13.95H21.7999C22.8769 13.95 23.7499 13.0769 23.7499 12C23.7499 10.923 22.8769 10.05 21.7999 10.05H21.6854C20.8665 7.28048 18.3484 5.25 15.347 5.25H13.21L11.532 6.10768V5.25ZM21.9534 11.5768C21.9619 11.7168 21.9662 11.8579 21.9662 12C21.9662 12.1421 21.9619 12.2832 21.9534 12.4231C22.1264 12.3604 22.2499 12.1946 22.2499 12C22.2499 11.8054 22.1264 11.6396 21.9534 11.5768ZM1.91095 6.75H10.032V8.55898L13.5712 6.75H15.347C18.1588 6.75 20.4662 9.08484 20.4662 12C20.4662 14.9152 18.1588 17.25 15.347 17.25C12.8557 17.25 10.7612 15.4182 10.3153 12.9723L12.275 10.7963L2.41683 9.33578L1.91095 6.75Z"></path>
                    </svg>
                  </div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Mathes Played
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      162
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path fillRule="evenodd" clipRule="evenodd" d="M11.25 2.77997C7.60694 3.07228 4.5594 5.47541 3.33127 8.76549L7.89199 10.1812L11.25 7.48923V2.77997ZM2.75 12C2.75 11.3874 2.80955 10.7887 2.92318 10.2094L7.38099 11.5932L8.69652 15.8532L6.37133 19.3409C4.16941 17.6501 2.75 14.9908 2.75 12ZM7.63118 20.1553C8.9323 20.8538 10.4199 21.25 12 21.25C13.5801 21.25 15.0677 20.8538 16.3688 20.1553L14.0986 16.75H9.9014L7.63118 20.1553ZM15.3035 15.8531L17.6287 19.3409C19.8306 17.6501 21.25 14.9908 21.25 12C21.25 11.3874 21.1904 10.7887 21.0768 10.2094L16.619 11.5932L15.3035 15.8531ZM12.75 2.77997C16.3931 3.07228 19.4406 5.47541 20.6687 8.76549L16.108 10.1812L12.75 7.48924V2.77997ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM8.86713 11.3219L10.0802 15.25H13.9198L15.1329 11.3219L12 8.81048L8.86713 11.3219Z" fill="currentColor"></path>
                    </svg>
                  </div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Goals
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      12
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path fillRule="evenodd" clipRule="evenodd" d="M22.75 6.99999C22.75 6.58578 22.4142 6.24999 22 6.24999H18.4758C17.263 3.87923 14.8231 2.25 12 2.25C9.17684 2.25 6.73701 3.87923 5.52414 6.24999L2 6.24999C1.58579 6.24999 1.25 6.58578 1.25 6.99999V21C1.25 21.4142 1.58579 21.75 2 21.75H7H17H22C22.4142 21.75 22.75 21.4142 22.75 21V6.99999ZM16.25 16.75V20.25H7.75L7.75 16.75H16.25ZM17.75 16V20.25H21.25V7.74999L2.75 7.74999V20.25H6.25V16C6.25 15.5858 6.58579 15.25 7 15.25L17 15.25C17.4142 15.25 17.75 15.5858 17.75 16ZM16.7314 6.24999C15.6789 4.73342 13.9484 3.75 12 3.75C10.0516 3.75 8.32105 4.73342 7.26861 6.24999L16.7314 6.24999ZM11 11C11 11.5523 11.4477 12 12 12C12.5523 12 13 11.5523 13 11C13 10.4477 12.5523 9.99999 12 9.99999C11.4477 9.99999 11 10.4477 11 11Z"></path>
                    </svg>
                  </div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Assists
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      11
                    </span>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path fillRule="evenodd" clipRule="evenodd" d="M12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12C2.75 9.45308 3.77836 7.14779 5.4443 5.47426L4.38123 4.41602C2.44688 6.35918 1.25 9.04054 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25V2.75ZM7.2076 6.17972C6.91276 6.00453 6.53665 6.05165 6.29415 6.29416C6.05164 6.53666 6.00452 6.91277 6.17971 7.20761L10.3514 14.2282C10.3833 14.2819 10.4217 14.3313 10.4658 14.3754C11.5666 15.4762 13.3637 15.5907 14.4772 14.4772C15.5907 13.3637 15.4762 11.5666 14.3754 10.4658C14.3313 10.4217 14.2819 10.3833 14.2282 10.3514L7.2076 6.17972ZM13.4165 13.4165C12.9725 13.8605 12.1698 13.8977 11.5884 13.3736L8.97435 8.97436L13.3736 11.5884C13.8977 12.1698 13.8605 12.9726 13.4165 13.4165Z"></path>
                    </svg>
                  </div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Minutes Played
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      13.208
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path d="M6.53034 3.53033L5.46968 2.46967L1.93935 6L5.46968 9.53033L6.53034 8.46967L4.81067 6.75H17C18.7949 6.75 20.25 8.20507 20.25 10V12H21.75V10C21.75 7.37665 19.6234 5.25 17 5.25H4.81066L6.53034 3.53033ZM2.25 14V12H3.75V14C3.75 15.7949 5.20507 17.25 7 17.25H19.1893L17.4697 15.5303L18.5303 14.4697L22.0607 18L18.5303 21.5303L17.4697 20.4697L19.1893 18.75H7C4.37665 18.75 2.25 16.6234 2.25 14Z"></path>
                    </svg>
                  </div>
                  <div class="text-center leading-tight">
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Substitution <br /> (On)
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      13
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path d="M6.53034 3.53033L5.46968 2.46967L1.93935 6L5.46968 9.53033L6.53034 8.46967L4.81067 6.75H17C18.7949 6.75 20.25 8.20507 20.25 10V12H21.75V10C21.75 7.37665 19.6234 5.25 17 5.25H4.81066L6.53034 3.53033ZM2.25 14V12H3.75V14C3.75 15.7949 5.20507 17.25 7 17.25H19.1893L17.4697 15.5303L18.5303 14.4697L22.0607 18L18.5303 21.5303L17.4697 20.4697L19.1893 18.75H7C4.37665 18.75 2.25 16.6234 2.25 14Z"></path>
                    </svg>
                  </div>
                  <div class="text-center leading-tight">
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Substitutions <br /> (Off)
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      22
                    </span>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="h-8 w-6 rounded bg-yellow-300 shadow"></div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Yellow Cards
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      21
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="h-8 w-6 rounded bg-[#dc052d] shadow"></div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Red Cards
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      2
                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-4 border ">
                <div class="flex flex-col justify-center items-center">
                  <div class="text-[#002f6c]">
                    <svg height="32" width="32" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" class="base-icon__StyledIconSvg-sc-fzrbhv-0 eCHnXp">
                      <title>icon</title>
                      <path fillRule="evenodd" clipRule="evenodd" d="M11.532 5.25H0.0890503L1.14829 10.6642L9.28908 11.8703L8.73617 12.4842L8.77645 12.8221C9.17309 16.1496 11.9511 18.75 15.347 18.75C18.3485 18.75 20.8665 16.7195 21.6854 13.95H21.7999C22.8769 13.95 23.7499 13.0769 23.7499 12C23.7499 10.923 22.8769 10.05 21.7999 10.05H21.6854C20.8665 7.28048 18.3484 5.25 15.347 5.25H13.21L11.532 6.10768V5.25ZM21.9534 11.5768C21.9619 11.7168 21.9662 11.8579 21.9662 12C21.9662 12.1421 21.9619 12.2832 21.9534 12.4231C22.1264 12.3604 22.2499 12.1946 22.2499 12C22.2499 11.8054 22.1264 11.6396 21.9534 11.5768ZM1.91095 6.75H10.032V8.55898L13.5712 6.75H15.347C18.1588 6.75 20.4662 9.08484 20.4662 12C20.4662 14.9152 18.1588 17.25 15.347 17.25C12.8557 17.25 10.7612 15.4182 10.3153 12.9723L12.275 10.7963L2.41683 9.33578L1.91095 6.75Z"></path>
                    </svg>
                  </div>
                  <div>
                    <span class="text-xs text-[#002f6c] font-semibold">
                      Mathes Played
                    </span>
                  </div>
                  <div>
                    <span class="text-lg font-bold text-[#dc052d]">
                      162
                    </span>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div></div>
    </div>
  </div>
</div>

<!-- NewsRelated -->
<div class="h-max flex flex-col space-y-3 px-2 md:px-6 py-4 md:py-4 justify-center2 items-center2 bg-[#f5f7f9]">
  <div class="mx-auto w-12/12 md:w-12/12 lg:w-1/2">

    <div class="flex flex-row justify-between mx-auto md:mx-0 w-11/12 md:w-12/12 lg:w-1/2 items-center">
      <a href="/" class="flex items-center hover:opacity-80">
        <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
          Related News
        </span>
      </a>
    </div>
    <div class="mx-auto w-full md:w-12/12 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-2">

      @foreach($articles as $article)
      <div class="px-3 py-3 ">
        <div class=" bg-white group flex flex-col overflow-hidden hover:scale-105 shadow ">
          <a href="{{ url('news/'. $article->slug) }}" class="relative">
            <img src="{{ url('assets/img/fans/fans1.png') }}" alt="" class="w-full" />
            <div class="absolute opacity-0 group-hover:opacity-75 z-20 inset-0 mix-blend-overlay w-full bg-gradient-to-br from-purple-hot to-teal"></div>
          </a>
          <div class="px-3 py-2 pb-4 flex flex-col space-y-1 leading-tight">
            <div class="font-semibold text-xs md:text-xs uppercase text-red-500">
              {{ $article->category($article->category_id) }}
            </div>
            <a href="{{ url('news/'. $article->slug) }}">
              <span class="font-semibold text-base md:text-md text-[#002f6c] leading-tight">{{ $article->title }}</span>
            </a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection