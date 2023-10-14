@extends('layouts.hostnav')

@section('content')

<!-- Profile -->
<div class="max-w-screen-xl mx-auto pt-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
        <div>
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex justify-center items-center">
                    <img src="/asset/gambarprofile.svg">
                </div>
                <p class="text-center mt-3">ganti profile</p>
                <div class="my-8">
                    <p class="pb-3 border-b-2 border-gray-400">{{$host->nama_toko}}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{$host->username}}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{$host->phone}}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{$host->address}}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{$host->email}}</p>
                </div>
            </div>
        </div>
        <div class="col-span-3 ml-8">
            <h1 class="font-bold text-2xl mb-5">My Profile</h1>
            <form action="{{ route('host.profile.update') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_toko" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Toko</label>
                        <input type="text" id="nama_toko" name="nama_toko" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->nama_toko }}" required>
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Pengguna</label>
                        <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->username }}" required>
                    </div>
                    <div>
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            name</label>
                        <input type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->firstname }}" required>
                    </div>
                    <div>
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            name</label>
                        <input type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->lastname }}" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->email }}" required>
                    </div>
                    <div>
                        <label for="telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="tel" id="telp" name="telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->telp }}" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                            Whatsapp</label>
                        <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->phone }}" required>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="tel" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $host->address }}" required>
                    </div>

                </div>
                <div class="flex justify-center">
                    <!-- Center the button -->
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 mt-7 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                        Perubahan</button>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
@endsection