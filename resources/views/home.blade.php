@extends('layouts.frontend')

@section('content')
<!-- Bergabung dengan kami-->
<div class="mt-20 w-full" id="reg" style="background-color: #F2F4F8;">
    <h1 class="text-center text-3xl font-bold py-16">Bergabung dengan
        kami</h1>
    <div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <div class="image-container" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gambar Anda" class="w-full h-auto">
                <button>
                    <a href="{{ route('customer.register')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded left-40" style="position: absolute; bottom: 10px;">
                        Daftar Sebagai Penyewa</a>
                </button>
            </div>
        </div>
        <div>
            <div class="image-container" style="position: relative;">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Gambar Anda" class="w-full h-auto">
                <button>
                    <a href="{{ route('host.register')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded left-40" style="position: absolute; bottom: 10px;">
                        Daftar Sebagai Penyedia</a>
                </button>
            </div>
        </div>

    </div>
</div>s
<!-- fasilitas -->
<div class="mt-20 w-full">
    <h1 id="usecase" class="text-center text-3xl font-bold py-16">Sesuaikan Dengan
        <span class="text-blue-700">Kebutuhan</span>
    </h1>
    <div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach($facilities as $facility)
        <div class="max-w-sm">
            <div class="bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ Storage::url($facility->gambar)}}" alt />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base  tracking-tight text-gray-900">Category</h5>
                        <h5 class="mb-3 text-base  tracking-tight font-bold text-blue-700">{{$facility->kategori}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">{{$facility->deskripsi}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- rekomendasi -->
<div class="mt-20 w-full ">
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
        <div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                <div>
                    <div class="image-container" style="position: relative;">
                        <img src="asset/image2.svg" alt="Gambar Anda" class="w-full h-auto">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded left-4" style="position: absolute; bottom: 10px;">
                            event room
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base  tracking-tight text-blue-700 font-bold">Rp.50.000.000/Tahun</h5>

                    </a>
                    <p class="mb-3 font-normal text-black ">Sewa Kantor
                        di Sudirman Jakarta Selatan</p>
                    <p class="mb-3 font-normal text-black ">LT : 100M2 |
                        LB : 100M2 </p>
                    <p class="mb-3 font-normal text-gray-500 ">Sudirman,
                        Jakarta Selatan</p>

                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                <div>
                    <div class="image-container" style="position: relative;">
                        <img src="asset/image1.svg" alt="Gambar Anda" class="w-full h-auto">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded left-4" style="position: absolute; bottom: 10px;">
                            Meeting room
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base  tracking-tight text-blue-700 font-bold">Rp.100.000.000/Tahun</h5>

                    </a>
                    <p class="mb-3 font-normal text-black ">Sewa Kantor
                        di Sudirman Jakarta Selatan</p>
                    <p class="mb-3 font-normal text-black ">LT : 100M2 |
                        LB : 100M2 </p>
                    <p class="mb-3 font-normal text-gray-500 ">Sudirman,
                        Jakarta Selatan</p>

                </div>
            </div>
        </div>
        <div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                <div>
                    <div class="image-container" style="position: relative;">
                        <img src="asset/image3.svg" alt="Gambar Anda" class="w-full h-auto">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded left-4" style="position: absolute; bottom: 10px;">
                            Photo Shoot Room
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base  tracking-tight text-blue-700 font-bold">Rp.75.000.000/Tahun</h5>

                    </a>
                    <p class="mb-3 font-normal text-black ">Sewa Kantor
                        di Sudirman Jakarta Selatan</p>
                    <p class="mb-3 font-normal text-black ">LT : 100M2 |
                        LB : 100M2 </p>
                    <p class="mb-3 font-normal text-gray-500 ">Sudirman,
                        Jakarta Selatan</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Review -->

<div class="mt-20 w-full py-10" style="background-color: #F2F4F8;">
    <h1 id="review" class="text-center text-3xl font-bold py-10">Review</h1>
    <div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($reviews as $review)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow inline-block mb-6 mr-6">
            <div class="flex justify-center mb-5">
                <img src="asset/icon1.svg" class="flex justify-center" alt>
            </div>
            <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-900 text-center">{{$review->nama}}</h5>
            <p class="mb-5 text-center">{{$review->role}}</p>
            <p class="font-normal text-center text-gray-700">{{$review->review}}.</p>
        </div>
        @endforeach
    </div>
</div>

</div>
@endsection