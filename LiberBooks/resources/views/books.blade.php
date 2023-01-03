@extends('layouts.main')
@include('partials.navbar')
@section('container')



{{-- @if ($clicked == true)
    <p>Gambar telah diklik</p>
@else
    <p>Gambar belum diklik</p>
@endif --}}


      {{-- session --}}

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


@if(session()->has('fail'))
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
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">{{ session('fail') }}</h3>
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



<div class="" x-data="{ open: false }">
    <div class="bg-white" >
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="sr-only">Products</h2>
          <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
              @foreach($buku as $b)
             <a @click="open = ! open" href="#" class="group" onclick="detailBuku({{ $b->id }})"> 
              <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                <img src="{{ asset('storage/' . $b->image) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <div class="flex justify-between">
                <p class="mt-4 text-sm font-semibold text-gray-900">{{ $b->judul }}</p>
                <p class="mt-4 text-sm text-indigo-500 group-hover:text-indigo-600">{{ $b->genre }}</p>
                </div>
                <p class="mt-2 text-sm text-gray-700">By. {{ $b->penulis }}</p>
                <p class="mt-2 text-sm text-gray-700">{!! $b->deskripsi !!}</p>
            </a>

            @endforeach
          </div>
        </div>
      </div>
      
    {{-- slide --}}

    
       <div x-transition:enter="transition-opacity ease-linear duration-300"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition-opacity ease-linear duration-300"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0" x-show="open" class="z-30 absolute mt-10" role="dialog" aria-modal="true">
          <div class="fixed inset-0"></div>
    
          <div class="fixed inset-0 overflow-hidden">
              <div class="absolute inset-0 overflow-hidden">
                  <div class="pointer-events-none fixed inset-y-0 right-0 top-[3.98rem] flex max-w-full pl-10 sm:pl-16">
                      <div class="pointer-events-auto w-screen max-w-md">
                          <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                          <div class="px-4 py-6 sm:px-6">
                              <div class="flex items-start justify-between">
                              <h2 id="slide-over-heading" class="text-lg font-medium text-gray-900">Detail</h2>
                              <div class="ml-3 flex h-7 items-center">
                                  <button @click="open = false" type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
                                  <span class="sr-only">Close panel</span>
                                  <!-- Heroicon name: outline/x-mark -->
                                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                  </svg>
                                  </button>
                              </div>
                              </div>
                          </div>
                          <!-- Main -->
                          <div>
                              <div class="pb-1 sm:pb-6">
                              <div>
                                  <div class="relative h-40 sm:h-56">
                                  <img id="buku-image" class="absolute h-full w-full object-cover" src="" alt="">
                                  </div>
                                  <div class="mt-6 px-4 sm:mt-8 sm:flex sm:items-end sm:px-6">
                                  <div class="sm:flex-1">
                                      <div>
                                      <div class="flex items-center">
                                          <h3 id="buku-judul" class="text-xl font-bold text-gray-900 sm:text-2xl"></h3>    
                                      </div>
                                      {{-- <p class="text-sm text-gray-500">@ashleyporter</p> --}}
                                      </div>
                                      @auth
                                      <div class="mt-5 flex flex-wrap space-y-3 sm:space-y-0 sm:space-x-3">
                                     <a id="download" href=""><button type="button" class="inline-flex w-full flex-shrink-0 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:flex-1">Download</button></a>
                                      <a id="read" href=""><button type="button" class="inline-flex w-full flex-1 items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Read online</button></a>

                                      <div id="button-container" >
                                    
                                        {{-- @php
                                        var_dump($bb)
                                    @endphp --}}
    
                                      <form action="/favorites" method="post">
                                        @csrf
                                        <input type="hidden" name="buku_id" id="favorit" value="">
                                        {{-- <p>{{ $ids }}</p> --}}
                                      <button type="submit" class="ml-4 bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 like-button">
                                        <!-- like -->
                                        {{-- @if ($ids->contains($bb)) --}}
                                        @php
                                            $count = 0;
                                        @endphp
    
                                        {{-- <svg id="love" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg> --}}
                                        <svg id="love" class="{{ $ids->contains($b->id) ? 'h-6 w-6 text-red-600' : 'h-6 w-6' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
    
                                        
    
                                        {{-- @else --}}
                                        {{-- <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg> --}}
                                        {{-- @endif --}}
                                        <span class="sr-only">Favorite</span>
                                      </button>
                                    </form>

                                    <form action="/favorites" method="post">
                                      @method('delete')
                                      @csrf
                                      <input type="hidden" name="buku_id" id="favorit-delete" value="">
                                      {{-- <p>{{ $ids }}</p> --}}
                                    <button type="submit" class="ml-4 bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 like-button">
                                      <!-- like -->
                                      {{-- @if ($ids->contains($bb)) --}}
                                      @php
                                          $count = 0;
                                      @endphp
  
                                      {{-- <svg id="love" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                      </svg> --}}
                                      <svg id="love" class="{{ $ids->contains($b->id) ? 'h-6 w-6 text-red-600' : 'h-6 w-6' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                      </svg>
  
                                      
  
                                      {{-- @else --}}
                                      {{-- <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                      </svg> --}}
                                      {{-- @endif --}}
                                      <span class="sr-only">Favorite</span>
                                    </button>
                                  </form>

                                  </div>

                                      </div>


                                     
                                      @else
                                      <div class="mt-5 flex flex-wrap space-y-3 sm:space-y-0 sm:space-x-3">
                                        <a  href="/login"><button type="button" class="inline-flex w-full flex-shrink-0 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:flex-1">Login First to read/download Books</button></a>
                                  </div>
                                  @endauth
                                  </div>
                                  


                              </div>
                              </div>
                              <div class="px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
                              <dl class="space-y-8 px-4 sm:space-y-6 sm:px-6">
                                  <div>
                                  <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Deskripsi</dt>
                                  <dd id="buku-deskripsi" class="mt-1 text-sm text-gray-900 sm:col-span-2"></dd>
                                  </div>
                                  <div>
                                  <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Penulis</dt>
                                  <dd id="buku-penulis" class="mt-1 text-sm text-gray-900 sm:col-span-2"></dd>
                                  </div>
                                  <div>
                                  <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Penerbit</dt>
                                  <dd id="buku-penerbit" class="mt-1 text-sm text-gray-900 sm:col-span-2"></dd>
                                  </div>
                                  <div>
                                  <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">Tahun Terbit</dt>
                                  <dd id="tahun_terbit" class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                  </dd>
                                  </div>
                              </dl>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> 







