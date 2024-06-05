<main class="bg-white min-h-screen">
        <ProfileNav />

        <div class="py-3 mx-auto w-11/12 ">
          <div class="flex w-full flex-col space-y-2">
            <div class="pt-5">
              <span class="text-lg font-semibold tracking-tighter capitalize text-gray-800">
                Order History
              </span>
            </div>
            <div class="overflow-x-auto py-4 ">
              <table class="min-w-full text-sm selectedTable">
                <thead class="bg-white border border-gray-300">
                  <tr class="text-left">
                    <th class="text-xs text-center p-4 uppercase text-gray-500">
                      <p>order</p>
                    </th>
                    <th class="text-xs text-center p-4 uppercase text-gray-500">
                      <p>date</p>
                    </th>
                    <th class="text-xs text-center p-4 uppercase text-gray-500">
                      <p>payment status</p>
                    </th>
                    <th class="text-xs text-center p-4 uppercase text-gray-500">
                      <p>fulfillment status</p>
                    </th>
                    <th class="text-xs text-center p-4 uppercase text-gray-500">
                      <p>total</p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td class="text-sm p-4 uppercase text-gray-600">
                      <Link href={"/account/detail"} class="flex justify-center p-1.5 border border-gray-300 bg-gray-50 hover:bg-gray-200 cursor-pointer">
                        #1001
                      </Link>
                    </td>
                    <td class="text-sm text-center p-4 ">
                      <p>June 23, 2023</p>
                    </td>
                    <td class="text-sm text-center p-4">
                      <p>Paid</p>
                    </td>
                    <td class="text-sm text-center p-4">
                      <p>Unfulfilled</p>
                    </td>
                    <td class="text-sm text-right p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                  <tr class="bg-white text-gray-800 border border-gray-300 font-bold ">
                    <td class="text-sm p-4 uppercase text-gray-600">
                      <Link href={"/account/detail"} class="flex justify-center p-1.5 border border-gray-300 bg-gray-50 hover:bg-gray-200 cursor-pointer">
                        #1002
                      </Link>
                    </td>
                    <td class="text-sm text-center p-4 ">
                      <p>June 23, 2023</p>
                    </td>
                    <td class="text-sm text-center p-4">
                      <p>Paid</p>
                    </td>
                    <td class="text-sm text-center p-4">
                      <p>Fulfilled</p>
                    </td>
                    <td class="text-sm text-right p-4 uppercase">
                      <p>$200.00 CAD</p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>