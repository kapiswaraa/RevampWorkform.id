@extends('layouts.landing')

@section('content')
<!-- fasilitas -->
<h1 id="kategori" class="text-center text-3xl font-bold py-16">Sesuaikan Dengan
    <span class="text-blue-700">Kebutuhan</span>
</h1>

<div class="max-w-screen-xl mx-auto my-auto grid grid-cols-1 md:grid-cols-4 gap-6">
    @foreach($facilities as $facility)
    <div class="max-w-sm">
        <div class="bg-white border border-gray-200 rounded-lg shadow">
            <a href="{{ route('customer.list')}}">
                <img class="rounded-t-lg" src="{{ Storage::url($facility->gambar)}}" alt />
            </a>
            <div class="p-5">
                <a href="{{ route('customer.list')}}">
                    <h5 class="mb-1 text-base tracking-tight text-gray-900">Category</h5>
                    <h5 class="mb-3 text-base tracking-tight font-bold text-blue-700">{{$facility->kategori}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 ">{{$facility->deskripsi}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- rekomendasi -->
<div class="mt-20 w-full " id="rekomendasi">
    <div class="max-w-screen-xl my-auto mx-auto grid grid-cols-1 md:grid-cols-3">
        <div class="text-start">
            <h1 class="md:text-3xl text-xl font-bold">Rekomendasi untukmu</h1>
        </div>
        <div></div>
        <div class="text-start md:text-end">
            <a href="{{route('customer.list')}}" class="text-base font-bold text-blue-700 underline">lihat selengkapnya</a>
        </div>
    </div>

    <div class="max-w-screen-xl mx-auto my-auto pt-14 grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="image-container" style="position: relative;">
                <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">
                    <img src="{{ Storage::url($product->thumbnail)}}" alt="Gambar Anda" class="custom-image">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs font-bold py-2 px-4 rounded absolute bottom-4 left-4">
                        {{$product->kategori}}
                    </button>
            </div>

            <div class="p-5">
                <a href="{{ route('customer.product.detail', ['product' => $product->id]) }}">
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

<!-- Review -->
<div id="review" class="mt-20 w-full py-10" style="background-color: #F2F4F8;">
    <h1 class="text-center text-3xl font-bold py-10">Review</h1>
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
@endsection