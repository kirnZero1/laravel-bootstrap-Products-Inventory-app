<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ProductsController extends Controller 
{
    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('auth', except: ['index']),
    //     ];
    // }

    public function index() {
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }
    public function view(Product $product)  {
        return view('products.view',['product' => $product]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Product $product, Request $request){
        $fields = $request->validate([
            "name" => "required|max:255",
            "qty" => "required|integer",
            "price" => "required|decimal:0,2",
            "description" => "nullable"
        ]);
        Product::create(['user_id' => Auth::id(), ...$fields]);

        return redirect()->route('product.index')->with('success','Successfully created a product');
    }

    public function edit(Product $product){
        Gate::authorize('modify', $product);
        return view('products.edit',['product' => $product]);
    }
    public function update(Product $product, Request $request){

        Gate::authorize('modify', $product);
        $fields = $request->validate([
            "name" => "required|max:255",
            "qty" => "required|integer",
            "price" => "required|decimal:0,2",
            "description" => "nullable"
        ]);

        $product->update($fields);

        return redirect()->route('product.index')->with('sucess','Successfully updated a product.');
    }

    public function destroy(Product $product){
        Gate::authorize('modify', $product);
        $product->delete();

        return redirect()->route('product.index')->with('sucess','Successfully delete a product.');
    }
}
