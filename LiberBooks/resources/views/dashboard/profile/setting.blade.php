@extends('dashboard.layouts.main')
@include('dashboard.layouts.sidebar')

@section('container')
<div class="" >
  <div class="mx-4"  >
    <form class="space-y-8" method="post" action="{{ route('change.password') }}">
      @csrf
      <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5"> 
        <div>
          <div>
            <h3 class="text-7xl rotate-180 leading-6 font-medium text-pink-500">Account Setting</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
          </div>
    
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="oldpassword" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 "> Old Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="current_password" id="oldpassword" autocomplete="oldpassword" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 @error('current_password') invalid:border-red-900 @enderror">
                </div>
                @error('current_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
          <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="newpassword" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">New Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="new_password" id="newpassword" autocomplete="newpassword" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 @error('new_password') invalid:border-red-900 @enderror">
                  
                </div>
                @error('new_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
    
            
            {{-- <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> About </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <textarea id="about" name="about" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
              </div>
            </div> --}}
    
  
          </div>
                  <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="confirm-password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Confirm Password </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <div class="max-w-lg flex rounded-md shadow-sm">
                  <input type="password" name="new_confirm_password" id="confirm-password" autocomplete="confirm-password" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300 @error('new_confirm_password') invalid:border-red-900 @enderror">
                </div>
                @error('new_confirm_password')
                <div class="invalid-feedback text-red-800 ">
                  {{ $message }}
                </div>
              @enderror
              </div>
            </div>
    
            
  
    
  
          </div>
        </div>
      </div>
    
    
      <div class="pt-5">
        <div class="flex justify-center">
          <a  href="/dashboard/profile"><button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button></a>
          <button @click="open = true" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          

          
              </div>

  
        </div>
      </div>
    </form>
  </div>
  

</div>



@if(session()->has('success'))
<div class="" x-data="{open : true}">
  <button @click="open = true" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm invisible" >Close</button>
  <div id="modalID" x-show="open" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
        <div>
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
            <!-- Heroicon name: outline/check -->
            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="false">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <div class="mt-3 text-center sm:mt-5">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">{{ session('success') }}</h3>
            <div class="mt-2">
            <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet labore.</p>
            </div>
        </div>
        </div>
        <div class="mt-5 sm:mt-6">
        <button @click="open = false" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm" >Close</button>
        </div>
    </div>
    </div>
</div>
@endif




  @endsection