</div>
  



<script>

  function detailBuku(bukuId) {

    $.ajax({
        url: 'allbooks/user/books/' + bukuId,
        type: 'GET',
        success: function(data) {
          document.getElementById('buku-image').src = 'http://localhost:8000/storage/' + data.image
          document.getElementById('buku-judul').innerHTML = data.judul
          document.getElementById('buku-penulis').innerHTML = data.penulis
          document.getElementById('buku-penerbit').innerHTML = data.penerbit
          document.getElementById('tahun_terbit').innerHTML = data.tahun_terbit
          document.getElementById('buku-deskripsi').innerHTML = data.deskripsi
          document.getElementById('favorit').value = data.id
          document.getElementById('favorit-delete').value = data.id
          document.getElementById('read').href = 'http://localhost:8000/storage/' + data.file
          document.getElementById('download').href = 'allbooks/user/books/download/' + data.id
          document.getElementById('love').class = "{{ $ids->contains("+data.id+")  ? 'h-6 w-6 text-red-600' : 'h-6 w-6' }}" 
          

        //   var isFavorited = data.isFavorited
        //   if(isFavorited == true){
        //     // Tampilkan tombol "batal suka"
        //     $('#button-container').html('<button id="unlike-button" type="button">Batal Suka</button>');
        // } else {
        //     // Tampilkan tombol "suka"
        //     $('#button-container').html('<button id="like-button" type="button">Suka</button>');
        // }

        }
    });
  }


</script>
@endsection