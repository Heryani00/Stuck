<div class="hidden sm:block">
    <div class="flex items-center border-b border-gray-200">
      <nav class="flex-1 -mb-px flex space-x-6 xl:space-x-8" aria-label="Tabs">
        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
        <a href="/admin" aria-current="page" class="{{ Request::is('admin') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500' }} whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Book lists </a>

        <a href="/admin/category" class="{{ Request::is('admin/category') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500' }} hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Category </a>

        <a href="#" class="{{ Request::is('admin/favorited') ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500' }} text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Favorited </a>
      </nav>
      <div class="hidden ml-6 bg-gray-100 p-0.5 rounded-lg items-center sm:flex">
        <button type="button" class="p-1.5 rounded-md text-gray-400 hover:bg-white hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <!-- Heroicon name: solid/view-list -->
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
          <span class="sr-only">Use list view</span>
        </button>
        <button type="button" class="ml-0.5 bg-white p-1.5 rounded-md shadow-sm text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
          <!-- Heroicon name: solid/view-grid -->
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
          <span class="sr-only">Use grid view</span>
        </button>
      </div>
    </div>
  </div>