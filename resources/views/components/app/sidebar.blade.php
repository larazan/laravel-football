
<div>

    <!-- Sidebar -->

    <!-- Sidebar backdrop (mobile only) -->
    <div 
        class="m w bg-slate-900 pu tb tex ted bz wr" 
        :class="sidebarOpen ? 'ba opacity-100' : 'opacity-0 pointer-events-none'" 
        aria-hidden="true" 
        x-cloak>
    </div>

    <!-- Sidebar -->
    <div 
        id="sidebar" 
        class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu" 
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" 
        @click.outside="sidebarOpen = false" 
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">


        <!-- Sidebar header -->
        <div class="flex fe nx vq j_">
            <!-- Close button -->
            <button class="tex text-slate-500 xl" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen" aria-expanded="false">
                <span class="d">Close sidebar</span>
                <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="index.html">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#A5B4FC" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#38BDF8" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                    <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                    <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                    <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                </svg>
            </a>
        </div>

        <!-- Links -->
        <div class="ff">
            <!-- Pages group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Pages</span>
                </h3>
                <ul class="nk">
                    <!-- Dashboard -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['dashboard'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/dashboard') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['dashboard'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['dashboard'])){{ 'text-indigo-600' }}@else{{ 'g_' }}@endif" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['dashboard'])){{ 'text-indigo-200' }}@else{{ 'gq' }}@endif" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Dashboard</span>
                            </div>
                        </a>
                    </li>
                    <!-- 
                        competitions
                        clubs
                        awards
                        players
                        staffs
                        stadions
                        schedules
                        matchs
                            match report
                            match statistic
                            lineup
                            player statistic
                            gallery
                        league table
                        news
                            article
                            category
                        media
                        partners
                        slide
                        faqs
                        newsletter
                        settings


                     -->

                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">More</span>
                </h3>
                
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="mt hidden tew 2xl:hidden justify-end rn">
            <div class="vn vr">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="d">Expand / collapse sidebar</span>
                    <svg class="oi so du _o" viewBox="0 0 24 24">
                        <path class="gq" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="g_" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>