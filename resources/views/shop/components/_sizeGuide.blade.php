<div class="justify-center items-center flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none">
            <div class="relative w-auto my-6 mx-auto max-w-3xl">
              {/*content*/}
              <div class="border-0 rounded shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                {/*header*/}
                <div class="flex items-center justify-between px-5 py-4">
                <h2 class=" text-2xl text-slate-900 uppercase tracking-tighter font-semibold">
                      Men&lsquo;s Jersey Sizing Chart
                    </h2>
                  <button
                    class="p-1 ml-auto bg-transparent border-0 text-black  float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onClick={() => setShowModal(false)}
                  >
                    <span class="bg-transparent text-black  h-6 w-6 text-2xl block outline-none focus:outline-none">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth={1.5}
                        stroke="currentColor"
                        class="w-6 h-6"
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          d="M6 18L18 6M6 6l12 12"
                        />
                      </svg>
                    </span>
                  </button>
                </div>
                {/* body */}
                <div class="relative px-6 flex-auto">
                  <div class="container  mx-auto sm:p-4 dark:text-gray-100">
                    
                    <div class="overflow-x-auto">
                      <table class="min-w-full text-sm">
                        <thead class="bg-[#dde6ed] dark:bg-gray-700">
                          <tr class="text-left">
                            <th class="p-3 text-center text-gray-800" colSpan={8}>
                              Product Measurements Cm
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b bg-white text-gray-800 font-bold border-opacity-20 dark:border-gray-700 dark:bg-gray-900">
                            <td class="p-2">
                              <p>Sizes</p>
                            </td>
                            <td class="p-2">
                              <p>S</p>
                            </td>
                            <td class="p-2">
                              <p>M</p>
                            </td>
                            <td class="p-2">
                              <p>L</p>
                            </td>
                            <td class="p-2">
                              <p>XL</p>
                            </td>
                            <td class="p-2">
                              <p>XXL</p>
                            </td>
                            <td class="p-2">
                              <p>3XL</p>
                            </td>
                          </tr>
                          {measurements.map((data, index) => {
                            return (
                              <tr key={index} class="bg-white text-gray-800 border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900">
                                <td class="p-2 capitalize font-bold">
                                  <p>{data.title}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.small}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.medium}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.large}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.extraLarge}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.doubleXL}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.tripleXL}</p>
                                </td>
                              </tr>
                            );
                          })}
                        </tbody>
                      </table>
                    </div>
                    <div class="py-3">
                      <span class="text-slate-900 font-semibold">
                        Explanation how to measure from image below
                      </span>
                    </div>
                    <div class="px-4 text-sm">
                      <ul class="list-disc text-gray-800">
                        <li>
                          <strong>A: Chest -</strong> Measure the shirt from
                          just under the left armhole to the right armhole.
                        </li>
                        <li>
                          <strong>B: (Across) Shoulders -</strong> Measure the
                          shirt from the seam on the left shoulder to the seam
                          on the right shoulder.
                        </li>
                        <li>
                          <strong>C: Hips -</strong> Measure the bottom of the
                          shirt from left to right.{" "}
                        </li>
                        <li>
                          <strong>D: Back Length -</strong> Measure the shirt
                          from the collar to the bottom of the shirt.
                        </li>
                        <li>
                          <strong>E: Sleeve Length -</strong> Measure the shirt
                          from the seam on top of the shoulder to the bottom of
                          the sleeve.{" "}
                        </li>
                      </ul>
                    </div>
                    <div class="overflow-x-auto py-4 hidden md:block">
                      <table class="min-w-full text-sm">
                        <thead class="bg-[#dde6ed] dark:bg-gray-700">
                          <tr class="text-left">
                            <th class="p-2 text-center text-gray-800" colSpan={8}>
                                International Size Conversion table
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-white text-gray-800 border-b font-bold border-opacity-20 dark:border-gray-700 dark:bg-gray-900">
                            <td class="p-2">
                              <p>UK</p>
                            </td>
                            <td class="p-2">
                              <p>DE</p>
                            </td>
                            <td class="p-2">
                              <p>FR</p>
                            </td>
                            <td class="p-2">
                              <p>IT</p>
                            </td>
                            <td class="p-2">
                              <p>ES</p>
                            </td>
                            <td class="p-2">
                              <p>US</p>
                            </td>
                            
                          </tr>
                          {conversions.map((data, index) => {
                            return (
                              <tr key={index} class="bg-white text-gray-800 border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900">
                                <td class="p-2 capitalize font-bold">
                                  <p>{data.uk}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.de}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.fr}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.it}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.es}</p>
                                </td>
                                <td class="p-2">
                                  <p>{data.us}</p>
                                </td>
                                
                              </tr>
                            );
                          })}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="opacity-25 fixed inset-0 z-40 bg-black"></div>