<x-layouts.app>

<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Notifications ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="sn am jo az jp ft">

            <!-- mark all reads -->
            @if ($notificationCount)
            <button class="btn ho xi ye">
                <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                </svg>
                <span class="hidden trm nq">Clear All</span>
            </button>
            @endif
        </div>

    </div>

    <!-- More actions -->
    <div class="je jd jc ii">

        <!-- Left side -->
        <div class="ri _y">

        </div>

    </div>

    <!-- Table -->
    <div class="bg-white bd rounded-sm border border-slate-200 rc">
        <header class="vc vu">
            <h2 class="gh text-slate-800">Notifications <span class="gq gp">{{ $notificationCount }}</span></h2>
        </header>
        <div x-data="handleSelect">

            <!-- Table -->
            <div class="lf">
                <table class="ux ou">

                    <!-- Table header -->
                    <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                        <tr>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">NO</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Type</div>
                            </th>

                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Data</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Date</div>
                            </th>
                            <th class="vi wy w_ vo lm">
                                <div class="gh gt">Actions</div>
                            </th>
                        </tr>
                    </thead>

                    <!-- Table body -->
                    <tbody class="text-sm le lr">
                        <!-- Row -->

                        @if ($notifications->total())
                        @php
                        $i = 1
                        @endphp
                        @foreach ($notifications as $notification)
                        <!-- @includeIf("notifications.{$notification->data['first_name']}") -->

                        <tr>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $i++ }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">{{ $notification->type }}</div>
                            </td>
                            <td class="vi wy w_ vo lm">
                                <div class="gp text-slate-800">
                                    @foreach ($notification->data as $key => $value)
                                    {{ $key }} : {{ $value }} <br>
                                    @endforeach
                                </div>
                            </td>

                            <td class="vi wy w_ vo lm">
                                <div>{{ $notification->created_at->format('d-m-Y') }}</div>
                            </td>

                            <td class="vi wy w_ vo lm of">
                                <div class="fm">
                                    <button class="gq xv rounded-full" wire:click="markAsRead({{ $notification->id }})">
                                        <span class=" d">Read</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>


                                    </button>


                                </div>
                            </td>
                        </tr>

                        @endforeach

                        @else
                        <tr>
                            <td class="vi wy w_ vo lm" colspan="8">You have no unread notifications</td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    {{ $notifications->links() }}

</div>

</x-layouts.app>