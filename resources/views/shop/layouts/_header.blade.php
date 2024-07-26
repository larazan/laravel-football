<header className=" bg-[#98c5e9] w-full top-0 left-0 right-0 h-[7vh] md:h-[9vh] flex items-center justify-center opacity-100 z-[200] ">
        <nav className="mx-auto w-full px-2 md:w-11/12 flex items-center justify-between">
          <section className="w-1/3 flex justify-start items-between z-20">
            <div
              className="space-y-2 w-fit md:justify-start cursor-pointer text-slate-800"
              onClick={clickMenu}
            >
              <svg
                viewBox="0 0 24 24"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                className="w-8 h-8 md:w-8 md:h-8"
              >
                <path
                  fillRule="evenodd"
                  clipRule="evenodd"
                  d="M3.25011 7C3.25011 6.58579 3.5859 6.25 4.00011 6.25H20.0001C20.4143 6.25 20.7501 6.58579 20.7501 7C20.7501 7.41421 20.4143 7.75 20.0001 7.75H4.00011C3.5859 7.75 3.25011 7.41421 3.25011 7ZM3.25011 12C3.25011 11.5858 3.5859 11.25 4.00011 11.25L20.0001 11.25C20.4143 11.25 20.7501 11.5858 20.7501 12C20.7501 12.4142 20.4143 12.75 20.0001 12.75L4.00011 12.75C3.5859 12.75 3.25011 12.4142 3.25011 12ZM4.00011 16.25C3.5859 16.25 3.25011 16.5858 3.25011 17C3.25011 17.4142 3.5859 17.75 4.00011 17.75H20.0001C20.4143 17.75 20.7501 17.4142 20.7501 17C20.7501 16.5858 20.4143 16.25 20.0001 16.25H4.00011Z"
                ></path>
              </svg>
            </div>
            <div
              className={` ${
                openMenu === false ? "hidden" : "flex flex-col"
              } bg-[#001838] w-full h-[100vh] z-10 fixed top-0 left-0 text-white text-4xl font-bold  flex-1 flex-col justify-between`}
            >
              <div className="flex flex-col">
                <div className="flex bg-[#98c5e9] flex-row justify-between items-center px-4 py-4">
                  <div className=" flex flex-row space-x-4 w-full items-center">
                    <div className="flex justify-center items-center">
                      <Link href={"/"}>
                        <Image
                          src={logo}
                          className="h-10 w-10 md:h-12 md:w-12"
                          alt=""
                        />
                      </Link>
                    </div>
                    <div className="">
                      <Link href={"/"}>
                        <div className="text-lg md:text-2xl font-bold text-[#001838]">
                          Manchester City
                        </div>
                      </Link>
                    </div>
                  </div>
                  <div
                    className="cursor-pointer rounded-full px-.5 py-1 bg-[#001838]"
                    onClick={clickMenu}
                  >
                    <svg
                      className="h-6 w-8 text-white"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      strokeWidth="3"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    >
                      <line x1="18" y1="6" x2="6" y2="18"></line>
                      <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                  </div>
                </div>
                <div className="w-full py-5">
                  <ul className="flex flex-col min-h-[250px]">
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        Sale
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        Kits
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        Shop by Player
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        Training
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        lifestyle
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/category"
                      >
                        Gifts
                      </Link>
                    </li>
                    <li className="flex w-full text-lg md:text-2xl uppercase">
                      <Link
                        className="px-6 py-3 w-full hover:underline tracking-tighter"
                        href="/login"
                      >
                        Login
                      </Link>
                    </li>
                    <li className="flex w-full text-lg  uppercase">
                      <Link
                        className="flex items-center px-6 py-3 w-full"
                        href="/cart"
                        target="_blank"
                      >
                        <svg
                          focusable="false"
                          className="a-icon icon--bag sub-menu__cart stroke-white fill-obsidian-blue mr-1"
                          viewBox="0 0 30 30"
                          width="40px"
                          height="40px"
                        >
                          <path
                            d="M21.9167 25.7494H7.41667C6.08146 25.7494 5 24.668 5 23.3328V10.6453C5 9.64476 5.812 8.83276 6.8125 8.83276H22.5208C23.5213 8.83276 24.3333 9.64476 24.3333 10.6453V23.3328C24.3333 24.668 23.2519 25.7494 21.9167 25.7494Z"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                          <path
                            d="M9.83301 8.83333V8.53125C9.83301 6.02879 11.8618 4 14.3643 4H14.9684C17.4709 4 19.4997 6.02879 19.4997 8.53125V8.83333"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></path>
                        </svg>
                        <span className="tracking-tighter">Bag</span>
                      </Link>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <div className="w-1/3 flex items-center justify-center">
            <Link href={"/shop"}>
              <Image
                src={logo}
                alt="logo/img"
                className={`w-10 md:w-12 h-auto ${navState && "filter brightness-0"}`}
              />
            </Link>
          </div>
          <div className="w-1/3 flex justify-end">
            <ul className="flex items-center justify-center gap-4">
              <li className="hidden md:grid items-center">
                <button onClick={clickSearch}>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  strokeWidth={1.5}
                  stroke="currentColor"
                  className="text-slate-900 transition-all duration-300 w-6 h-6"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                  />
                </svg>
                </button>
              </li>
              <li className="hidden md:grid items-center">
                <Link href={"/wishlist"}>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  strokeWidth={1.5}
                  stroke="currentColor"
                  className="w-6 h-6 text-slate-900 transition-all duration-300"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                  />
                </svg>
                </Link>
              </li>
              <li className="grid items-center">
                <UserMenu />
              </li>
              <li className="grid items-center">
                <button
                  type="button"
                  onClick={() => setIsOpen(!isOpen)}
                  className="border-none outline-none active:scale-110 transition-all duration-300 relative"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    strokeWidth={1.5}
                    stroke="currentColor"
                    className="text-slate-900 transition-all duration-300 w-6 h-6"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                    />
                  </svg>

                  <div
                    className={`absolute top-3 right-1 shadow w-4 h-4 text-[0.65rem] leading-tight font-medium rounded-full flex items-center justify-center cursor-pointer hover:scale-110 transition-all duration-300 ${
                      navState
                        ? "bg-slate-900 text-slate-100 shadow-slate-900"
                        : "bg-slate-100 text-slate-900 shadow-slate-100"
                    }`}
                  >
                    {totalQTY}
                  </div>
                </button>
              </li>
            </ul>
          </div>
        </nav>
      </header>