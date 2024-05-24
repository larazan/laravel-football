<div class="fixed flex justify-center mx-auto w-full bottom-3 z-40 cursor-pointer">
        {isVisible && (
          <div
            onClick={scrollToTop}
            class="fixed flex space-x-2 px-3 py-1 lg:px-4 lg:py-4 items-center text-white rounded-full bg-red-600 bottom-3 hover:bg-red-500 lg:bottom-5 lg:right-5 cursor-pointer border border-white"
          >
            <div class="font-semibold text-sm">Scroll to top</div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth={3}
                d="M8 7l4-4m0 0l4 4m-4-4v18"
              />
            </svg>
          </div>
        )}
      </div>