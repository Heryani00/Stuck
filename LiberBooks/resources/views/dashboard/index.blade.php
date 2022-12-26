@extends('dashboard.layouts.main')

@include('dashboard.layouts.sidebar')
    
    <div class="flex-1 relative z-0 flex overflow-hidden">
      <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
        <!-- Start main area-->
        <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
          <div class="h-full border-gray-200">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="">
              <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">History in Category</h2>
              <ul role="list" class="mt-3 grid grid-cols-3 gap-4">
                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">N</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Novel</a>
                      <p class="text-gray-500">6 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">M</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Magazine</a>
                      <p class="text-gray-500">8 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">D</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Dictionary</a>
                      <p class="text-gray-500">6 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">C</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Comic</a>
                      <p class="text-gray-500">2 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-purple-600 text-white text-sm font-medium rounded-l-md">T</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Tale</a>
                      <p class="text-gray-500">4 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>

                <li class="col-span-1 flex shadow-sm rounded-md">
                  <div class="flex-shrink-0 flex items-center justify-center w-16 bg-yellow-500 text-white text-sm font-medium rounded-l-md">G</div>
                  <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="#" class="text-gray-900 font-medium hover:text-gray-600">Guide</a>
                      <p class="text-gray-500">2 Books</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="sr-only">Open options</span>
                        <!-- Heroicon name: solid/dots-vertical -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="flex justify-center">
              <!-- This example requires Tailwind CSS v2.0+ -->
              <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 lg:max-w-7xl">
                  <div class="md:flex md:items-center md:justify-between">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">History Books Already Reads.</h2>
                    <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">Find More <span aria-hidden="true"> &rarr;</span></a>
                  </div>
    
                  <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Novel</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Magazine</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Tale</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Novel</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Novel</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Guide</p>
                    </div>
                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Comic</p>
                    </div>

                      
                    <div class="group relative p-5">
                      <div class="w-48 rounded-md overflow-hidden group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="" class="w-48  object-center object-cover">
                      </div>
                      <h3 class="-mt-24 text-sm text-gray-700">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Judul Buku
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">Comic</p>
                    </div>

                    <!-- More products... -->
                  </div>
    
                  <div class="mt-8 text-sm md:hidden">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Shop the collection<span aria-hidden="true"> &rarr;</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End main area -->
      </main>
    </div>
  </div>
</div>