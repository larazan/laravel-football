<main class="bg-white bg-opacity-252 min-h-screen ">
        <ProfileNav />

        <div class="py-3 mx-auto w-11/12 ">
          <div class="flex w-full flex-col space-y-2">
            <div class="pt-5">
              <span class="text-base font-semibold tracking-tight text-gray-800">
                To change your password we have to take you to bayern.com
              </span>
            </div>
            <div class="flex w-full">
              <Link
                href={"/change_password"}
                class="px-3 py-2 border-2 border-slate-900 flex items-center space-x-2 justify-between"
              >
                <span class="uppercase font-semibold">update password</span>
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    strokeWidth={1.5}
                    stroke="currentColor"
                    class="w-5 h-5"
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