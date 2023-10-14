@extends('layouts.nav')

@section('content')

<!-- daftar product -->
<div class="max-w-screen-xl mx-auto pt-32">
    <form action="{{ route('customer.product.search') }}" method="GET" class="max-w-screen-lg mx-auto">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" name="query" id="default-search" placeholder="Search products" class="block w-full py-2 pl-9 pr-3 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        </div>
        <button type="submit" class="sr-only">Search</button>
    </form>
    <div class="flex justify-center my-12 ">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 md:gap-14 max-w-screen-lg mx-auto">
            <div>
                <form action="{{ route('customer.sort.nearme') }}" method="GET">
                    <button id="dropdownDefaultButton" class="text-gray-900 hover:text-gray-800 border border-gray-800 focus:bg-gray-800 focus:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 pr-10 py-2.5 text-center inline-flex items-center" type="submit">Lokasi Terkini
                    </button>
                </form>
            </div>
            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="text-gray-900 hover:text-gray-800 border border-gray-800 focus:bg-gray-800 focus:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm pl-3 pr-3 py-2.5 text-center inline-flex items-center" type="button">Priode Sewa<svg class="w-2.5 h-2.5 ml-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('customer.sort.kategori', ['periode' => 'tahunan']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tahunan</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.sort.kategori', ['periode' => 'bulanan']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bulanan</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownKategori" class="text-gray-900 hover:text-gray-800 border border-gray-800 focus:bg-gray-800 focus:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm pl-3 pr-3 py-2.5 text-center inline-flex items-center" type="button">Kategori<svg class="w-2.5 h-2.5 ml-24" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownKategori" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('customer.sort.fasilitas', ['fasilitas' => 'Event Room']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Event
                                Room</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.sort.fasilitas', ['fasilitas' => 'Meeting Room']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Meeting
                                Room </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.sort.fasilitas', ['fasilitas' => 'Photo Shoot Room']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Photo
                                Shoot Room</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.sort.fasilitas', ['fasilitas' => 'Video Shoot Room']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Video
                                Shoot Room</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownLokasi" class="text-gray-900 hover:text-gray-800 border border-gray-800 focus:bg-gray-800 focus:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm pl-3 pr-3 py-2.5 text-end inline-flex items-center " type="button">Lokasi<svg class="w-2.5 h-2.5 ml-28" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownLokasi" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('customer.sort.lokasi', ['lokasi' => 'Jakarta']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Jakarta</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.sort.lokasi', ['lokasi' => 'Medan']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Medan</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownHarga" class="text-gray-900 hover:text-gray-800 border border-gray-800 focus:bg-gray-800 focus:text-white focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center " type="button">Harga<svg class="w-2.5 h-2.5 ml-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownHarga" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('customer.price.sort', ['sort' => 'asc']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Harga
                                Termurah</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.price.sort', ['sort' => 'desc']) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Harga
                                Termahal</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="ml-5 md:ml-0">
        <div class="font-bold text-xl mt-8">Hasil Pencarian</div>

        <div class="max-w-screen-xl mx-auto my-auto pt-14 grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($products as $product)<div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                    <div>
                        <div class="image-container" style="position: relative;">
                            <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">
                                <img src="{{ Storage::url($product->thumbnail)}}" alt="Gambar Anda" class="custom-image">
                            </a>
                            </a>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded left-4" style="position: absolute; bottom: 10px;">
                                {{$product->kategori}}
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">
                            <h5 class="mb-1 text-base  tracking-tight text-blue-700 font-bold">Rp.{{ number_format($product->harga, 0, ',', '.') }}/{{$product->periode}}</h5>

                        </a>

                        <p class="mb-3 font-normal text-black ">
                            <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">{{$product->nama}}</a>
                        </p>
                        <p class="mb-3 font-normal text-black ">
                            <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">LT: {{$product->luas_tanah}}M<sup>2</sup>|LB: {{$product->luas_bangunan}}M<sup>2</sup></a>
                        </p>
                        <p class="mb-3 font-normal text-gray-500 ">
                            <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">{{$product->kecamatan}},{{$product->kota}}</a>
                        </p>

                    </div>

                </div>
            </div>@endforeach
            <style>
                .max-w-screen-xl {
                    margin-bottom: 1rem;
                }
            </style>

        </div>{{ $products->links() }}
    </div>
</div>
</div>

@endsection