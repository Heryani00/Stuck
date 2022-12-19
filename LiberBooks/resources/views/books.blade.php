@extends('layouts.main')
@include('partials.navbar')
@section('container')





<div class="grid grid-cols-3">
    @foreach ($buku as $b)
<!-- Card List Section -->
<section class="bg-gray-0 dark:bg-gray-900 py-10 px-12">
    <!-- Card Grid -->

        <div class="">
                <!-- Card Item -->
                <div  class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1"
                    >
                    <!-- Clickable Area -->
                    <a href="#" class="cursor-pointer">
                        <figure>
                            <!-- Image -->
                            <img src="img/comic.png" class="rounded-t h-72 w-full object-cover" />
    
                            <figcaption class="p-4">
                                <!-- Title -->
                                {{ $b->judul }}
                                <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300" >
                                    <!-- Post Title -->
                                    {!! $b->deskripsi !!}
                                </p>
    
                                <!-- Description -->
                                <small class="leading-5 text-gray-500 dark:text-gray-400">
                                    <!-- Post Description -->
                                </small>
                            </figcaption>
                        </figure>
                    </a>
                </div>
        </div>

</section>
@endforeach
</div>




@endsection