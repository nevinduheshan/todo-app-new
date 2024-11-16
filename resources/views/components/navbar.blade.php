<nav class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap justify-between items-center">
      <div class="flex justify-start items-center">
        <button
          data-drawer-target="drawer-navigation"
          data-drawer-toggle="drawer-navigation"
          aria-controls="drawer-navigation"
          class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
        >
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <svg
            aria-hidden="true"
            class="hidden w-6 h-6"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span class="sr-only">Toggle sidebar</span>
        </button>
        <a href="{{ Route('tasks.index') }}" class="flex items-center justify-between mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><rect width="9" height="9" x="1.5" y="1.5" fill="currentColor" rx="1"><animate id="svgSpinnersBlocksScale0" attributeName="x" begin="0;svgSpinnersBlocksScale1.end+0.15s" dur="0.6s" keyTimes="0;.2;1" values="1.5;.5;1.5"/><animate attributeName="y" begin="0;svgSpinnersBlocksScale1.end+0.15s" dur="0.6s" keyTimes="0;.2;1" values="1.5;.5;1.5"/><animate attributeName="width" begin="0;svgSpinnersBlocksScale1.end+0.15s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/><animate attributeName="height" begin="0;svgSpinnersBlocksScale1.end+0.15s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/></rect><rect width="9" height="9" x="13.5" y="1.5" fill="currentColor" rx="1"><animate attributeName="x" begin="svgSpinnersBlocksScale0.begin+0.15s" dur="0.6s" keyTimes="0;.2;1" values="13.5;12.5;13.5"/><animate attributeName="y" begin="svgSpinnersBlocksScale0.begin+0.15s" dur="0.6s" keyTimes="0;.2;1" values="1.5;.5;1.5"/><animate attributeName="width" begin="svgSpinnersBlocksScale0.begin+0.15s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/><animate attributeName="height" begin="svgSpinnersBlocksScale0.begin+0.15s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/></rect><rect width="9" height="9" x="13.5" y="13.5" fill="currentColor" rx="1"><animate attributeName="x" begin="svgSpinnersBlocksScale0.begin+0.3s" dur="0.6s" keyTimes="0;.2;1" values="13.5;12.5;13.5"/><animate attributeName="y" begin="svgSpinnersBlocksScale0.begin+0.3s" dur="0.6s" keyTimes="0;.2;1" values="13.5;12.5;13.5"/><animate attributeName="width" begin="svgSpinnersBlocksScale0.begin+0.3s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/><animate attributeName="height" begin="svgSpinnersBlocksScale0.begin+0.3s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/></rect><rect width="9" height="9" x="1.5" y="13.5" fill="currentColor" rx="1"><animate id="svgSpinnersBlocksScale1" attributeName="x" begin="svgSpinnersBlocksScale0.begin+0.45s" dur="0.6s" keyTimes="0;.2;1" values="1.5;.5;1.5"/><animate attributeName="y" begin="svgSpinnersBlocksScale0.begin+0.45s" dur="0.6s" keyTimes="0;.2;1" values="13.5;12.5;13.5"/><animate attributeName="width" begin="svgSpinnersBlocksScale0.begin+0.45s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/><animate attributeName="height" begin="svgSpinnersBlocksScale0.begin+0.45s" dur="0.6s" keyTimes="0;.2;1" values="9;11;9"/></rect></svg>
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white px-5">Todo</span>
        </a>

      </div>
    </div>
  </nav>
