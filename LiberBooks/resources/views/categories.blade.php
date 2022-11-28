<!-- This example requires Tailwind CSS v2.0+ -->
@extends('layouts.main')
@include('partials.navbar')
@section('container')
    


<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
      <div class="space-y-12">
        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
          <h2 class="text-3xl text-center font-extrabold tracking-tight sm:text-4xl">CATEGORIES</h2>
          <p class="text-xl text-center text-gray-500">Please select the desired category.</p>
        </div>
        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/novel.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Novel</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/magazine.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Magazine</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/dictionary.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Dictionary</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/comic.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Comic</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/tale.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Tale</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="space-y-4">
              <div class="aspect-w-3 aspect-h-2">
                <img class="object-cover shadow-lg rounded-lg" src="img/guide.png" alt="">
              </div>
  
              <div class="space-y-2">
                <div class="text-lg text-center leading-6 font-medium space-y-1">
                  <h3>Guide</h3>
                </div>
                <ul role="list" class="flex space-x-5">  
                </ul>
              </div>
            </div>
          </li>
  
          <!-- More people... -->
        </ul>
      </div>
    </div>
  </div>
  
  @endsection