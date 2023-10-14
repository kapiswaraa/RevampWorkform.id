<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Workfrom.id</title>
    <script>
        const isiRadio = document.getElementById('default-radio-6');
        const isiTextField = document.getElementById('isi-textfield');

        isiRadio.addEventListener('change', function() {
            isiTextField.classList.toggle('hidden', !isiRadio.checked);
        });

        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('previewImage');

            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('hidden');
            };

            reader.readAsDataURL(input.files[0]);
        }

        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('previewImage');

            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('hidden');
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>


</head>

<body>
    <div class="py-2.5 bg-slate-200 text-gray-900 shadow-md">
        <div class="max-w-screen-lg mx-auto flex">
            <div class="ml-3">
                <a href="{{route('host.home')}}">
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0285 5.75017L6.27849 12.5002L13.0285 19.2502L11.4375 20.8412L3.09651 12.5002L11.4375 4.15918L13.0285 5.75017Z" fill="#21272A" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 11.375H20.4375V13.625H4.5V11.375Z" fill="#21272A" />
                    </svg>
                </a>
            </div>
            <p class="font-bold ml-5">Tambahkan Product</p>
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto">
        <div class="ml-14">
            <h1 class="text-xl font-bold mt-28 mb-16">Upload Foto/Video</h1>
            <form action="{{ route('host.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-center w-full">
                    <label for="thumbnail" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="thumbnail" name="thumbnail" type="file" class="form-control" />
                    </label>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="foto1" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <input id="foto1" name="foto1" type="file" class="form-control" onchange="previewImage(event)" accept="image/*" />
                        <img id="previewImage" class="hidden w-full h-full object-cover rounded-lg" alt="Preview Image" />
                    </label>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="foto1" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <input id="foto2" name="foto2" type="file" class="form-control" />
                    </label>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="foto1" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <input id="foto3" name="foto3" type="file" class="form-control" />
                    </label>
                </div>
                <div class="flex items-center justify-center w-full">
                    <label for="foto1" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <input id="foto4" name="foto4" type="file" class="form-control" />
                    </label>
                </div>

                <div class="my-6">
                    <label for="default-input" class="block mb-2 text-lg font-medium text-gray-900 ">Nama
                        Produk</label>
                    <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
                <div class="mb-6">
                    <label for="informasiProduk" class="block mb-2 text-lg font-medium text-gray-900 ">Informasi
                        Produk</label>
                    <textarea id="informasi" name="informasi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder></textarea>
                </div>
                <div class="mb-6">
                    <label for="deskripsiProduk" class="block mb-2 text-lg font-medium text-gray-900 ">Deskripsi
                        Produk</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder></textarea>
                </div>
                <div class="mb-6">
                    <h1 class="block mb-6 text-lg font-medium text-gray-900 ">Lokasi</h1>
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Kota</label>
                        <input type="text" id="kota" name="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mb-6">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Kecamatan</label>
                        <input type="text" id="kecamatan" name="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                </div>
                <div class="mb-6">
                    <h1 class="block mb-2 text-lg font-medium text-gray-900">Kategori</h1>
                    <div>
                        <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg ">
                            <li class="w-full border-b border-gray-200 rounded-t-lg ml-5 ">
                                <div class="flex items-center my-4">
                                    <input id="default-radio-1" type="radio" value="Meeting " name="kategori" class="w-4 h-4  text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-1" class="ml-10 text-sm font-medium text-gray-900">Meeting</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-2" type="radio" value="Event" name="kategori" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-2" class="ml-10 text-sm font-medium text-gray-900">Event</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-3" type="radio" value="Photo Shoot" name="kategori" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-3" class="ml-10 text-sm font-medium text-gray-900">Photoshoot</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-3" type="radio" value="Video Shoot" name="kategori" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-3" class="ml-10 text-sm font-medium text-gray-900">Videoshoot</label>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="mb-6">
                    <div class="block mb-2 text-lg font-medium text-gray-900">Harga</div>
                    <div>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                <div>Rp</div>
                            </div>
                            <input type="text" id="harga" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="block mb-2 text-lg font-medium text-gray-900">Luas Tanah</div>
                    <div>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">

                            </div>
                            <input type="text" id="kapasitas" name="luas_tanah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="block mb-2 text-lg font-medium text-gray-900">Luas Bangunan</div>
                    <div>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">

                            </div>
                            <input type="text" id="luas_bangunan" name="luas_bangunan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="block mb-2 text-lg font-medium text-gray-900">Kapasitas</div>
                    <div>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">

                            </div>
                            <input type="text" id="kapasitas" name="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="block mb-2 text-lg font-medium text-gray-900">Kamar Mandi</div>
                    <div>
                        <div class="relative mb-6">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">

                            </div>
                            <input type="text" id="kamar_mandi" name="kamar_mandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <h1 class="block mb-2 text-lg font-medium text-gray-900">Periode</h1>
                    <div>
                        <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg ">
                            <li class="w-full border-b border-gray-200 rounded-t-lg ml-5 ">
                                <div class="flex items-center my-4">
                                    <input id="default-radio-1" type="radio" value="Bulan " name="periode" class="w-4 h-4  text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-1" class="ml-10 text-sm font-medium text-gray-900">Bulanan</label>
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="default-radio-2" type="radio" value="Tahun" name="periode" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="default-radio-2" class="ml-10 text-sm font-medium text-gray-900">Tahunan</label>
                                </div>

                            </li>

                        </ul>

                    </div>
                </div>
                <div class="flex justify-center mb-10">
                    <button type="submit" class="py-5 px-10 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-400 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Simpan</button>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tampilkan</button>

                </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('previewImage');

            const reader = new FileReader();
            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('hidden');
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>

</html>