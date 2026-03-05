<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function addCart($id)
    {
        Cart::create([
            'user_id' => 1,
            'product_id' => $id,
            'quantity' => 1
        ]);

        return redirect('/cart');
    }

    public function view()
    {
        $cart = Cart::with('product')->get();

        return view('cart',compact('cart'));
    }

}