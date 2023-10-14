<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori', 'deskripsi', 'gambar'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_facility', 'facility_id', 'product_id');
    }
}
