@extends('frontend.layout')

@section('content')

@dump($slug)

<!-- MatchResult -->
<x-match-result :slug="$slug" />

<div class="h-max flex flex-col py-0 bg-white">
  <div class="flex flex-col py-4 px-3 md:px-6 mx-auto w-full lg:w-1/2">
    <div class="flex flex-row justify-between mx-auto w-full ">
      <span class="text-lg md:text-2xl font-bold text-[#002f6c] uppercase">
        Lineup
      </span>
    </div>
    <!-- head -->
    <div class="flex w-full justify-between items-center h-14 mt-4 py-1.5 border-y">
      <div class="flex w-2/6 justify-center">
        <div class="w-8">
          <img src="{{ url('assets/img/clubs/bayern.png') }}" alt="" />
        </div>
      </div>
      <div class=" w-4/6">
        <div class="flex w-full mx-auto justify-center space-x-6">
          <div class="flex ">
            <span class="text-sm font-bold leading-tight text-[#002f6c]">
              FC Bayern Munich
            </span>
          </div>
        </div>
      </div>
      <div class=" w-4/6">
        <div class="flex w-full mx-auto justify-center space-x-6">
          <div class="flex text-end">
            <span class="text-sm font-bold leading-tight text-[#002f6c]">
              Manchester City
            </span>
          </div>
        </div>
      </div>
      <div class="flex w-2/6  md:justify-center">
        <div class="w-8">
          <img src="{{ url('assets/img/clubs/manchester-city.png') }}" alt="" />
        </div>
      </div>
    </div>
    <!-- end head -->

  </div>

