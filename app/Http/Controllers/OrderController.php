<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class OrderController extends Controller
{

    public function checkout()
    {
        $cart = Cart::with('product')->get();

        return view('checkout',compact('cart'));
    }

    public function placeOrder(Request $request)
    {
        $cart = Cart::with('product')->get();

        $total = 0;

        foreach($cart as $item){
            $total += $item->product->price * $item->quantity;
        }

        $order = \App\Models\Order::create([
            'user_id'=>1,
            'total'=>$total,
            'payment_mode'=>$request->payment_mode
        ]);

        Cart::truncate();

        return redirect('/invoice/'.$order->id);
    }

}