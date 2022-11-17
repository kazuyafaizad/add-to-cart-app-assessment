<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product', ['products' => product::get()]);
    }

    public function create()
    {
        return view('add_product');
    }

    public function store(Request $request)
    {
        product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        return redirect('product');
    }

    public function show($id)
    {
        return view('detail', ['product' => product::find($id)]);
    }
}