<!-- first team -->

  <!-- COACH -->
  <section class=" mx-auto w-full lg:w-1/2 px-3 md:px-6  min-h-14 bg-white md:h-14">
    <div class="flex justify-between items-center px-4 py-3 border-b">
    <div class="flex flex-row items-center">
      <div class="mr-3 flex flex-col justify-center items-center">
        <div class="coachIcon">
          <img src="{{ url('assets/img/player/guardiola.png') }}" class="img Playerimg rounded-full bg-white " alt="" />
        </div>
        <div class="block md:hidden">
          <span class="font-semibold text-xs text-[#002f6c]">
            Pep Guardiola
          </span>
        </div>
      </div>
      <span class="hidden md:block text-sm text-[#002f6c] font-bold capitalize">
        Pep Guardiola
      </span>
    </div>
    <h2 class="text-sm text-[#002f6c] font-bold capitalize">Pelatih</h2>
    <div class="flex flex-row-reverse items-center ">
      <div class="ml-3 flex flex-col justify-center items-center">
        <div class="coachIcon">
          <img src="{{ url('assets/img/player/arteta.png') }}" class="img Playerimg rounded-full bg-white " alt="" />
        </div>

        <div class="block md:hidden">
          <span class="font-semibold text-xs text-slate-900">
            Mikel Arteta
          </span>
        </div>
      </div>
      <span class="hidden md:block text-sm text-[#002f6c] font-bold capitalize">
        Mikel Arteta
      </span>
    </div>
    </div>
  </section>

  <!-- Subtitution -->
  <section class="flex mx-auto w-full lg:w-1/2 px-3 md:px-6 justify-between py-[20px] ">

    <ul class="w-1/2 px-4 md:divide-y">

      @foreach($HomeSubsData as $homeS)
      <div class=" last:last-of-type:border-b">
        <li class="hidden md:flex justify-between h-[60px] ">
          <div class="flex items-center ">
            <a href="/">
              <div class="flex items-center space-x-2 ">
                <div class="playerIcon rounded-full border border-slate-300">
                  <img src="{{ url('assets/img/player/'. $homeS['img'] .'.png') }}" alt="" class="rounded-full w-full object-cover" />
                </div>
                <div class="playerRating"><span class="text-[11px]">{{ $homeS['rate'] }}</span></div>
                <div class="flex flex-col ">
                  <span class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500 font-semibold ">{{ $homeS['number'] }}</span>
                    <span class="text-sm text-[#002f6c] font-bold capitalize">{{ $homeS['name'] }}</span>
                  </span>
                  <span class="css-1gu2818-NotAvailableInfoContainer e4z8hgt4"></span>
                </div>
              </div>
            </a>
          </div>
          <div class="flex items-center justify-end ">
            <div class="flex mr-[6px] "></div>
            <div class="flex justify-center items-center ">
              <span class="font-semibold text-sm text-green-800 ">{{ $homeS['subs'] }}&lsquo;</span>
              <div class="badgeContainer ">
                <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.99984 0.333659C5.23496 0.344154 3.54536 1.0499 2.29739 2.29788C1.04941 3.54585 0.343664 5.23545 0.333169 7.00033C0.345611 8.76626 1.0533 10.4562 2.30294 11.704C3.55257 12.9518 5.24352 13.6571 7.00947 13.667C8.77308 13.6553 10.461 12.9489 11.7072 11.7009C12.9534 10.4529 13.6574 8.76396 13.6665 7.00033C13.6562 5.23539 12.9505 3.54568 11.7025 2.29767C10.4545 1.04965 8.76477 0.343961 6.99984 0.333659ZM10.7184 7.00033C10.72 7.09845 10.7 7.19574 10.66 7.28533C10.6199 7.37491 10.5607 7.45463 10.4865 7.51885L8.04206 9.92255C7.92463 10.0362 7.76697 10.0988 7.60354 10.0966C7.52522 10.0984 7.44734 10.0844 7.37462 10.0552C7.3019 10.0261 7.23585 9.98251 7.18045 9.92712C7.12506 9.87172 7.08147 9.80567 7.05234 9.73295C7.0232 9.66023 7.00912 9.58235 7.01095 9.50403C7.01235 9.42273 7.0302 9.34255 7.06343 9.26832C7.09665 9.1941 7.14457 9.12738 7.20428 9.07218L8.06798 8.2344L8.8828 7.58329L7.40132 7.64773L3.89539 7.64773C3.81108 7.6498 3.72725 7.6344 3.64918 7.60249C3.57112 7.57058 3.5005 7.52286 3.44177 7.46233C3.38305 7.40179 3.33749 7.32976 3.30796 7.25076C3.27844 7.17176 3.26558 7.0875 3.27021 7.00329C3.26614 6.91922 3.27937 6.8352 3.3091 6.75645C3.33883 6.67769 3.38441 6.60588 3.44302 6.54547C3.50163 6.48505 3.57202 6.43731 3.64984 6.40521C3.72765 6.37311 3.81123 6.35733 3.89539 6.35885L7.39687 6.35885L8.87835 6.43292L8.07317 5.77588L7.20354 4.94477C7.142 4.88962 7.09293 4.82198 7.0596 4.74636C7.02626 4.67074 7.00942 4.58889 7.01021 4.50625C7.00838 4.42793 7.02246 4.35006 7.0516 4.27734C7.08073 4.20462 7.12432 4.13856 7.17971 4.08317C7.23511 4.02777 7.30116 3.98418 7.37388 3.95505C7.4466 3.92592 7.52448 3.91183 7.6028 3.91366C7.76566 3.91446 7.92224 3.97662 8.04132 4.08773L10.4858 6.49144C10.5592 6.55507 10.618 6.63382 10.6581 6.72229C10.6983 6.81077 10.7188 6.90688 10.7184 7.00403L10.7184 7.00033Z" fill="#00985F"></path>
                </svg>
              </div>
            </div>
          </div>
        </li>
        <div class="block md:hidden ">
          <div class=" flex  justify-center items-center">
            <a href="/id/matches/athletic-club-vs-real-madrid/2dil23?player=800882#4205639">
              <div class="flex flex-col items-center text-[15px] pt-[27px]">
                <div class="relative">
                  <div class="playerIcon">
                    <img src="{{ url('assets/img/player/'. $homeS['img'] .'.png') }}" class="w-10 h-10 rounded-full object-cover border-2 bg-gray-300" alt="" />
                  </div>
                  <!-- subs -->
                  <div class="absolute @if($homeS['subs'] != false){{ 'block' }}@else{{ 'hidden' }}@endif
                          flex bottom-[34px] right-[32px] flex-col items-center">
                    <div class="flex flex-row space-x-0 items-center ">
                      <span class="text-[12px] leading-[14px] text-slate-600 font-semibold ">
                        {{ $homeS['subs'] }}&lsquo;
                      </span>
                      <div class="badgeContainer ">
                        <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.99984 0.333659C5.23496 0.344154 3.54536 1.0499 2.29739 2.29788C1.04941 3.54585 0.343664 5.23545 0.333169 7.00033C0.345611 8.76626 1.0533 10.4562 2.30294 11.704C3.55257 12.9518 5.24352 13.6571 7.00947 13.667C8.77308 13.6553 10.461 12.9489 11.7072 11.7009C12.9534 10.4529 13.6574 8.76396 13.6665 7.00033C13.6562 5.23539 12.9505 3.54568 11.7025 2.29767C10.4545 1.04965 8.76477 0.343961 6.99984 0.333659ZM10.7184 7.00033C10.72 7.09845 10.7 7.19574 10.66 7.28533C10.6199 7.37491 10.5607 7.45463 10.4865 7.51885L8.04206 9.92255C7.92463 10.0362 7.76697 10.0988 7.60354 10.0966C7.52522 10.0984 7.44734 10.0844 7.37462 10.0552C7.3019 10.0261 7.23585 9.98251 7.18045 9.92712C7.12506 9.87172 7.08147 9.80567 7.05234 9.73295C7.0232 9.66023 7.00912 9.58235 7.01095 9.50403C7.01235 9.42273 7.0302 9.34255 7.06343 9.26832C7.09665 9.1941 7.14457 9.12738 7.20428 9.07218L8.06798 8.2344L8.8828 7.58329L7.40132 7.64773L3.89539 7.64773C3.81108 7.6498 3.72725 7.6344 3.64918 7.60249C3.57112 7.57058 3.5005 7.52286 3.44177 7.46233C3.38305 7.40179 3.33749 7.32976 3.30796 7.25076C3.27844 7.17176 3.26558 7.0875 3.27021 7.00329C3.26614 6.91922 3.27937 6.8352 3.3091 6.75645C3.33883 6.67769 3.38441 6.60588 3.44302 6.54547C3.50163 6.48505 3.57202 6.43731 3.64984 6.40521C3.72765 6.37311 3.81123 6.35733 3.89539 6.35885L7.39687 6.35885L8.87835 6.43292L8.07317 5.77588L7.20354 4.94477C7.142 4.88962 7.09293 4.82198 7.0596 4.74636C7.02626 4.67074 7.00942 4.58889 7.01021 4.50625C7.00838 4.42793 7.02246 4.35006 7.0516 4.27734C7.08073 4.20462 7.12432 4.13856 7.17971 4.08317C7.23511 4.02777 7.30116 3.98418 7.37388 3.95505C7.4466 3.92592 7.52448 3.91183 7.6028 3.91366C7.76566 3.91446 7.92224 3.97662 8.04132 4.08773L10.4858 6.49144C10.5592 6.55507 10.618 6.63382 10.6581 6.72229C10.6983 6.81077 10.7188 6.90688 10.7184 7.00403L10.7184 7.00033Z" fill="#00985F"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <!-- rating -->
                  <div class="absolute left-[27px] bottom-[34px] ">
                    <div class="playerRating">
                      <span class="text-[11px]">{{ $homeS['rate'] }}</span>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="@if($homeS['yellowCard'] != false){{ 'flex' }}@else{{ 'hidden' }}@endif absolute bottom-[13px] right-[36px] ml-[-9px] ">
                    <div class="badgeContainer ">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_800_11560)">
                          <path d="M9.5459 0.848389H4.45499C3.40063 0.848389 2.5459 1.70312 2.5459 2.75748V11.2421C2.5459 12.2965 3.40063 13.1512 4.45499 13.1512H9.5459C10.6003 13.1512 11.455 12.2965 11.455 11.2421V2.75748C11.455 1.70312 10.6003 0.848389 9.5459 0.848389Z" fill="#fece2f"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_800_11560">
                            <rect width="14" height="14" fill="white" stroke="none"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="flex absolute bottom-[13px] left-[36px] "></div>
                  <!-- assist -->
                  <div class="absolute bottom-[-8px] right-[32px] @if($homeS['assist'] != false){{ 'flex' }}@else{{ 'hidden' }}@endif flex-row justify-start items-center">
                    <div class="badgeContainer ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14 14">
                        <ellipse cx="7" cy="7" rx="7" ry="7" fill="transparent"></ellipse>
                        <g id="ic_assist" transform="translate(0 0)">
                          <path id="Path_88" fill="rgba(51, 51, 51, 1.0)" fill-rule="evenodd" d="M12.608 5.7c-.175.1-.377.209-.6.337-.156.09-.322.188-.493.3-.806.524-6.651 4.113-7.836 4.793s-3.035.929-3.565.016 1.029-1.952 1.948-3.055C3.11 6.833 4.48 5.461 4.48 5.461c-.088-.426.332-.712.494-.805a.607.607 0 0 1 .06-.03c-.117-.5.631-.929.631-.929l1.147-2.518a.231.231 0 0 1 .094-.105.236.236 0 0 1 .208-.013l1.024.424c.673.283-.769 1.89-.465 1.962a1.67 1.67 0 0 0 1.043-.273 2.826 2.826 0 0 0 .735-.614c.48-.56-.03-1.38.249-1.543.1-.054.287-.034.642.095 1.393.535 2.192 2.211 2.776 3.254.402.709.121.973-.51 1.334zm-8.018.693a.085.085 0 0 0-.075.022l-.631.62a.079.079 0 0 0 .04.135l3.227.669a.09.09 0 0 0 .058-.009l.981-.563a.081.081 0 0 0-.02-.15zm5.558-.418l-4.407-.844a.089.089 0 0 0-.075.023l-.628.618a.081.081 0 0 0 .041.137l3.99.807a.089.089 0 0 0 .058-.009l1.041-.581a.082.082 0 0 0-.02-.151zM3.807 12.1a.083.083 0 0 1-.039.1l-.734.422a.082.082 0 0 1-.1-.016l-.546-.579a.083.083 0 0 1-.016-.063 5.312 5.312 0 0 0 1.3-.462zm1.668-.92a.083.083 0 0 1-.039.1l-.736.42a.082.082 0 0 1-.1-.016l-.41-.484c.3-.177.693-.415 1.15-.691zm5.687-3.4a.084.084 0 0 1-.039.1l-.735.422a.082.082 0 0 1-.1-.016l-.488-.5c.441-.27.839-.516 1.158-.716zM12.5 6.132c.1-.052.184-.1.268-.154L12.9 5.9l.222.754a.084.084 0 0 1-.039.1l-.734.422a.082.082 0 0 1-.1-.016L11.7 6.6c.144-.093.294-.182.466-.281.118-.068.224-.129.334-.187z"></path>
                        </g>
                      </svg>
                    </div>
                  </div>
                  <!-- goal -->
                  <div class="absolute bottom-[-8px] left-[33px] @if($homeS['goal'] == true){{ 'flex' }}@else{{ 'hidden' }}@endif flex-row justify-start items-center">
                    <div class="badgeContainer ">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1030_9128)">
                          <circle cx="7" cy="7" r="5.25" fill="#fff"></circle>
                          <path d="M8.88284 9.49699C8.72009 9.49699 8.55734 9.48591 8.39459 9.46958C8.34242 9.4595 8.29347 9.43694 8.25192 9.40382C8.21037 9.3707 8.17746 9.32802 8.156 9.27941C7.988 8.65524 7.82525 8.06374 7.66775 7.48858C7.6388 7.41343 7.63706 7.33052 7.66285 7.25423C7.68863 7.17794 7.74031 7.11308 7.80892 7.07091L9.17625 5.84591C9.2334 5.7961 9.30665 5.76865 9.38246 5.76865C9.45827 5.76865 9.53152 5.7961 9.58867 5.84591C10.0474 6.09633 10.4588 6.42503 10.8043 6.81716C10.8827 6.91412 10.9266 7.03436 10.9292 7.15899C10.932 7.84171 10.7287 8.50937 10.3458 9.07466C10.342 9.09048 10.3346 9.10523 10.3243 9.11782C10.253 9.2147 10.1577 9.29131 10.0478 9.34008C9.67045 9.44934 9.27911 9.50241 8.88634 9.49758L8.88284 9.49699Z" fill="rgba(34, 34, 34, 1.0)"></path>
                          <path d="M4.46584 8.17283C4.40038 8.17345 4.33693 8.15023 4.28734 8.10749C3.85925 7.84832 3.48656 7.50715 3.19067 7.10358C3.14231 7.03529 3.11586 6.95391 3.11484 6.87024C3.11458 6.23357 3.28305 5.60821 3.60309 5.05783C3.60723 5.03788 3.61894 5.02032 3.63575 5.00883C3.68407 4.96581 3.74151 4.93429 3.80375 4.91666C4.17914 4.77018 4.57855 4.69501 4.9815 4.69499C5.1061 4.68414 5.23141 4.68414 5.356 4.69499C5.42674 4.70258 5.49274 4.73415 5.54304 4.78445C5.59335 4.83475 5.62492 4.90076 5.6325 4.97149C5.72992 5.39499 5.83842 5.82899 5.94167 6.26299L6.02334 6.61299C6.03691 6.666 6.036 6.72167 6.02071 6.77421C6.00542 6.82674 5.97631 6.87421 5.93642 6.91166L4.67234 8.09699C4.64603 8.1233 4.61472 8.14409 4.58026 8.15811C4.5458 8.17214 4.50888 8.17912 4.47167 8.17866H4.46584V8.17283Z" fill="rgba(34, 34, 34, 1.0)"></path>
                          <path d="M6.99984 1.16699C5.84612 1.16699 4.7183 1.50911 3.75901 2.15009C2.79973 2.79106 2.05205 3.7021 1.61054 4.76801C1.16903 5.83391 1.05351 7.0068 1.27859 8.13835C1.50367 9.26991 2.05924 10.3093 2.87505 11.1251C3.69086 11.9409 4.73026 12.4965 5.86181 12.7216C6.99337 12.9467 8.16626 12.8311 9.23216 12.3896C10.2981 11.9481 11.2091 11.2004 11.8501 10.2412C12.4911 9.28186 12.8332 8.15405 12.8332 7.00033C12.8332 5.45323 12.2186 3.9695 11.1246 2.87554C10.0307 1.78157 8.54694 1.16699 6.99984 1.16699ZM7.07042 11.3304L7.03776 11.2137C7.02663 11.134 6.98701 11.0609 6.92622 11.008C6.86543 10.9552 6.78757 10.9261 6.70701 10.9262C6.03797 10.915 5.38769 10.7032 4.84034 10.3183C4.78464 10.2907 4.72343 10.2759 4.66126 10.2752C4.62301 10.2718 4.58447 10.2763 4.54804 10.2884C4.51162 10.3006 4.47808 10.3201 4.44951 10.3457L4.05342 10.7202C3.29755 10.1246 2.74097 9.31297 2.45775 8.39325C2.17453 7.47354 2.1781 6.48938 2.46798 5.57174C2.75785 4.6541 3.3203 3.84649 4.08047 3.25638C4.84063 2.66626 5.76248 2.32163 6.72334 2.26833L6.78167 2.47424C6.82056 2.58819 6.85303 2.70213 6.87909 2.81608C6.89714 2.869 6.92709 2.91708 6.96663 2.95662C7.00617 2.99616 7.05425 3.02611 7.10717 3.04416H7.15617C7.80616 3.14238 8.43738 3.33908 9.02809 3.62749C9.06957 3.65019 9.11697 3.65975 9.16401 3.65491C9.22873 3.65539 9.2924 3.63847 9.34834 3.60591L9.88034 3.23141C10.6579 3.82155 11.2341 4.63761 11.53 5.56787C11.826 6.49813 11.8271 7.49711 11.5333 8.42804C11.2396 9.35898 10.6652 10.1764 9.88898 10.7683C9.11273 11.3602 8.17249 11.6977 7.19701 11.7347L7.07042 11.3304Z" fill="rgba(34, 34, 34, 1.0)"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_1030_9128">
                            <rect width="14" height="14" fill="white"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                </div>
                <span class="relative text-[12px] text-center  text-[#002f6c] font-bold capitalize break-words font-semibold2 leading-[16px] max-w-full mt-[12px] py-[2px] h-[32px] ">
                  <span class="mr-[4px] inline-block text-slate-800 ">
                    {{ $homeS['number'] }}
                  </span>
                  <span class="capitalize">
                    {{ $homeS['name'] }}
                  </span>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </ul>
    <ul class="w-1/2 px-4 md:divide-y">

      @foreach($AwaySubsData as $awayS)
      <div class=" last:last-of-type:border-b">
        <li class="hidden md:flex justify-between h-[60px] ">
          <div class="flex items-center ">
            <a href="/">
              <div class="flex items-center space-x-2 ">
                <div class="playerIcon rounded-full border border-slate-300">
                  <img src="{{ url('assets/img/player/'. $awayS['img'] .'.png') }}" alt="" class="rounded-full w-full object-cover" />
                </div>
                <div class="playerRating"><span class="text-[11px] ">{{ $awayS['rate'] }}</span></div>
                <div class="flex flex-col ">
                  <span class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500 font-semibold ">{{ $awayS['number'] }}</span>
                    <span class="text-sm text-[#002f6c] font-bold capitalize">{{ $awayS['name'] }}</span>
                  </span>
                  <span class="css-1gu2818-NotAvailableInfoContainer e4z8hgt4"></span>
                </div>
              </div>
            </a>
          </div>
          <div class="flex items-center justify-end ">
            <div class="flex mr-[6px] "></div>
            <div class="flex justify-center items-center ">
              <span class="font-semibold text-sm text-green-800 ">{{ $awayS['subs'] }}&lsquo;</span>
              <div class="badgeContainer ">
                <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.99984 0.333659C5.23496 0.344154 3.54536 1.0499 2.29739 2.29788C1.04941 3.54585 0.343664 5.23545 0.333169 7.00033C0.345611 8.76626 1.0533 10.4562 2.30294 11.704C3.55257 12.9518 5.24352 13.6571 7.00947 13.667C8.77308 13.6553 10.461 12.9489 11.7072 11.7009C12.9534 10.4529 13.6574 8.76396 13.6665 7.00033C13.6562 5.23539 12.9505 3.54568 11.7025 2.29767C10.4545 1.04965 8.76477 0.343961 6.99984 0.333659ZM10.7184 7.00033C10.72 7.09845 10.7 7.19574 10.66 7.28533C10.6199 7.37491 10.5607 7.45463 10.4865 7.51885L8.04206 9.92255C7.92463 10.0362 7.76697 10.0988 7.60354 10.0966C7.52522 10.0984 7.44734 10.0844 7.37462 10.0552C7.3019 10.0261 7.23585 9.98251 7.18045 9.92712C7.12506 9.87172 7.08147 9.80567 7.05234 9.73295C7.0232 9.66023 7.00912 9.58235 7.01095 9.50403C7.01235 9.42273 7.0302 9.34255 7.06343 9.26832C7.09665 9.1941 7.14457 9.12738 7.20428 9.07218L8.06798 8.2344L8.8828 7.58329L7.40132 7.64773L3.89539 7.64773C3.81108 7.6498 3.72725 7.6344 3.64918 7.60249C3.57112 7.57058 3.5005 7.52286 3.44177 7.46233C3.38305 7.40179 3.33749 7.32976 3.30796 7.25076C3.27844 7.17176 3.26558 7.0875 3.27021 7.00329C3.26614 6.91922 3.27937 6.8352 3.3091 6.75645C3.33883 6.67769 3.38441 6.60588 3.44302 6.54547C3.50163 6.48505 3.57202 6.43731 3.64984 6.40521C3.72765 6.37311 3.81123 6.35733 3.89539 6.35885L7.39687 6.35885L8.87835 6.43292L8.07317 5.77588L7.20354 4.94477C7.142 4.88962 7.09293 4.82198 7.0596 4.74636C7.02626 4.67074 7.00942 4.58889 7.01021 4.50625C7.00838 4.42793 7.02246 4.35006 7.0516 4.27734C7.08073 4.20462 7.12432 4.13856 7.17971 4.08317C7.23511 4.02777 7.30116 3.98418 7.37388 3.95505C7.4466 3.92592 7.52448 3.91183 7.6028 3.91366C7.76566 3.91446 7.92224 3.97662 8.04132 4.08773L10.4858 6.49144C10.5592 6.55507 10.618 6.63382 10.6581 6.72229C10.6983 6.81077 10.7188 6.90688 10.7184 7.00403L10.7184 7.00033Z" fill="#00985F"></path>
                </svg>
              </div>
            </div>
          </div>
        </li>
        <div class="block md:hidden ">
          <div class=" flex  justify-center items-center">
            <a href="/">
              <div class="flex flex-col items-center text-[15px] pt-[27px]">
                <div class="relative">
                  <div class="playerIcon">
                    <img src="{{ url('assets/img/player/'. $awayS['img'] .'.png') }}" class="w-10 h-10 rounded-full object-cover border-2 bg-gray-300" alt="" />
                  </div>
                  <!-- subs -->
                  <div class="absolute @if( $awayS['subs'] != false ){{ 'block' }}@else{{ 'hidden' }}@endif flex bottom-[34px] right-[32px] flex-col items-center ">
                    <div class="flex flex-row space-x-0 items-center ">
                      <span class="text-[12px] leading-[14px] text-slate-600 font-semibold ">
                        {{ $awayS['subs'] }}&lsquo;
                      </span>
                      <div class="badgeContainer ">
                        <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.99984 0.333659C5.23496 0.344154 3.54536 1.0499 2.29739 2.29788C1.04941 3.54585 0.343664 5.23545 0.333169 7.00033C0.345611 8.76626 1.0533 10.4562 2.30294 11.704C3.55257 12.9518 5.24352 13.6571 7.00947 13.667C8.77308 13.6553 10.461 12.9489 11.7072 11.7009C12.9534 10.4529 13.6574 8.76396 13.6665 7.00033C13.6562 5.23539 12.9505 3.54568 11.7025 2.29767C10.4545 1.04965 8.76477 0.343961 6.99984 0.333659ZM10.7184 7.00033C10.72 7.09845 10.7 7.19574 10.66 7.28533C10.6199 7.37491 10.5607 7.45463 10.4865 7.51885L8.04206 9.92255C7.92463 10.0362 7.76697 10.0988 7.60354 10.0966C7.52522 10.0984 7.44734 10.0844 7.37462 10.0552C7.3019 10.0261 7.23585 9.98251 7.18045 9.92712C7.12506 9.87172 7.08147 9.80567 7.05234 9.73295C7.0232 9.66023 7.00912 9.58235 7.01095 9.50403C7.01235 9.42273 7.0302 9.34255 7.06343 9.26832C7.09665 9.1941 7.14457 9.12738 7.20428 9.07218L8.06798 8.2344L8.8828 7.58329L7.40132 7.64773L3.89539 7.64773C3.81108 7.6498 3.72725 7.6344 3.64918 7.60249C3.57112 7.57058 3.5005 7.52286 3.44177 7.46233C3.38305 7.40179 3.33749 7.32976 3.30796 7.25076C3.27844 7.17176 3.26558 7.0875 3.27021 7.00329C3.26614 6.91922 3.27937 6.8352 3.3091 6.75645C3.33883 6.67769 3.38441 6.60588 3.44302 6.54547C3.50163 6.48505 3.57202 6.43731 3.64984 6.40521C3.72765 6.37311 3.81123 6.35733 3.89539 6.35885L7.39687 6.35885L8.87835 6.43292L8.07317 5.77588L7.20354 4.94477C7.142 4.88962 7.09293 4.82198 7.0596 4.74636C7.02626 4.67074 7.00942 4.58889 7.01021 4.50625C7.00838 4.42793 7.02246 4.35006 7.0516 4.27734C7.08073 4.20462 7.12432 4.13856 7.17971 4.08317C7.23511 4.02777 7.30116 3.98418 7.37388 3.95505C7.4466 3.92592 7.52448 3.91183 7.6028 3.91366C7.76566 3.91446 7.92224 3.97662 8.04132 4.08773L10.4858 6.49144C10.5592 6.55507 10.618 6.63382 10.6581 6.72229C10.6983 6.81077 10.7188 6.90688 10.7184 7.00403L10.7184 7.00033Z" fill="#00985F"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <!-- rating -->
                  <div class="absolute left-[27px] bottom-[34px] ">
                    <div class="playerRating">
                      <span class="text-[11px]">{{ $awayS['rate'] }}</span>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="@if( $awayS['yellowCard'] == true ){{ 'flex' }}@else{{ 'hidden' }}@endif absolute bottom-[13px] right-[36px] ml-[-9px] ">
                    <div class="badgeContainer ">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_800_11560)">
                          <path d="M9.5459 0.848389H4.45499C3.40063 0.848389 2.5459 1.70312 2.5459 2.75748V11.2421C2.5459 12.2965 3.40063 13.1512 4.45499 13.1512H9.5459C10.6003 13.1512 11.455 12.2965 11.455 11.2421V2.75748C11.455 1.70312 10.6003 0.848389 9.5459 0.848389Z" fill="#fece2f"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_800_11560">
                            <rect width="14" height="14" fill="white" stroke="none"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                  <div class="flex absolute bottom-[13px] left-[36px] "></div>
                  <!-- assist -->
                  <div class="absolute bottom-[-8px] right-[32px] @if( $awayS['assist'] == true ){{ 'flex' }}@else{{ 'hidden' }}@endif flex-row justify-start items-center ">
                    <div class="badgeContainer ">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14 14">
                        <ellipse cx="7" cy="7" rx="7" ry="7" fill="transparent"></ellipse>
                        <g id="ic_assist" transform="translate(0 0)">
                          <path id="Path_88" fill="rgba(51, 51, 51, 1.0)" fill-rule="evenodd" d="M12.608 5.7c-.175.1-.377.209-.6.337-.156.09-.322.188-.493.3-.806.524-6.651 4.113-7.836 4.793s-3.035.929-3.565.016 1.029-1.952 1.948-3.055C3.11 6.833 4.48 5.461 4.48 5.461c-.088-.426.332-.712.494-.805a.607.607 0 0 1 .06-.03c-.117-.5.631-.929.631-.929l1.147-2.518a.231.231 0 0 1 .094-.105.236.236 0 0 1 .208-.013l1.024.424c.673.283-.769 1.89-.465 1.962a1.67 1.67 0 0 0 1.043-.273 2.826 2.826 0 0 0 .735-.614c.48-.56-.03-1.38.249-1.543.1-.054.287-.034.642.095 1.393.535 2.192 2.211 2.776 3.254.402.709.121.973-.51 1.334zm-8.018.693a.085.085 0 0 0-.075.022l-.631.62a.079.079 0 0 0 .04.135l3.227.669a.09.09 0 0 0 .058-.009l.981-.563a.081.081 0 0 0-.02-.15zm5.558-.418l-4.407-.844a.089.089 0 0 0-.075.023l-.628.618a.081.081 0 0 0 .041.137l3.99.807a.089.089 0 0 0 .058-.009l1.041-.581a.082.082 0 0 0-.02-.151zM3.807 12.1a.083.083 0 0 1-.039.1l-.734.422a.082.082 0 0 1-.1-.016l-.546-.579a.083.083 0 0 1-.016-.063 5.312 5.312 0 0 0 1.3-.462zm1.668-.92a.083.083 0 0 1-.039.1l-.736.42a.082.082 0 0 1-.1-.016l-.41-.484c.3-.177.693-.415 1.15-.691zm5.687-3.4a.084.084 0 0 1-.039.1l-.735.422a.082.082 0 0 1-.1-.016l-.488-.5c.441-.27.839-.516 1.158-.716zM12.5 6.132c.1-.052.184-.1.268-.154L12.9 5.9l.222.754a.084.084 0 0 1-.039.1l-.734.422a.082.082 0 0 1-.1-.016L11.7 6.6c.144-.093.294-.182.466-.281.118-.068.224-.129.334-.187z"></path>
                        </g>
                      </svg>
                    </div>
                  </div>
                  <!-- goal -->
                  <div class="absolute bottom-[-8px] left-[33px] @if( $awayS['goal'] == true ){{ 'flex' }}@else{{ 'hidden' }}@endif flex-row justify-start items-center ">
                    <div class="badgeContainer ">
                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1030_9128)">
                          <circle cx="7" cy="7" r="5.25" fill="#fff"></circle>
                          <path d="M8.88284 9.49699C8.72009 9.49699 8.55734 9.48591 8.39459 9.46958C8.34242 9.4595 8.29347 9.43694 8.25192 9.40382C8.21037 9.3707 8.17746 9.32802 8.156 9.27941C7.988 8.65524 7.82525 8.06374 7.66775 7.48858C7.6388 7.41343 7.63706 7.33052 7.66285 7.25423C7.68863 7.17794 7.74031 7.11308 7.80892 7.07091L9.17625 5.84591C9.2334 5.7961 9.30665 5.76865 9.38246 5.76865C9.45827 5.76865 9.53152 5.7961 9.58867 5.84591C10.0474 6.09633 10.4588 6.42503 10.8043 6.81716C10.8827 6.91412 10.9266 7.03436 10.9292 7.15899C10.932 7.84171 10.7287 8.50937 10.3458 9.07466C10.342 9.09048 10.3346 9.10523 10.3243 9.11782C10.253 9.2147 10.1577 9.29131 10.0478 9.34008C9.67045 9.44934 9.27911 9.50241 8.88634 9.49758L8.88284 9.49699Z" fill="rgba(34, 34, 34, 1.0)"></path>
                          <path d="M4.46584 8.17283C4.40038 8.17345 4.33693 8.15023 4.28734 8.10749C3.85925 7.84832 3.48656 7.50715 3.19067 7.10358C3.14231 7.03529 3.11586 6.95391 3.11484 6.87024C3.11458 6.23357 3.28305 5.60821 3.60309 5.05783C3.60723 5.03788 3.61894 5.02032 3.63575 5.00883C3.68407 4.96581 3.74151 4.93429 3.80375 4.91666C4.17914 4.77018 4.57855 4.69501 4.9815 4.69499C5.1061 4.68414 5.23141 4.68414 5.356 4.69499C5.42674 4.70258 5.49274 4.73415 5.54304 4.78445C5.59335 4.83475 5.62492 4.90076 5.6325 4.97149C5.72992 5.39499 5.83842 5.82899 5.94167 6.26299L6.02334 6.61299C6.03691 6.666 6.036 6.72167 6.02071 6.77421C6.00542 6.82674 5.97631 6.87421 5.93642 6.91166L4.67234 8.09699C4.64603 8.1233 4.61472 8.14409 4.58026 8.15811C4.5458 8.17214 4.50888 8.17912 4.47167 8.17866H4.46584V8.17283Z" fill="rgba(34, 34, 34, 1.0)"></path>
                          <path d="M6.99984 1.16699C5.84612 1.16699 4.7183 1.50911 3.75901 2.15009C2.79973 2.79106 2.05205 3.7021 1.61054 4.76801C1.16903 5.83391 1.05351 7.0068 1.27859 8.13835C1.50367 9.26991 2.05924 10.3093 2.87505 11.1251C3.69086 11.9409 4.73026 12.4965 5.86181 12.7216C6.99337 12.9467 8.16626 12.8311 9.23216 12.3896C10.2981 11.9481 11.2091 11.2004 11.8501 10.2412C12.4911 9.28186 12.8332 8.15405 12.8332 7.00033C12.8332 5.45323 12.2186 3.9695 11.1246 2.87554C10.0307 1.78157 8.54694 1.16699 6.99984 1.16699ZM7.07042 11.3304L7.03776 11.2137C7.02663 11.134 6.98701 11.0609 6.92622 11.008C6.86543 10.9552 6.78757 10.9261 6.70701 10.9262C6.03797 10.915 5.38769 10.7032 4.84034 10.3183C4.78464 10.2907 4.72343 10.2759 4.66126 10.2752C4.62301 10.2718 4.58447 10.2763 4.54804 10.2884C4.51162 10.3006 4.47808 10.3201 4.44951 10.3457L4.05342 10.7202C3.29755 10.1246 2.74097 9.31297 2.45775 8.39325C2.17453 7.47354 2.1781 6.48938 2.46798 5.57174C2.75785 4.6541 3.3203 3.84649 4.08047 3.25638C4.84063 2.66626 5.76248 2.32163 6.72334 2.26833L6.78167 2.47424C6.82056 2.58819 6.85303 2.70213 6.87909 2.81608C6.89714 2.869 6.92709 2.91708 6.96663 2.95662C7.00617 2.99616 7.05425 3.02611 7.10717 3.04416H7.15617C7.80616 3.14238 8.43738 3.33908 9.02809 3.62749C9.06957 3.65019 9.11697 3.65975 9.16401 3.65491C9.22873 3.65539 9.2924 3.63847 9.34834 3.60591L9.88034 3.23141C10.6579 3.82155 11.2341 4.63761 11.53 5.56787C11.826 6.49813 11.8271 7.49711 11.5333 8.42804C11.2396 9.35898 10.6652 10.1764 9.88898 10.7683C9.11273 11.3602 8.17249 11.6977 7.19701 11.7347L7.07042 11.3304Z" fill="rgba(34, 34, 34, 1.0)"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_1030_9128">
                            <rect width="14" height="14" fill="white"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                  </div>
                </div>
                <span class="relative text-[12px] text-center  text-[#002f6c] font-bold capitalize break-words font-semibold2 leading-[16px] max-w-full mt-[12px] py-[2px] h-[32px] ">
                  <span class="mr-[4px] inline-block text-slate-800 ">
                    {{ $awayS['number'] }}
                  </span>
                  <span class="capitalize">
                    {{ $awayS['name'] }}
                  </span>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </ul>
  </section>

</div>

@endsection