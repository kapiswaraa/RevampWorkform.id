<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Workfrom.id</title>
    <style>
        /* CSS for custom image */
        .custom-image {
            width: 100%;
            /* Sesuaikan lebar gambar sesuai kebutuhan */
            height: 50%;
            /* Tinggi akan disesuaikan secara otomatis sesuai lebar */
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="bg-white fixed w-full z-30 top-0 left-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="{{route('host.home')}}" class="flex items-center">
                <img src="/asset/Logo-WF-1 1.svg" class="h-8 mr-3" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2">
                <div class="hidden md:block">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative mt-1.5 mr-3">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Disini">
                    </div>
                </div>
                <div>
                    <div id="dropdownDefaultButton" data-dropdown-toggle="dropdownIconprofile">
                        <img src="/asset/icon7.svg" alt>
                    </div>
                    <!-- Dropdown menu -->
                    <div id="dropdownIconprofile" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{route('host.profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('host.logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log Out</a>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-20" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <div class="bloack md:hidden py-4 pl-3 pr-4">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative mt-1.5 mr-3">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Disini">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 " aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">About
                            Us</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Review</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-screen-xl flex justify-end mt-24 mb-14">
        <div class="mr-5">
            <svg width="25" height="25" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.04167 37.173H36.25C36.5263 37.173 36.7912 37.0633 36.9866 36.8679C37.1819 36.6726 37.2917 36.4076 37.2917 36.1314C37.2917 35.8551 37.1819 35.5901 36.9866 35.3948C36.7912 35.1994 36.5263 35.0897 36.25 35.0897H1.04167C0.765399 35.0897 0.500447 35.1994 0.305097 35.3948C0.109746 35.5901 0 35.8551 0 36.1314C0 36.4076 0.109746 36.6726 0.305097 36.8679C0.500447 37.0633 0.765399 37.173 1.04167 37.173ZM13.8792 29.3439C14.7592 29.0976 15.5621 28.6316 16.2125 27.9897L36.0875 8.11469C36.7681 7.43138 37.1503 6.50622 37.1503 5.54177C37.1503 4.57732 36.7681 3.65216 36.0875 2.96885L34.1292 1.03135C33.4361 0.369386 32.5146 0 31.5562 0C30.5979 0 29.6764 0.369386 28.9833 1.03135L9.10833 20.8855C8.46529 21.5316 8.00519 22.3368 7.775 23.2189L6.23333 28.9689C6.16019 29.2315 6.15831 29.5089 6.22787 29.7725C6.29744 30.0361 6.43595 30.2765 6.62917 30.4689C6.92405 30.7587 7.31984 30.923 7.73333 30.9272L13.8792 29.3439ZM14.7333 26.5105C14.3493 26.9015 13.8672 27.1822 13.3375 27.323L11.3167 27.8647L9.23333 25.7814L9.775 23.7605C9.92072 23.2329 10.2006 22.752 10.5875 22.3647L11.3792 21.5939L15.525 25.7397L14.7333 26.5105ZM17.0042 24.2605L12.8583 20.1147L26.8792 6.09385L31.025 10.2397L17.0042 24.2605ZM34.6083 6.65635L32.5042 8.76052L28.3583 4.61469L30.4625 2.48969C30.6073 2.34431 30.7794 2.22895 30.9688 2.15023C31.1583 2.07152 31.3615 2.031 31.5667 2.031C31.7718 2.031 31.975 2.07152 32.1645 2.15023C32.354 2.22895 32.526 2.34431 32.6708 2.48969L34.6083 4.44802C34.8989 4.74206 35.0619 5.13879 35.0619 5.55219C35.0619 5.96558 34.8989 6.36232 34.6083 6.65635Z" fill="black" />
            </svg>
        </div>
        <div>
            <svg width="25" height="25" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.6666 2.91667V5H35.4166C35.7481 5 36.0661 5.1317 36.3005 5.36612C36.5349 5.60054 36.6666 5.91848 36.6666 6.25C36.6666 6.58152 36.5349 6.89946 36.3005 7.13388C36.0661 7.3683 35.7481 7.5 35.4166 7.5H4.58325C4.25173 7.5 3.93379 7.3683 3.69937 7.13388C3.46495 6.89946 3.33325 6.58152 3.33325 6.25C3.33325 5.91848 3.46495 5.60054 3.69937 5.36612C3.93379 5.1317 4.25173 5 4.58325 5H13.3333V2.91667C13.3333 1.30667 14.6399 0 16.2499 0H23.7499C25.3599 0 26.6666 1.30667 26.6666 2.91667ZM15.8333 2.91667V5H24.1666V2.91667C24.1666 2.80616 24.1227 2.70018 24.0445 2.62204C23.9664 2.5439 23.8604 2.5 23.7499 2.5H16.2499C16.1394 2.5 16.0334 2.5439 15.9553 2.62204C15.8772 2.70018 15.8333 2.80616 15.8333 2.91667ZM8.32825 10.2967C8.314 10.1321 8.26728 9.97199 8.19078 9.82559C8.11428 9.6792 8.00952 9.54941 7.88256 9.44374C7.7556 9.33807 7.60896 9.25862 7.45111 9.20996C7.29325 9.16131 7.12732 9.14442 6.96291 9.16028C6.79849 9.17614 6.63884 9.22442 6.4932 9.30235C6.34756 9.38028 6.2188 9.4863 6.11438 9.61428C6.00996 9.74227 5.93194 9.88968 5.88483 10.048C5.83772 10.2063 5.82245 10.3724 5.83992 10.5367L8.19325 34.8667C8.26364 35.5878 8.59993 36.2569 9.13663 36.7437C9.67333 37.2305 10.372 37.5001 11.0966 37.5H28.9033C29.6281 37.5001 30.327 37.2303 30.8637 36.7431C31.4005 36.256 31.7366 35.5864 31.8066 34.865L34.1616 10.5367C34.1934 10.2065 34.0928 9.87716 33.8818 9.62117C33.6708 9.36518 33.3668 9.20349 33.0366 9.17167C32.7064 9.13984 32.3771 9.24049 32.1211 9.45147C31.8651 9.66244 31.7034 9.96647 31.6716 10.2967L29.3183 34.6233C29.3083 34.7265 29.2603 34.8222 29.1835 34.8919C29.1068 34.9615 29.0069 35.0001 28.9033 35H11.0966C10.993 35.0001 10.893 34.9615 10.8163 34.8919C10.7396 34.8222 10.6915 34.7265 10.6816 34.6233L8.32825 10.2967Z" fill="black" />
                <path d="M15.3434 12.502C15.5073 12.4923 15.6716 12.515 15.8268 12.5688C15.9819 12.6226 16.125 12.7065 16.2477 12.8156C16.3705 12.9248 16.4705 13.057 16.5421 13.2048C16.6137 13.3526 16.6555 13.5131 16.6651 13.677L17.4984 27.8437C17.5178 28.175 17.4049 28.5004 17.1844 28.7484C16.9639 28.9965 16.6539 29.1467 16.3226 29.1662C15.9913 29.1856 15.6658 29.0727 15.4178 28.8522C15.1698 28.6316 15.0195 28.3216 15.0001 27.9903L14.1667 13.8237C14.157 13.6597 14.1797 13.4955 14.2336 13.3403C14.2874 13.1851 14.3712 13.0421 14.4804 12.9194C14.5895 12.7966 14.7217 12.6966 14.8695 12.625C15.0173 12.5534 15.1778 12.5116 15.3417 12.502H15.3434ZM25.8317 13.8237C25.8512 13.4924 25.7382 13.1669 25.5177 12.9189C25.2972 12.6709 24.9872 12.5206 24.6559 12.5012C24.3246 12.4817 23.9991 12.5947 23.7511 12.8152C23.5031 13.0357 23.3528 13.3457 23.3334 13.677L22.5001 27.8437C22.4806 28.1748 22.5935 28.5 22.8138 28.7479C23.0342 28.9957 23.344 29.1459 23.6751 29.1653C24.0061 29.1848 24.3314 29.0719 24.5792 28.8516C24.8271 28.6312 24.9773 28.3214 24.9967 27.9903L25.8317 13.8237Z" fill="black" />
            </svg>
        </div>
    </div>
    @if ($product)
    <!-- Foto Product -->
    <div id="indicators-carousel" class=" mx-auto relative w-full max-w-screen-xl" data-carousel="static">
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
    @if ($loggedInHost)
    <!-- Info User -->
    <div class="max-w-screen-xl mx-auto  border-b-2 border-gray-500 mb-5 ">
        <div class="flex">
            <img src="/asset/iconprofile.svg" alt>
            <p class="mt-4 pl-6 font-bold">{{ $loggedInHost->username }}</p>
        </div>
        <div class="flex py-4">
            <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{ $loggedInHost->phone }}</button>
            <a href="https://api.whatsapp.com/send/?phone={{ $loggedInHost->phone }}&text&type=phone_number&app_absent=0" class="text-white hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" style="background-color: #25A249; display: inline-block; padding: 8px 16px;">
                WhatsApp
            </a>
        </div>
        @endif
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
                <a href="#" class=" text-base font-bold text-blue-700 underline ">lihat
                    selengkapnya</a>
            </div>
        </div>
        <div class="max-w-screen-xl mx-auto my-auto pt-14 grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class="image-container" style="position: relative;">
                    <img src="{{ Storage::url($product->thumbnail)}}" alt="Gambar Anda" class="custom-image">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded absolute bottom-4 left-4">
                        {{$product->kategori}}
                    </button>
                </div>

                <div class="p-5">
                    <a href="#">
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
    </div>
    </div>
    </div>

    <!-- footer -->
    <footer class="bg-white shadow dark:bg-gray-900 ">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Help</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Contact
                            Us</a>
                    </li>
                </ul>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="/asset/icon2.svg" alt>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="/asset/icon3.svg" alt>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="/asset/icon4.svg" alt>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="/asset/icon5.svg" alt>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-8 ">
                            <img src="/asset/icon6.svg" alt>
                        </a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">©
                2023 <a href="https://flowbite.com/" class="hover:underline">WorkFrom</a>.
                All Rights Reserved.</span>
        </div>
    </footer>
</body>@endif

</html>