@extends('layouts.nav')

@section('content')
<!-- Foto Product -->
<div id="indicators-carousel" class="mt-20 mx-auto relative w-full max-w-screen-xl" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ Storage::url($product->thumbnail)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ Storage::url($product->foto1)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ Storage::url($product->foto2)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ Storage::url($product->foto3)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ Storage::url($product->foto4)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" id="prev-button">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover-bg-white/50 group-focus-outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" id="next-button">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover-bg-white/50 group-focus-outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover-bg-white/50 group-focus-outline-none">
            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<div class="mt-8 w-full hidden md:block">
    <div class="max-w-screen-xl my-auto mx-auto grid grid-cols-1 md:grid-cols-4" id="image-grid">
        <!-- item 1 -->
        <div class="grid-item" data-item-index="0">
            <img src="{{ Storage::url($product->foto1)}}" alt>
        </div>
        <!-- item 2 -->
        <div class="grid-item" data-item-index="1">
            <img src="{{ Storage::url($product->foto2)}}" alt>
        </div>
        <!-- item 3 -->
        <div class="grid-item" data-item-index="2">
            <img src="{{ Storage::url($product->foto3)}}" alt>
        </div>
        <!-- item 4 -->
        <div class="grid-item" data-item-index="3">
            <img src="{{ Storage::url($product->foto4)}}" alt>
        </div>
    </div>
</div>

<!-- Harga Product -->
<div class="max-w-screen-xl mx-auto  border-b-2 border-gray-500 mb-5">
    <h1 class="font-bold text-blue-700 text-3xl pb-4 pt-10">Rp.{{ number_format($product->harga, 0, ',', '.') }}/{{$product->periode}}</h1>
    <p class="font-bold text-lg">{{$product->nama}}</p>
    <p class="py-4 b">{{$product->kecamatan}}, {{$product->kota}}</p>
</div>

<!-- Info User -->
<div class="max-w-screen-xl mx-auto border-b-2 border-gray-500 mb-5">
    @foreach ($product->hosts as $host)
    <div class="flex" style="margin-bottom: 10px;">
        <img src="asset/iconprofile.svg" alt>
        <p class="mt-4 pl-6 font-bold">{{ $host->username }}</p>
    </div>
    @endforeach
    <div class="flex py-4">
        <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{$product->nomor_penjual}}</button>
        <a href="https://api.whatsapp.com/send/?phone={{$product->nomor_penjual}}&text&type=phone_number&app_absent=0" class="text-white hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" style="background-color: #25A249; display: inline-block; padding: 8px 16px;">
            WhatsApp
        </a>
    </div>
</div>
</div>

<!-- Informasi Product -->
<div class="max-w-screen-xl mx-auto mb-5 ">
    <h1 class="text-xl font-bold">Informasi Produk</h1>
    <div class="flex py-5 border-b-2 border-gray-700">
        <div class="mr-32">Luas Tanah</div>
        <div>{{$product->luas_tanah}}M<sup>2</sup></div>
    </div>
    <div class="flex py-5 border-b-2 border-gray-700">
        <div class="mr-24">Luas Bangunan</div>
        <div>{{$product->luas_bangunan}}M<sup>2</sup></div>
    </div>
    <div class="flex py-5 border-b-2 border-gray-700">
        <div class="mr-28">Kamar Mandi</div>
        <div>{{$product->kamar_mandi}}</div>
    </div>
    <div class="flex py-5 border-b-2 border-gray-700">
        <div class="mr-24">Priode Sewa</div>
        <div class="ml-5">{{$product->periode}}an</div>
    </div>
    <div class="flex py-5 border-b-2 border-gray-700">
        <div class="mr-32">Kapasitas</div>
        <div class="ml-2">{{$product->kapasitas}} Orang</div>
    </div>
</div>

<!-- Deskripsi Product -->
<div class="max-w-screen-xl mx-auto mb-5 border-b-2 border-gray-600 ">
    <h1 class="text-xl font-bold">Deskripsi</h1>
    <p class="my-5">{{$product->deskripsi}}<br>
</div>

<!-- rekomendasi -->
<div class="my-20 w-full ">
    <div class="max-w-screen-xl my-auto mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="text-start">
            <h1 class="md:text-3xl text-xl font-bold">Rekomendasi
                untukmu</h1>
        </div>
        <div></div>
        <div class="text-start md:text-end">
            <a href="{{route('customer.list')}}" class=" text-base font-bold text-blue-700 underline ">lihat
                selengkapnya</a>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto my-auto pt-14 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($productrecommendation as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="image-container" style="position: relative;">
                <img src="{{ Storage::url($product->thumbnail)}}" alt="Gambar Anda" class="custom-image" href="{{route('customer.list')}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded absolute bottom-4 left-4">
                    {{$product->kategori}}
                </button>
            </div>

            <div class="p-5">
                <a href="{{route('customer.list')}}">
                    <h5 class="mb-1 text-base tracking-tight text-blue-700 font-bold">Rp.{{ number_format($product->harga, 0, ',', '.') }}/{{$product->periode}}</h5>
                </a>
                <p class="mb-3 font-normal text-black ">{{$product->nama}}</p>
                <p class="mb-3 font-normal text-black ">LT: {{$product->luas_tanah}}M<sup>2</sup>|LB: {{$product->luas_bangunan}}M<sup>2</sup> </p>
                <p class="mb-3 font-normal text-gray-500 ">{{$product->provinsi}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection