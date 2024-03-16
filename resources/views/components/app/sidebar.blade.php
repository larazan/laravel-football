<div>

    <!-- Sidebar -->

    <!-- Sidebar backdrop (mobile only) -->
    <div class="hidden m w bg-slate-900 pu tb tex ted bz wr" :class="sidebarOpen ? 'ba opacity-100' : 'opacity-0 pointer-calendar-none'" aria-hidden="true" x-cloak>
    </div>

    <!-- Sidebar -->
    <div id="sidebar" class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">


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
            <!-- Ecommerce group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Ecommerce</span>
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

                    <!-- E-Commerce -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'text-indigo-500' }}@else{{ 'gz' }}@endif" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">E-Commerce</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                                <!-- <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du gq ao @if(in_array(Request::segment(2), ['ecommerce'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div> -->
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['products', 'brands', 'categories', 'attributes', 'product-slide', 'product-review', 'coupons'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['products'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif  wt wi ld" href="{{ url('admin/products') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Products</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['categories'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/categories') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Category</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['brands'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/brands') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Brand</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['attributes'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/attributes') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Attribute</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['product-slide'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/product-slide') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Slide</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['coupons'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/coupons') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Coupons</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Orders -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['orders'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/orders') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['orders'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['orders'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M1 1h22v23H1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['orders'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                </svg>
                
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Orders</span>
                            </div>
                        </a>
                    </li>
                    <!-- Customers -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['customers'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/customers') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['customers'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['customers'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Customers</span>
                            </div>
                        </a>
                    </li>

                    <!--  -->

                    <!-- Event -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['calendar'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/calendar') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['calendar'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M1 3h22v20H1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['calendar'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Events</span>
                            </div>
                        </a>
                    </li>
                    <!-- Advertising -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <circle class="du @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" cx="16" cy="8" r="8"></circle>
                                        <circle class="du @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'text-indigo-300' }}@else{{ 'g_' }}@endif" cx="8" cy="16" r="8"></circle>
                                    </svg>
                                    <!-- <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'text-indigo-500' }}@else{{ 'gz' }}@endif" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                    </svg> -->

                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Advertisement</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['adv-segments', 'advertisings'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['adv-segments'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/adv-segments') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Segment</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['advertisings'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/advertisings') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Advertisings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- User -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['users'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/users') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <!-- <path class="du @if(in_array(Request::segment(2), ['users'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path> -->
                                    <path class="du @if(in_array(Request::segment(2), ['users'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">User</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Clubs group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Clubs</span>
                </h3>
                <ul class="nk">
                    <!-- Competition -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'text-indigo-600' }}@else{{ 'gz' }}@endif" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Competitions</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['competitions', 'awards', 'trophies'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['competitions'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/competitions') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Competitions</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['awards'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/awards') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Awards</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['trophies'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/trophies') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Trophies</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Clubs -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'text-indigo-500' }}@else{{ 'gz' }}@endif" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'text-indigo-600' }}@else{{ 'g_' }}@endif" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Clubs</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['clubs', 'stadions'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['clubs'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/clubs') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Clubs</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['stadions'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/stadions') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Stadions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Squads -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                    </svg>
                                    <!-- <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                    </svg> -->
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Squads</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['womens', 'unders', 'squads'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['squads'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/squads') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Squads</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['unders'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/unders') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Under 20</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['womens'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/womens') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Womens</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <!-- Persons -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['players', 'staffs', 'positions',])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['players', 'staffs', 'positions',])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['players', 'staffs', 'positions',])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Person</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['players', 'staffs', 'positions',])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['players', 'staffs', 'positions',])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['players'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/players') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Players</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['staffs'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/staffs') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Staffs</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['positions'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/positions') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Positions</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Stadions -->
                    {{--
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['stadions'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                    <a class="block gj xc ld wt wi" href="{{ url('admin/stadions') }}">
                        <div class="flex items-center">
                            <svg class="ub so oi" viewBox="0 0 24 24">
                                <circle class="du @if(in_array(Request::segment(2), ['stadions'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" cx="18.5" cy="5.5" r="4.5"></circle>
                                <circle class="du @if(in_array(Request::segment(2), ['stadions'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" cx="5.5" cy="5.5" r="4.5"></circle>
                                <circle class="du @if(in_array(Request::segment(2), ['stadions'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" cx="18.5" cy="18.5" r="4.5"></circle>
                                <circle class="du @if(in_array(Request::segment(2), ['stadions'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" cx="5.5" cy="18.5" r="4.5"></circle>
                            </svg>
                            <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Stadions</span>
                        </div>
                    </a>
                    </li>
                    --}}
                    <!-- Partner -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['partners'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/partners') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['partners'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['partners'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Partners</span>
                            </div>
                        </a>
                    </li>
                    <!-- Schedules -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['schedules'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/schedules') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['schedules'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M1 3h22v20H1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['schedules'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                </svg>
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Schedules</span>
                            </div>
                        </a>
                    </li>
                    <!-- Matchs -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['matchs'])){{ 'bg-slate-900' }}@else{{ '' }}@endif">
                        <a class="block gj xc ld wt wi" href="{{ url('admin/matchs') }}">
                            <div class="flex items-center">
                                <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['matchs'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['matchs'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M1 1h22v23H1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['matchs'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                </svg>
                                <!-- <svg class="ub so oi" viewBox="0 0 24 24">
                                    <path class="du @if(in_array(Request::segment(2), ['matchs'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M1 3h22v20H1z"></path>
                                    <path class="du @if(in_array(Request::segment(2), ['matchs'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                </svg> -->
                                <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Matchs</span>
                            </div>
                        </a>
                    </li>
                    <!-- League table -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'text-indigo-500' }}@else{{ 'gz' }}@endif" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">League</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['leagues', 'team-leagues'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['leagues'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/leagues') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">League</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['team-leagues'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/team-leagues') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Team League</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Pages group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Pages</span>
                </h3>
                <ul class="nk">
                    <!-- News -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['articles', 'category-article', 'medias'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['articles', 'category-article', 'medias'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['articles', 'category-article', 'medias'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                    </svg>

                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">News</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['articles', 'category-article', 'medias'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                                <!-- <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du gq ao" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div> -->
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['articles', 'category-article', 'medias'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['articles'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/articles') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Article</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['category-article'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/category-article') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Category</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['medias'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/medias') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Medias</span>
                                    </a>
                                </li>
                                <!-- <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['products'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/tags') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Comment</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- Pages -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'text-indigo-500' }}@else{{ 'gq' }}@endif" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'text-indigo-500' }}@else{{ 'gz' }}@endif" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Pages</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['faqs', 'category-faq', 'about-us', 'privacy-policy', 'term-condition', 'refund-policy', 'shipping-policy'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['faqs'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/faqs') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">FAQs</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['category-faq'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/category-faq') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Category FAQ</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['about-us'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/about-us') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">About Us</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['term-condition'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/term-condition') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Term and Condition</span>
                                    </a>
                                </li>

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['privacy-policy'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/privacy-policy') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Privacy Policy</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['refund-policy'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/refund-policy') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Refund Policy</span>
                                    </a>
                                </li>

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['shipping-policy'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/shipping-policy') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shipping Policy</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">More</span>
                </h3>
                <ul class="nk">
                    <!-- Settings -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                        <path class="du @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Settings</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['payment-method', 'social-medias', 'settings', 'roles', 'permissions', 'currencies'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['social-medias'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/social-medias') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Social Media</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['settings'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/settings') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Setting</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['payment-method'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/payment-method') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Payment Method</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['roles'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/roles') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Roles</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['permissions'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/permissions') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Permissions</span>
                                    </a>
                                </li>

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['currencies'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/currencies') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Currency</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <!-- Utility -->
                    <li class="vn vr rounded-sm n_ ww @if(in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'bg-slate-900' }}@else{{ '' }}@endif" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <circle class="du @if(in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" cx="18.5" cy="5.5" r="4.5"></circle>
                                        <circle class="du @if(in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" cx="5.5" cy="5.5" r="4.5"></circle>
                                        <circle class="du @if(in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'text-indigo-500' }}@else{{ 'g_' }}@endif" cx="18.5" cy="18.5" r="4.5"></circle>
                                        <circle class="du @if(in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'text-indigo-300' }}@else{{ 'gq' }}@endif" cx="5.5" cy="18.5" r="4.5"></circle>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Utility</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(2), ['faqs', 'category-faq', 'slides', 'reports', 'subscribers'])){{ 'rotate-180' }}@endif" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                                <!-- <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du gq ao" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div> -->
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re @if(!in_array(Request::segment(2), ['slides', 'reports', 'subscribers'])){{ 'hidden' }}@else{ !block }@endif" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['subscribers'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/subscribers') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Subscribers</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['reports'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/reports') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Reports</span>
                                    </a>
                                </li>

                                <li class="rt ww">
                                    <a class="block @if(in_array(Request::segment(2), ['slides'])){{ 'text-indigo-500' }}@else{{ 'gq hover--text-slate-200' }}@endif wt wi ld" href="{{ url('admin/slides') }}">
                                        <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Slide</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                </ul>
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