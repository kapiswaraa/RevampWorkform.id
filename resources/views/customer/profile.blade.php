@extends('layouts.navbar')

@section('content')

<div class="max-w-screen-xl mx-auto pt-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
        <div>
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div class="flex justify-center items-center">
                    <img src="/asset/iconprofile.svg">
                </div>
                <p class="text-center mt-3">ganti profile</p>
                <div class="my-8">
                    <p class="pb-3 border-b-2 border-gray-400">{{ $customer->firstname }} {{ $customer->lastname }}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{ $customer->phone }}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{ $customer->address }}</p>
                    <p class="py-3 border-b-2 border-gray-400">{{ $customer->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-span-3 ml-8">
            <h1 class="font-bold text-2xl mb-5">My Profile</h1>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            name</label>
                        <input type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $customer->firstname }}" required>
                    </div>
                    <div>
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            name</label>
                        <input type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $customer->lastname }}" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $customer->email }}" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $customer->phone }}" required>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$customer->address }}" required>
                    </div>

                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>

</div>

</body>
@endsection