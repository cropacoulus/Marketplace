<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carts = Cart::with(['product.galleries','user'])
                        ->where('users_id', Auth::user()->id)
                        ->get();

        return view('pages.cart', compact('carts'));
    }

    public function cartIncrement(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->quantity += 1;
        $cart->save();

        return redirect()->route('cart');
    }

    public function cartDecrement(Request $request, $id)
    {
        $cart = Cart::find($id);
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        }

        return redirect()->route('cart');
    }

    public function delete(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('cart');
    }
}
