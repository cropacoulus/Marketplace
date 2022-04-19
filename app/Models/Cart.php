<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    //, 'quantity'
    protected $fillable = ['products_id', 'users_id']; // define which field can be filled

    protected $hidden = [

    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id'); //relasi untuk menentukan berapa banyak produk yang dibeli
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id'); //relasi untuk menentukan siapa yang membeli produk
    }
}
