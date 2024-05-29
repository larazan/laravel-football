<main className="bg-white min-h-screen">
        <ProfileNav />

        <div className="py-3 mx-auto w-11/12 ">
          <div className="flex w-full flex-col space-y-2">
            <div className="pt-5">
              <span className="text-lg font-semibold tracking-tighter capitalize text-gray-800">
                Notification
              </span>
            </div>
            <div className="overflow-x-auto py-4 ">
              <table className="min-w-full text-sm selectedTable">
                <thead className="bg-white border border-gray-300">
                  <tr className="text-left">
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>link</p>
                    </th>
                    <th className="text-xs  p-4 uppercase text-gray-500">
                      <p>Notification</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>date</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>mark as read</p>
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr className="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td className="text-sm flex justify-center p-4 uppercase text-slate-900">
                      <Link href={"/"}>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={2}
                          stroke="currentColor"
                          className="w-4 h-4 md:w-5 md:h-5"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                          />
                        </svg>
                      </Link>
                    </td>
                    <td className="text-xs  p-4 ">
                      <p>your order have a approved</p>
                    </td>
                    <td className="text-xs text-center p-4">
                      <p>1 minute ago</p>
                    </td>
                    <td className="flex justify-center text-sm text-center p-4">
                      <Link
                        href={"/"}
                        className="flex justify-center items-center h-5 w-5 md:h-6 md:w-6 rounded-full bg-white hover:bg-black text-black hover:text-white border shadow border-black"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={2}
                          stroke="currentColor"
                          className="w-3 h-3 md:w-4 md:h-4"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="m4.5 12.75 6 6 9-13.5"
                          />
                        </svg>
                      </Link>
                    </td>
                  </tr>
                  <tr className="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td className="text-sm flex justify-center p-4 uppercase text-slate-900">
                      <Link href={"/"}>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={2}
                          stroke="currentColor"
                          className="w-4 h-4 md:w-5 md:h-5"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                          />
                        </svg>
                      </Link>
                    </td>
                    <td className="text-xs  p-4 ">
                      <p>your order will be shipped</p>
                    </td>
                    <td className="text-xs text-center p-4">
                      <p>1 minute ago</p>
                    </td>
                    <td className="flex justify-center text-sm text-center p-4">
                      <Link
                        href={"/"}
                        className="flex justify-center items-center h-5 w-5 md:h-6 md:w-6 rounded-full bg-white hover:bg-black text-black hover:text-white border shadow border-black"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          strokeWidth={2}
                          stroke="currentColor"
                          className="w-3 h-3 md:w-4 md:h-4"
                        >
                          <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="m4.5 12.75 6 6 9-13.5"
                          />
                        </svg>
                      </Link>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>