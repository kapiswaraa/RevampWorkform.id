<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Host;
use Illuminate\Support\Facades\Auth;
class HostController extends Controller
{
    public function showLoginForm()
    {
        return view('host.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('host')->attempt($credentials)) {
            return redirect()->route('host.home');
        } else {
            return redirect()->route('host.login')->with('error', 'Password atau email salah');
        }
    }

    public function showRegistrationForm()
    {
        return view('host.register');
    }

    public function register(Request $request)
    {
        $host = Host::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Auth::guard('host')->login($host);
        return redirect()->route('host.login');
    }

    public function showProfile()
    {
        $host = Auth::guard('host')->user();
        return view('host.profile', compact('host'));
    }

    public function updateProfile(Request $request)
    {
        $host = Auth::guard('host')->user();
    
        $host->firstname = $request->input('firstname');
        $host->lastname = $request->input('lastname');
        $host->nama_toko = $request->input('nama_toko');
        $host->username = $request->input('username');
        $host->address = $request->input('address');
        $host->phone = $request->input('phone');
        $host->telp = $request->input('telp');
        $host->email = $request->input('email');
        $host->save();

        return redirect()->route('host.profile')->with('success', 'Profile updated successfully.');
    }

    public function index()
    {
        return view('host.home');
    }

    public function sendResetLink(Request $request)
    {
        $email = $request->input('email');
        $host = Host::where('email', $email)->first();
        if (!$host) {
            return view('host.forgot')->withErrors(['email' => 'Email tidak terdaftar']);
        }
            return view('host.login')->with('success', 'Reset link telah dikirim ke email Anda.');
    }

    public function showForgot()
    {
        return view('host.forgot');
    }

    public function logout(Request $request)
    {
        Auth::guard('host')->logout();
        $request->session()->invalidate();
        return redirect()->route('home')->with('success', 'You have been logged out.');
    }

    public function product()
    {
        return view('host.product');
    }

    public function productstore(Request $request)
    {
    // Validate the request
    $request->validate([
        'nama' => 'required|string|max:255',
        'informasi' => 'required|string',
        'deskripsi' => 'required|string',
        'provinsi' => 'required|string',
        'kota' => 'required|string',
        'kecamatan' => 'required|string',
        'kategori' => 'required|string',
        'harga' => 'required|integer',
        'kapasitas' => 'required|integer',
        'kamar_mandi' => 'required|integer',
        'luas_tanah' => 'required|integer',
        'luas_bangunan' => 'required|integer',
        'periode' => 'required|string',
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'foto1' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'foto2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'foto3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'foto4' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


            $imagePaths = [];
            $imageInputs = ['thumbnail', 'foto1', 'foto2', 'foto3', 'foto4'];

        foreach ($imageInputs as $imageInput) {
            if ($request->hasFile($imageInput)) {
                $image = $request->file($imageInput);
                $filename = time() . '_' . $image->getClientOriginalName();
                $imagePath = $image->storeAs('product_images', $filename, 'public');
                $imagePaths[$imageInput] = $imagePath;
            } else {
                $imagePaths[$imageInput] = null;
            }
        }
        Product::create([
        'nama' => $request->input('nama'),
        'informasi' => $request->input('informasi'),
        'deskripsi' => $request->input('deskripsi'),
        'provinsi' => $request->input('provinsi'),
        'kota' => $request->input('kota'),
        'kecamatan' => $request->input('kecamatan'),
        'kategori' => $request->input('kategori'),
        'harga' => $request->input('harga'),
        'kapasitas' => $request->input('kapasitas'),
        'kamar_mandi' => $request->input('kamar_mandi'),
        'luas_tanah' => $request->input('luas_tanah'),
        'luas_bangunan' => $request->input('luas_bangunan'),
        'periode' => $request->input('periode'),
        'thumbnail' => $imagePaths['thumbnail'],
        'foto1' => $imagePaths['foto1'],
        'foto2' => $imagePaths['foto2'],
        'foto3' => $imagePaths['foto3'],
        'foto4' => $imagePaths['foto4'],
        ]);
        return redirect()->route('last.product')->with([
        'message' => 'Product added successfully.',
        'alert-type' => 'success'
        ]);
    
    }

    public function showLastProduct()
    {
        $products = Product::take(3)->get();
        $lastProduct = Product::latest()->first();
            if (!$lastProduct) {
            return view('host.last')->with('product', null)->with('loggedInHost', null);
        }
        $loggedInHost = Auth::guard('host')->user();

        return view('host.last')->with([
            'product' => $lastProduct,
            'loggedInHost' => $loggedInHost,
            'products' => $products
        ]);
    }
}
