<main className="bg-white bg-opacity-252 min-h-screen">
        <ProfileNav />

        <div className="py-3 mx-auto w-11/12 ">
          <div className="flex w-full flex-col space-y-2">
            <div className="pt-5">
              <span className="text-lg font-bold tracking-tight capitalize text-gray-800">
                Account Details
              </span>
            </div>
            <div className="flex w-full">
              <div className="w-32">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Name
                </span>
              </div>
              <div className="">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Alda boran
                </span>
              </div>
            </div>
            <div className="flex w-full">
              <div className="w-32">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Address
                </span>
              </div>
              <div className="">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Alda boran
                </span>
              </div>
            </div>
            <div className="flex w-full">
              <div className="w-32">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Phone
                </span>
              </div>
              <div className="">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  +44 7400 123456
                </span>
              </div>
            </div>
            <div className="flex w-full">
              <div className="w-32">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  Email
                </span>
              </div>
              <div className="">
                <span className="text-gray-800 tracking-tighter font-semibold">
                  purunjanu@gmail.com
                </span>
              </div>
            </div>


            <div className="pt-10">
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
                      <div className='flex justify-center p-1.5 border border-gray-300'>#1001</div>
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
                    <td className="text-sm text-center p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                  <tr className="bg-white text-gray-800 border border-gray-300 font-bold">
                    <td className="text-sm p-4 uppercase text-gray-600">
                      <div className='flex justify-center p-1.5 border border-gray-300'>#1001</div>
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
                    <td className="text-sm text-center p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </main>