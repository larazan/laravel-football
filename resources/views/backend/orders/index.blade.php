<main className="bg-white min-h-screen">
        <ProfileNav />

        <div className="py-3 mx-auto w-11/12 ">
          <div className="flex w-full flex-col space-y-2">
            <div className="pt-5">
              <span className="text-lg font-semibold tracking-tighter capitalize text-gray-800">
                Order History
              </span>
            </div>
            <div className="overflow-x-auto py-4 ">
              <table className="min-w-full text-sm selectedTable">
                <thead className="bg-white border border-gray-300">
                  <tr className="text-left">
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>order</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>date</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>payment status</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>fulfillment status</p>
                    </th>
                    <th className="text-xs text-center p-4 uppercase text-gray-500">
                      <p>total</p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr className="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td className="text-sm p-4 uppercase text-gray-600">
                      <Link href={"/account/detail"} className="flex justify-center p-1.5 border border-gray-300 bg-gray-50 hover:bg-gray-200 cursor-pointer">
                        #1001
                      </Link>
                    </td>
                    <td className="text-sm text-center p-4 ">
                      <p>June 23, 2023</p>
                    </td>
                    <td className="text-sm text-center p-4">
                      <p>Paid</p>
                    </td>
                    <td className="text-sm text-center p-4">
                      <p>Unfulfilled</p>
                    </td>
                    <td className="text-sm text-right p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                  <tr className="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td className="text-sm p-4 uppercase text-gray-600">
                      <Link href={"/account/detail"} className="flex justify-center p-1.5 border border-gray-300 bg-gray-50 hover:bg-gray-200 cursor-pointer">
                        #1002
                      </Link>
                    </td>
                    <td className="text-sm text-center p-4 ">
                      <p>June 23, 2023</p>
                    </td>
                    <td className="text-sm text-center p-4">
                      <p>Paid</p>
                    </td>
                    <td className="text-sm text-center p-4">
                      <p>Fulfilled</p>
                    </td>
                    <td className="text-sm text-right p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>