<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $product = Product::with(['galleries', 'user'])->where('slug', $id)->firstOrFail(); // get product by slug

        return view('pages.detail', compact('product'));
    }

    public function add(Request $request, $id)
    {
        $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id
        ];

        if(Cart::where($data)->exists()){ // check jika produk sudah ada di cart
            $cart = Cart::where($data)->first(); // mengambil data cart berdasarkan produk yang sudah ada
            $cart->quantity += 1; // tambahkan quantity
            $cart->save(); // simpan data
        }else{
            Cart::create($data); // jika produk belum ada di cart, maka tambahkan
        }

        return redirect()->route('cart'); // redirect ke cart
    }
}
