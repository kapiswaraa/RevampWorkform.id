<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'informasi', 'provinsi', 'kota', 'kecamatan', 'harga', 'username', 'nomor_penjual',  'luas_tanah', 'luas_bangunan', 'kamar_mandi', 'periode', 'kapasitas', 'deskripsi','thumbnail', 'foto1', 'foto2', 'foto3', 'foto4', 'kategori', 'verify'
    ];

    public function hosts()
    {
        return $this->belongsToMany(Host::class, 'product_host', 'product_id', 'host_id');
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'product_facility', 'product_id', 'facility_id');
    }

    public function getimageAttribute($value)
    {
        return $value ? asset($value) : asset('asset\imgnotfound.png'); // Replace 'path_to_default_image' with the actual path to your default image
    }

    protected static function booted()
    {
        // Set the default value for 'verify' column
        static::creating(function ($product) {
            $product->verify = 0; // Set the default value to 0
        });
    }
}
