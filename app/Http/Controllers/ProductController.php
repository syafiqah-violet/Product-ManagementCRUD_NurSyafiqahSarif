<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products' => $products]);
       
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'desc' => 'required',
            'desc2' => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'desc' => 'required',
            'desc2' => 'required'
        ]);

        $product -> update($data);

        return redirect(route('product.index')) -> with ('success', 'Product updated!');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index')) -> with ('success', 'Product deleted!');
    }
}
