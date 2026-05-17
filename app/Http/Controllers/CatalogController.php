<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(Request $request)
    {

    $search = $request->search;

    $products = Product::when($search, function($query) use ($search){

        $query->where('name', 'like', '%' . $search . '%')
              ->orWhere('description', 'like', '%' . $search . '%');

    })->get();

    return view('catalog', compact('products'));
}
}