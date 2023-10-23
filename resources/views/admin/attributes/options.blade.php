<x-app-layout>

    <div class="vs jj ttm vl ou uf na">


        <!-- Page header -->
        <div class="je jd jc ii">

            <!-- Left: Title -->
            <div class="ri _y">
                <h1 class="gu teu text-slate-800 font-bold">Attribute Options✨</h1>
            </div>

            <!-- Right: Actions -->
        <div class="sn am jo az jp ft">
        <a href="{{ url('admin/attributes/') }}" class="btn bg-white border-slate-200 hover--border-slate-300 yl xy" >Back</a>
        </div>

        </div>

        <div class="w-full flex flex-col md:flex-row space-x-3">
            @include('admin.attributes.option_form')
            <div class="w-full">
                <!-- Table -->
                <div class="bg-white bd rounded-sm border border-slate-200 rc">
                    <header class="vc vu">
                        <h2 class="gh text-slate-800">Attributes Option For <span class="gq gp">{{ $attribute->name }}</span></h2>
                    </header>
                    <div x-data="handleSelect">

                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou">
                                <!-- Table header -->
                                <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                                    <tr>
                                        <th class="vi wy w_ vo lm of">
                                            <div class="gh gt">#</div>
                                        </th>
                                        <th class="vi wy w_ vo lm">
                                            <div class="gh gt">Name</div>
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
                                    @if ($attribute->attributeOptions->count() > 0)
                                    @php
                                        $i = 1
                                        @endphp
                                        @forelse ($attribute->attributeOptions as $option)
                                    <tr>
                                        <td class="vi wy w_ vo lm of">
                                            <div class="gp capitalize">{{ $i++ }}</div>
                                        </td>

                                        <td class="vi wy w_ vo lm">
                                            <div class="gp capitalize">{{ $option->name }}</div>
                                        </td>
                                        <td class="vi wy w_ vo lm">
                                            <div class="gp ">{{ $option->created_at->format('d-m-Y') }}</div>
                                        </td>

                                        <td class="vi wy w_ vo lm of">
                                            <div class="fm">
                                                <a href="{{ url('admin/attributes/options/'. $option->id .'/edit') }}" class="btn gq xv rounded-full" >
                                                    <span class=" d">Edit</span>
                                                    <svg class="os sf du" viewBox="0 0 32 32">
                                                        <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                    </svg>
                                                </a>

                                                {!! Form::open(['url' => 'admin/attributes/options/'. $option->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                                {!! Form::hidden('_method', 'DELETE') !!}                                                
                                                <button type="submit" class="yl xy rounded-full" >
                                                    <span class=" d">Delete</span>
                                                    <svg class="os sf du" viewBox="0 0 32 32">
                                                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                        <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                                    </svg>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td class="vi wy w_ vo lm" colspan="8">No records found</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

               
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

            <div class="container max-w-screen-lg mx-auto cl border-slate-200">

            </div>

        </div>

</x-app-layout>