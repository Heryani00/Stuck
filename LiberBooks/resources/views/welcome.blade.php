@extends('layouts.main')
@include('partials.navbar')
@section('container')
<div class="mx-auto">
  <div class="relative shadow-xl sm:overflow-hidden p-10">
    <div class="absolute inset-0">
      <img class="h-full w-full object-cover"
        src="http://localhost:8000/assets/img/5.jpg"
        alt="library background">
      <div class="absolute inset-0 bg-gradient-to-r from-gray-800 to-orange-700 mix-blend-multiply"></div>
    </div>
    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
      <h1 class="mt-6 max-w-lg text-5xl font-semibold text-indigo-200 sm:max-w-3xl">Welcome to Open LiberBooks</h1>
      <p class="mt-6 max-w-lg text-xl text-indigo-200 sm:max-w-3xl">Merupakan sebuah perpustakaan berbasis online yang menyediakan berbagai macam buku yang dapat diunduh secara gratis.</p>
    </div>
  </div>
</div>
{{-- 
<div class="pt-10 bg-orange-100 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
  <div class="mx-auto max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
        <div class="lg:py-24">
          <a href="#" class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full">LiberBooks</span>
            <span class="ml-4 text-sm">Visit our careers page</span>
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
          <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
            <span class="block">Welcome to Open</span>
            <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-teal-200 to-cyan-400 sm:pb-5">LiberBooks</span>
          </h1>
          <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Merupakan sebuah perpustakaan berbasis online yang menyediakan berbagai macam buku yang dapat diunduh secara gratis.</p>
          <div class="mt-10 sm:mt-12">
          </div>
        </div>
      </div>
      <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
          <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
          <img class="w-full rounded-lg lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"  src="http://localhost:8000/assets/img/4.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div> --}}
<div class="bg-[url('/assets/2.jpg)]">
  <img class="bg-gradient-to-r" src="" alt="">
</div>

{{-- feature section --}}
      
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-amber-50 py-16 sm:py-24 lg:py-32">
  <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
    <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Category</p>
    <p class="mx-auto mt-5 max-w-prose text-xl text-gray-500">Berikut merupakan daftar category yang ada di O-Library</p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/novel.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Novel</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Novel adalah karya sastra yang berbentuk prosa. Cerita dalam novel adalah sebuah karya imajinasi, membahas kehidupan seseorang atau berbagai karakter.</p>
            </div>
          </div>
        </div>


        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/majalah.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Magazine</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Majalah adalah publikasi yang dicetak di atas kertas menggunakan tinta dan diterbitkan secara berkala, Majalah tersebut memuat berbagai artikel dengan berbagai topik yang ditujukan untuk masyarakat umum dan ditulis dalam bahasa yang mudah dipahami banyak orang</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/kamus.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Dictionary</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Kamus adalah buku referensi untuk menjelaskan arti kata. Kamus membantu orang lain mengenali kata-kata baru. Selain menjelaskan arti kata, kamus juga dapat memiliki pedoman khusus, sumber kata (etimologi), dan contoh penggunaan kata.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/komik.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Comic</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Komik adalah media untuk mengekspresikan ide melalui gambar, biasanya digabungkan dengan teks atau informasi visual lainnya.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/dongeng.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Fairytale</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Dongeng adalah salah satu jenis karya sastra kuno yang mengandung cerita luar biasa dan imajiner (fiksi) yang dianggap masyarakat umum sebagai cerita yang tidak benar-benar terjadi.</p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root rounded-lg shadow-md bg-[#C7BCA1] px-6 pb-8 hover:bg-[#9F8772] group">
            <div class="-mt-6">
              <img width="100" class="rounded-lg mx-auto shadow-lg bg-[#C7BCA1] hover:scale-150" src="http://localhost:8000/assets/img/panduan.png" alt="">
              <h3 class="mt-8 text-lg font-medium tracking-tight text-gray-900 group-hover:text-white">Guide</h3>
              <p class="mt-5 text-base text-gray-500 group-hover:text-white selection:bg-[#FFF8EA] selection:text-slate-900">Buku panduan (how to) merupakan jenis buku yang berisi tentang sebuah petunjuk. Ciri paling ketara dari jenis buku ini adalah menjelaskan tentang sebuah cara atau tutorial.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 <!-- Testimonial section -->
 <div class="pb-16 bg-[#C7BCA1] lg:pb-0 lg:z-10 lg:relative">
  <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
    <div class="relative lg:-my-">
      <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
      <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
        <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
          <img class="object-cover lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
        </div>
      </div>
    </div>
    <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
      <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
        <blockquote>
          <div>
            <h1 class="text-base font-semibold text-primary md:text-4xl mt-1 lg:text-5xl font-bold">Testimoni</h1>
            <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
              <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
            </svg>
            <p class="mt-6 text-2xl font-medium text-white">Dengan adanya perpustakaan digital ini dapat memudahkan saya dalam mencari buku yang saya butuhkan dengan mudah</p>
          </div>
          <footer class="mt-6">
            <p class="text-base font-medium text-white">Judith Black</p>
            <p class="text-base font-medium text-cyan-100">CEO at PureInsights</p>
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
</div>


<!-- Blog section -->
<div class="relative bg-amber-50 py-16 sm:py-24 lg:py-32">
  <div class="relative">
    <div class="text-center mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
      <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Trending Books</p>
      <p class="mt-5 mx-auto max-w-prose text-xl text-gray-500">Berikut merupakan beberapa buku yang sering dibaca atau di download oleh user</p>
    </div>
    <div class="mt-12 mx-auto max-w-md px-4 grid gap-8 sm:max-w-lg sm:px-6 lg:px-8 lg:grid-cols-3 lg:max-w-7xl">
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-cyan-600">
              <a href="#" class="hover:underline"> Novel </a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">Dia Adalah Dilanku Tahun 1990</p>
              <p class="mt-3 text-base text-gray-500">Novel ini menceritakan tentang kisah cinta Milea. Milea adalah seorang murid baru pindahan dari Jakarta. Dan di saat ia berjalan menuju sekolah, ia bertemu dengan seorang teman satu sekolahnya, seorang peramal. Peramal itu mengatakan bahwa nanti mereka akan bertemu di kantin. Awalnya Milea tidak menghiraukan laki-laki peramal itu, tapi setiap hari laki-laki peramal tersebut selalu mengganggunya. Mau tidak mau, Milea mulai mencari tahu, laki-laki peramal itu bernama Dilan.”</p>
           <a href="">Read More....</a>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Roel Aufderehar">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline"> Pidi Baiq </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16"> Mar 16, 2020 </time>
                <span aria-hidden="true"> &middot; </span>
                <span> 6 min read </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-cyan-600">
              <a href="#" class="hover:underline">Comic</a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">Death Note Short Stories</p>
              <p class="mt-3 text-base text-gray-500">menceritakan pemilik baru notebook, yaitu Minoru Tanaka, seorang anak laki-laki seusia Light. Ia tidak menggunakannya untuk membunuh penjahat, melainkan mencoba untuk menjualnya untuk penawaran tertinggi dengan desain penipuan cerdik untuk membuatnya lebih banyak uang.</p>
              <a href="">Read More....</a>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Brenna Goyette">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline"> Tsugumi Ohba </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2022-02-15"> Feb 15, 2022 </time>
                <span aria-hidden="true"> &middot; </span>
                <span> 4 min read </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-cyan-600">
              <a href="#" class="hover:underline">Fairytale</a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">Kancil dan Buaya</p>
              <p class="mt-3 text-base text-gray-500">Dikisahkan pada suatu hari yang terik kancil merasa haus dan kelaparan, tubuhnya terasa lemah setelah seharian tak menemukan makanan, hingga ia tiba di suatu sungai yang airnya cukup dalam dan cukup deras arusnya. Di seberang sungai tersebut ia melihat ada tanaman mentimun sedang berbuah, makanan kesukaannya. Ia pun sangat gembira dan berniat segera menyeberangi sungai dan makan mentimun segar di seberang sungai.</p>
              <a href="">Read More....</a>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Daniela Metz">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline"> Rahimidin Zahari </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-02-12"> Feb 12, 2020 </time>
                <span aria-hidden="true"> &middot; </span>
                <span> 11 min read </span>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')


@endsection

  

