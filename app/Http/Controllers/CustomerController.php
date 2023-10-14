<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Pagination\Paginator;



use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function showLoginForm()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->route('customer.home');
        } else {
            return redirect()->route('customer.login')->with('error', 'Password atau email salah');
        }
    }

    public function showRegistrationForm()
    {
        return view('customer.register');
    }

    public function register(Request $request)
    {
        // Validation logic

        $customer = Customer::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::guard('customer')->login($customer);

        return redirect()->route('customer.login');
    }

    public function showProfile()
    {
        $customer = Auth::guard('customer')->user();

    return view('customer.profile', compact('customer'));
    }

    public function updateProfile(Request $request)
    {
        $customer = Auth::guard('customer')->user();
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->address = $request->input('address');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');

        $customer->save();

        return redirect()->route('customer.profile')->with('success', 'Profile updated successfully.');
    }

    public function index()
    {
        $products = Product::take(3)->get();
        $reviews = Review::latest()->get();
        $facilities = Facility::latest()->get();
        return view('customer.home', compact('reviews','facilities', 'products'));
    }

    public function sendResetLink(Request $request)
    {
        $email = $request->input('email');
        $customer = Customer::where('email', $email)->first();

        if (!$customer) {  
        return view('customer.forgot')->withErrors(['email' => 'Email tidak terdaftar']);
        }
        return view('customer.login')->with('success', 'Reset link telah dikirim ke email Anda.');
    }

    public function showForgot()
    {
        return view('customer.forgot');
    }

    public function showList()
    {
        $products = Product::where('verify', 1)->latest()->paginate(9);
        $reviews = Review::latest()->get();
        $facilities = Facility::latest()->get();
        return view('customer.list', compact('reviews','facilities', 'products'));
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();
        $request->session()->invalidate();
        return redirect()->route('home')->with('success', 'You have been logged out.');
    }

    public function searchProducts(Request $request)
    {
    $query = $request->input('query');

    $products = Product::where('verify', 1) // Only show verified products
                            ->where(function($q) use ($query) {
                            $q->where('nama', 'like', "%$query%")
                            ->orWhere('deskripsi', 'like', "%$query%")
                            ->orWhere('harga', 'like', "%$query%")
                            ->orWhere('informasi', 'like', "%$query%")
                            ->orWhere('kota', 'like', "%$query%")
                            ->orWhere('provinsi', 'like', "%$query%")
                            ->orWhere('kecamatan', 'like', "%$query%")
                            ->orWhere('kategori', 'like', "%$query%");
                            })
                            ->paginate(9);

    return view('customer.list', compact('products', 'query'));
    }

    public function pricesort(Request $request)
    {
    $sort = $request->query('sort', 'asc'); 

    if (!in_array($sort, ['asc', 'desc'])) {
        
    return redirect()->route('customer.list')->with('error', 'Invalid sort parameter');
    }
    $products = $this->getSortedProducts($sort);
    $reviews = Review::latest()->get();
    $facilities = Facility::latest()->get();

    return view('customer.list', compact('reviews', 'facilities', 'products'));
    }

    private function getSortedProducts($sort)
    {
    return Product::where('verify', 1) 
                    ->when($sort === 'asc', function($query) {
                    $query->orderBy('harga');
                    }, function($query) {
                    $query->orderByDesc('harga');})
                    ->latest()
                    ->paginate(9);
    }

    public function sortkategori(Request $request)
    {
    $periode = $request->input('periode');
    if ($periode === 'tahunan') {
        $products = Product::where('periode', 'like', '%tahun%')->where('verify', 1)->paginate(9);
    } elseif ($periode === 'bulanan') {
        $products = Product::where('periode', 'like', '%bulan%')->where('verify', 1)->paginate(9);
    } else {
        $products = Product::where('verify', 1)->paginate(9);
    }

    return view('customer.list', compact('products', 'periode'));}
    public function sortfasilitas(Request $request)
    {
        $fasilitas = $request->input('fasilitas');
        if ($fasilitas === 'Event Room') {
            $products = Product::where('kategori', 'like', "Event")->where('verify', 1)->paginate(9);
        } elseif ($fasilitas === 'Meeting Room') {
            $products = Product::where('kategori', 'like', "Meeting")->where('verify', 1)->paginate(9);
        } elseif ($fasilitas === 'Photo Shoot Room') {
            $products = Product::where('kategori', 'like', "Photo Shoot")->where('verify', 1)->paginate(9);
        } elseif ($fasilitas === 'Video Shoot Room') {
            $products = Product::where('kategori', 'like', "Video Shoot")->where('verify', 1)->paginate(9);
        } else {
            $products = Product::where('verify', 1)->paginate(9);
        }
        return view('customer.list', compact('products', 'fasilitas'));
    }

    public function sortLokasi(Request $request)
    {
        $lokasi = $request->input('lokasi');
        if ($lokasi === 'Jakarta') {
        $products = Product::whereIn('kota', [
            'Jakarta Selatan',
            'Jakarta Barat',
            'Jakarta Timur',
            'Jakarta Utara',
            'Jakarta Pusat'
        ])->where('verify', 1)->paginate(9);
    } elseif ($lokasi === 'Medan') {
            $products = Product::where('kota', 'like', 'Medan')
            ->orWhere('provinsi', 'like', 'Sumatera Utara')
            ->where('verify', 1)->paginate(9);
    } else {
        $products = Product::where('verify', 1)->paginate(9);
    }
    return view('customer.list', compact('products', 'lokasi'));
    }

    public function detail(Product $product)
    {
        $productrecommendation = Product::take(3)->get();
        $reviews = Review::latest()->get();
        $facilities = Facility::latest()->get();
        $product->load('hosts');
        return view('customer.detail', compact('product', 'productrecommendation'));
    }

    public function sortnearme()
    {
        $locationsOrder = [
        'Jakarta Pusat',
        'Jakarta Barat',
        'Jakarta Selatan',
        'Jakarta Utara',
        'Jakarta Timur',
        'Medan'
    ];

    $products = Product::whereIn('kota', $locationsOrder)
                        ->where('verify', 1)
                        ->orderByRaw('FIELD(kota, "'.implode('","', $locationsOrder).'")')
                        ->paginate(9);
    return view('customer.list', compact('products'));
    }


}
