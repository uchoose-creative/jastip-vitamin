<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    // SHOW CART
    public function index()
    {

        $carts = Cart::where('user_id', Auth::id())->get();

        return view('cart', compact('carts'));

    }

    // ADD TO CART
    public function add(int $id)
    {

        $product = Product::findOrFail($id);

        $existing = Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();

        if($existing){

            $existing->quantity += 1;

            $existing->save();

        }else{

            Cart::create([

                'user_id' => Auth::id(),

                'product_id' => $id,

                'quantity' => 1

            ]);
        }

        return redirect('/cart');
    }

    // TAMBAH QTY
    public function increase(int $id)
{
    $cart = Cart::findOrFail($id);

    $cart->quantity += 1;

    $cart->save();

    $subtotal = 0;

    $carts = Cart::where('user_id', Auth::id())->get();

    foreach($carts as $item){

        $subtotal += $item->product->price * $item->quantity;

    }

    return response()->json([

        'quantity' => $cart->quantity,

        'subtotal' => $subtotal,

        'total' => $subtotal + 20000,

        'count' => $carts->count()

    ]);
}
    // KURANG QTY
    public function decrease(int $id)
{
    $cart = Cart::findOrFail($id);

    if($cart->quantity > 1){

        $cart->quantity -= 1;

        $cart->save();
    }

    $subtotal = 0;

    $carts = Cart::where('user_id', Auth::id())->get();

    foreach($carts as $item){

        $subtotal += $item->product->price * $item->quantity;

    }

    return response()->json([

        'quantity' => $cart->quantity,

        'subtotal' => $subtotal,

        'total' => $subtotal + 20000,

        'count' => $carts->count()

    ]);
    }

    public function delete(int $id)
{

    $cart = Cart::findOrFail($id);

    $cart->delete();

    $subtotal = 0;

    $carts = Cart::where('user_id', Auth::id())->get();

    foreach($carts as $item){

        $subtotal += $item->product->price * $item->quantity;

    }

    return response()->json([

        'success' => true,

        'subtotal' => $subtotal,

        'total' => $subtotal + 20000,

        'count' => $carts->count()

    ]);
}
}