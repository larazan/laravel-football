<div className="w-full py-1 md:py-10 bg-[#f5f7f9]">
        <div className={`w-full max-w-[1280px] px-5 md:px-10 mx-auto`}>
          {/* HEADING AND PARAGRAPH START */}
          <div className="text-center max-w-[800px] mx-auto mt-8 md:mt-0">
            <div className="text-[28px] md:text-[34px] mb-5 font-semibold uppercase tracking-tight leading-tight text-slate-900">
              Shopping Cart
            </div>
          </div>
          {/* HEADING AND PARAGRAPH END */}

          {/* CART CONTENT START */}
          <div className="flex flex-col md:flex-row gap-12 mb-10 md:py-10">
            {/* CART ITEMS START */}
            <div className="flex-[2]">
              <div className="text-lg font-bold text-slate-900">Cart Items</div>

              <CartItem />
            </div>
            {/* CART ITEMS END */}

            {/* SUMMARY START */}
            <div className="flex-[1]">
              <div className="text-lg font-bold text-slate-900">Summary</div>

              <div className="p-5 my-5 bg-black/[0.05] rounded-lg">
                <div className="flex justify-between">
                  <div className="uppercase text-md md:text-lg font-medium text-black">
                    Subtotal
                  </div>
                  <div className="text-md md:text-lg font-medium text-black">
                    &#8377;200
                  </div>
                </div>
                <div className="text-sm md:text-md py-3 text-slate-900">
                  The subtotal reflects the total price of your order, including
                  duties and taxes, before any applicable discounts. It does not
                  include delivery costs and international transaction fees.
                </div>
              </div>

              {/* BUTTON START */}
              <button className="w-full py-2 md:py-3 rounded uppercase tracking-tighter bg-[#001838] text-white text-lg font-medium transition-transform active:scale-95 mb-3 hover:opacity-80 flex items-center gap-2 justify-center">
                Checkout
                {loading && <Image src={spinner} alt="" />}
              </button>
              {/* BUTTON END */}
            </div>
            {/* SUMMARY END */}
          </div>
          {/* CART CONTENT END */}

          {/* This is empty screen */}
          {items && (
            <div className="flex-[2] flex flex-col items-center pb-[50px] md:-mt-14">
              <Image
                src={empty}
                width={300}
                height={300}
                className="w-[300px] md:w-[400px]"
                alt=""
              />
              <span className="text-xl font-bold text-slate-900">Your cart is empty</span>
              <span className="text-center mt-4 text-slate-900">
                Looks like you have not added anything in your cart.
                <br />
                Go ahead and explore top categories.
              </span>
              <Link
                href="/shop"
                className="py-4 px-8 rounded-full bg-black text-white text-lg font-medium transition-transform active:scale-95 mb-3 hover:opacity-75 mt-8"
              >
                Continue Shopping
              </Link>
            </div>
          )}
        </div>
      </div>