<div className="grid  md:grid-cols-2 lg:px-20 xl:px-32 ">
        <div className="px-6 pt-8 pb-8 bg-white border-r shadow">
          <p className="text-xl font-medium uppercase tracking-tighter text-gray-800">Contact Information</p>
          <p className="text-sm text-gray-800">
            Already have an account? <Link href={"/login"} className="text-blue-500">Log in</Link>
          </p>
          <div className="">
            <div className="mt-5">
              <input
                type="text"
                id="email"
                name="email"
                className="w-full rounded-md bg-white border border-gray-200 px-4 py-3  text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Email"
              />
            </div>
            <div className="mt-2">
                <div className="inline-flex items-center">
                  <input type="checkbox" name="" id="" className="bg-white" />
                  <label for="" className="text-sm  ml-2 text-gray-500">My billing address is different than above.</label>
                </div>
              </div>
            <div className="mt-4 py-2">
              <span className="text-base font-semibold text-gray-800">Shipping Address</span>
            </div>
            <div className="flex space-x-1">
              <input
                type="text"
                id="card-holder"
                name="card-holder"
                className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                placeholder="First name"
              />
              <input
                type="text"
                id="card-holder"
                name="card-holder"
                className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Last name"
              />
            </div>
            <div className="mt-2">
              <input
                type="text"
                id="card-holder"
                name="card-holder"
                className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Address"
              />
              </div>
              <div className="mt-2">
                <input
                  type="text"
                  id="card-holder"
                  name="card-holder"
                  className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="City"
                />
              </div>
              <div className="mt-2 flex space-x-1">
              <div className="md:col-span-2">
                <div className="bg-white flex border border-gray-200 rounded-md shadow-sm items-center mt-0">
                  <input name="country" id="country" placeholder="Country" className="px-4 py-3 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                  <button tabindex="-1" className="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                    <svg className="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </button>
                  <button tabindex="-1" for="show_more" className="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                    <svg className="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                  </button>
                </div>
              </div>
              <div className="md:col-span-2">
                <div className="bg-white flex border border-gray-200 rounded-md shadow-sm items-center mt-0">
                  <input name="state" id="state" placeholder="State" className="px-4 py-3 appearance-none outline-none text-gray-800 w-full bg-transparent" value="" />
                  <button tabindex="-1" className="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                    <svg className="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </button>
                  <button tabindex="-1" for="show_more" className="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                    <svg className="w-5 h-5 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
                  </button>
                </div>
              </div>
              </div>
              <div className="mt-2">
                <input
                  type="text"
                  id="card-holder"
                  name="card-holder"
                  className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm  shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                  placeholder="Postal Code"
                />
              </div>
              <div className="mt-2">
                <div className="inline-flex items-center">
                  <input type="checkbox" name="" id="" className="border-gray-200 bg-white shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500" />
                  <label for="" className="text-sm ml-2 text-gray-500">Save this information for next time</label>
                </div>
              </div>
          </div>

          <p className="mt-8 text-lg font-medium uppercase tracking-tighter text-gray-800">Shipping Methods</p>
          <form className="mt-2 grid gap-3">
            <div className="relative bg-pink-50">
              <input
                className="peer hidden"
                id="radio_1"
                type="radio"
                name="radio"
                checked
              />
              <span className="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label
                className="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                for="radio_1"
              >
                
                <div className="ml-5">
                  <span className="mt-2 font-semibold text-gray-800">Fedex Delivery</span>
                  <p className="text-slate-500 text-sm leading-6">
                    Delivery: 2-4 Days
                  </p>
                </div>
              </label>
            </div>
            <div className="relative">
              <input
                className="peer hidden"
                id="radio_2"
                type="radio"
                name="radio"
                checked
              />
              <span className="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
              <label
                className="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                for="radio_2"
              >
                <img
                  className="w-14 object-contain"
                  src="/images/oG8xsl3xsOkwkMsrLGKM4.png"
                  alt=""
                />
                <div className="ml-5">
                  <span className="mt-2 font-semibold text-gray-800">Fedex Delivery</span>
                  <p className="text-slate-500 text-sm leading-6">
                    Delivery: 2-4 Days
                  </p>
                </div>
              </label>
            </div>
          </form>

          <Link href={"/cart"} className="flex items-center space-x-1 mt-4 text-sm md:text-base text-blue-400 hover:text-blue-500 font-semibold">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" className="w-3 h-3 md:w-4 md:h-4 "><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path></svg>
            <span>Return to cart</span>
          </Link>
        </div>
        <div className="mt-0 bg-[#f5f7f9] px-6 pt-8 lg:mt-0 pb-10">
          <p className="text-xl font-medium uppercase tracking-tighter text-gray-800">Order Summary</p>
          <p className="text-sm text-gray-800">
          Check your items. And select a suitable shipping method.
          </p>
          <div className="flex flex-col">
           
           <div className="min-h-[200px]">
            <CheckoutItem />
          </div>
           
            <div className="flex  space-x-2 py-4 border-b border-t border-gray-300">
              <input
                type="text"
                id="discount"
                name="discount"
                className="w-full rounded-md bg-white border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                placeholder="Discount code"
              />
              <button className=" w-40 rounded-md bg-gray-900 px-3 py-3 font-medium text-white">
              Apply
              </button>
            </div>

            <div className="mt-3  py-2">
              <div className="flex items-center justify-between">
                <p className="text-sm font-medium text-gray-900">Subtotal</p>
                <p className="font-semibold text-gray-900">$399.00</p>
              </div>
              <div className="flex items-center justify-between">
                <p className="text-sm font-medium text-gray-900">Shipping</p>
                <p className="font-semibold text-gray-900">$8.00</p>
              </div>
              <div className="flex items-center justify-between">
                <p className="text-sm font-medium text-gray-900">Taxes</p>
                <p className="font-semibold text-gray-900">$8.00</p>
              </div>
            </div>
            <div className="mt-3 pt-3 border-t border-gray-300 flex items-center justify-between">
              <p className="text-sm font-medium text-gray-900">Total</p>
              <p className="text-2xl font-semibold text-gray-900">$408.00</p>
            </div>
          </div>
          <button className="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">
            Place Order
          </button>
        </div>
      </div>