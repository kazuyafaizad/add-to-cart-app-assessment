<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store($id)
    {
        Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $id
        ]);
    }

    public function index()
    {
        if (!auth()->user()) {
            return "cannot open cart, please login <a href='/login'>login</a>";
        }
        $cart = Cart::leftJoin('table_products', 'product_id', 'table_products.id')->where('user_id', auth()->user()->id)->get();

        return view('cart', ['carts' => $cart]);
    }

    public function checkout()
    {
        if (!auth()->user()) {
            return "cannot open cart, please login <a href='/login'>login</a>";
        }

        return "successfully checkout";
    }
}
