@extends('dashboard.layouts.main')

@include('dashboard.layouts.sidebar')

  <div class="flex-1 relative z-0 flex overflow-hidden">
    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
      <!-- Start main area-->
      <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
        <div class="h-full">
          
          <main class="pb-24">
            <div class="bg-white">
              <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Favorite Books</h1>
                <p class="mt-2 max-w-xl text-sm text-gray-700">Your favorite books will be displayed on this page.</p>
              </div>
            </div>
        
            <!-- Filters -->
            <section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
              <div class="col-start-1 row-start-1 py-3">
                <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="relative inline-block">
                    <div class="flex">
                      <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        Category
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
        
                    <!--
                      Dropdown menu, show/hide based on menu state.
        
                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div class="origin-top-right absolute right-0 mt-2 w-40 rounded-md shadow-2xl bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                      <div class="py-1" role="none">
                        <!--
                          Active: "bg-gray-100", Not Active: ""
        
                          Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                        -->
                        <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0"> Novel </a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1"> Kamus </a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2"> Majalah </a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3"> Komik </a>
        
                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4"> Panduan </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        
            <!-- Product grid -->
            <section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
              <h2 id="products-heading" class="sr-only">Products</h2>
        
              <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-01.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-02.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-03.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-04.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-01.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-02.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-03.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <div class="group relative p-4 border-r border-b border-gray-200 sm:p-6">
                  <div class="rounded-lg overflow-hidden bg-gray-200 aspect-w-1 aspect-h-1 group-hover:opacity-75">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-05-image-card-04.jpg" alt="TODO" class="w-60 object-center object-cover">
                  </div>
                  <div class="pt-10 pb-4 text-center">
                    <h3 class="text-sm font-medium text-gray-900">
                      <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        Judul Buku
                      </a>
                    </h3>
                    <div class="mt-3 flex flex-col items-center">
                      <div class="flex items-center">
                        <p class="mt-1 text-sm text-gray-500">Nama Penulis</p>
                      </div>
                      <p class="mt-1 text-sm text-gray-500">Genre Buku</p>
                    </div>
                    <p class="mt-4 text-base font-medium text-gray-900"><a class="font-medium text-gray-900 group-hover:text-sky-700" href="#">Read more</a></p>
                  </div>
                </div>
        
                <!-- More products... -->
              </div>
            </section>
        
            <!-- Pagination -->
            <nav aria-label="Pagination" class="max-w-7xl mx-auto px-4 mt-6 flex justify-between text-sm font-medium text-gray-700 sm:px-6 lg:px-8">
              <div class="min-w-0 flex-1">
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> Previous </a>
              </div>
              <div class="hidden space-x-2 sm:flex">
                <!-- Current: "border-indigo-600 ring-1 ring-indigo-600", Default: "border-gray-300" -->
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 1 </a>
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 2 </a>
                <a href="#" class="inline-flex items-center px-4 h-10 border border-indigo-600 ring-1 ring-indigo-600 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 3 </a>
                <span class="inline-flex items-center text-gray-500 px-1.5 h-10"> ... </span>
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 8 </a>
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 9 </a>
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> 10 </a>
              </div>
              <div class="min-w-0 flex-1 flex justify-end">
                <a href="#" class="inline-flex items-center px-4 h-10 border border-gray-300 rounded-md bg-white hover:bg-gray-100 focus:outline-none focus:border-indigo-600 focus:ring-2 focus:ring-offset-1 focus:ring-offset-indigo-600 focus:ring-indigo-600 focus:ring-opacity-25"> Next </a>
              </div>
            </nav>
          </main>





        </div>
      </div>
      <!-- End main area -->
    </main>
  </div>




