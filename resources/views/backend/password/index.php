<main className="bg-white bg-opacity-252 min-h-screen ">
        <ProfileNav />

        <div className="py-3 mx-auto w-11/12 ">
          <div className="flex w-full flex-col space-y-2">
            <div className="pt-5">
              <span className="text-base font-semibold tracking-tight text-gray-800">
                To change your password we have to take you to bayern.com
              </span>
            </div>
            <div className="flex w-full">
              <Link
                href={"/change_password"}
                className="px-3 py-2 border-2 border-slate-900 flex items-center space-x-2 justify-between"
              >
                <span className="uppercase font-semibold">update password</span>
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    strokeWidth={1.5}
                    stroke="currentColor"
                    className="w-5 h-5"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"
                    />
                  </svg>
                </span>
              </Link>
            </div>
          </div>
        </div>
      </main>