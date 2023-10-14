<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Controllers\CustomerController;

class Host extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'phone', 'email', 'address', 'password', 'nama_toko', 'username', 'foto_host,','telp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Additional methods or relationships for the Customer model can be defined here
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_host', 'host_id', 'product_id');
    }

    public function getFotoHostAttribute($value)
    {
        return $value ? asset($value) : asset('asset\iconprofile.svg'); // Replace 'path_to_default_image' with the actual path to your default image
    }
}
    
