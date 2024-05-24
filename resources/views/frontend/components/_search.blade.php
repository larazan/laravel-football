<div class="fixed inset-0 z-50 overflow-hidden flex items-start top-[10%] md:top-[10%] mb-4 justify-center transform px-4 sm:px-6 ">
            <div class="relative bg-white overflow-auto max-w-3xl w-full max-h-full rounded2 shadow-lg">
              {/* Search form */}
              <section class="overflow-hidden  shadow-2xl md:grid md:grid-cols-1">
                <button
                  class="absolute flex top-1 right-1 md:top-2 md:right-2 rounded-full bg-white shadow-xl px-1 py-1 md:p-2 cursor-pointer"
                  onClick={clickSearch}
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    strokeWidth={3}
                    stroke="currentColor"
                    class="w-5 h-5 text-[#1d494e]"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="M6 18L18 6M6 6l12 12"
                    />
                  </svg>
                </button>

                <div class="p-4 text-center sm:p-6 md:col-span-2 lg:p-8">
                  <p class="md:text-xl font-bold uppercase tracking-wide text-gray-900">
                    Search News, Match, Player, Jersey and etc...
                  </p>

                  <div class="flex flex-col space-y-0 pt-5 md:px-5">
                    <div class="relative flex w-full items-center bg-gray-200 rounded-3xl z-40 py-.5">
                      <div class="pl-4">
                        <svg
                          class="fill-current text-gray-800 w-5 h-5"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            class="heroicon-ui"
                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"
                          />
                        </svg>
                      </div>
                      <input
                        class="w-full rounded-3xl bg-gray-200 text-gray-700 leading-tight focus:outline-none py-3 px-2"
                        id="search"
                        type="text"
                        placeholder="Search something"
                      />
                      <button class="absolute flex justify-center items-center top-1.5 right-2 w-[32px] h-[32px] py-1 px-1 bg-red-500 hover:opacity-90  rounded-full text-md text-black transition duration-200 ">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={1.5}
                          stroke="currentColor"
                          class="w-4 h-4 text-white"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                          />
                        </svg>
                      </button>
                    </div>
                    <div class="px-4">
                      <div class="h-px bg-mercury"></div>
                    </div>
                  </div>

                  <div class="py-4 px-2">
                    <div class="mb-3 last:mb-0">
                      <div class="text-xs font-semibold text-slate-400 uppercase px-2 mb-2">
                        Recent searches
                      </div>
                      <ul class="text-sm divide-y ">
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>Form Builder - 23 hours on-demand video</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>Access Mosaic on mobile and TV</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>Product Update - Q4 2021</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>
                              Master Digital Marketing Strategy course
                            </span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>Dedicated forms for products</span>
                          </a>
                        </li>
                        <li>
                          <a
                            class="flex items-center p-2 text-slate-800 hover:text-white hover:bg-indigo-500 rounded group"
                            href="#0"
                          >
                            <svg
                              class="w-4 h-4 fill-current text-slate-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3"
                              viewBox="0 0 16 16"
                            >
                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z" />
                            </svg>
                            <span>Product Update - Q4 2021</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <div class="opacity-50 fixed inset-0 z-40 bg-black"></div>