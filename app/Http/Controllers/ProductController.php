<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // SHOW PRODUCTS
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products.index', compact('products'));
    }

    // CREATE PAGE
    public function create()
    {
        return view('admin.products.create');
    }

    // STORE PRODUCT
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image',
            'stock' => 'required',
            'status' => 'required',

        ]);

        // UPLOAD IMAGE
        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('products'), $imageName);

        Product::create([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'stock' => $request->stock,
            'status' => $request->status,

        ]);

        return redirect('/admin/products');
    }

    // DELETE PRODUCT
    public function delete(int $id)
    {

        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/admin/products');

    }
    // EDIT PAGE
public function edit(int $id)
{

    $product = Product::findOrFail($id);

    return view('admin.products.edit', compact('product'));

}

// UPDATE PRODUCT
public function update(Request $request, int $id)
{

    $product = Product::findOrFail($id);

    // cek jika upload gambar baru
    if($request->hasFile('image'))
    {

        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('products'), $imageName);

        $product->image = $imageName;

    }

    $product->name = $request->name;

    $product->description = $request->description;

    $product->price = $request->price;

    $product->status = $request->status;

    $product->save();

    return redirect('/admin/products');

    }
}