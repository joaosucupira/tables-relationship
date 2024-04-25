<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class ProductController extends Controller
{
    // CREATE
    public function store(ProductCreateRequest $request) {
        $product = Product::create([
            'name' => $request->name,
        ]);
        return response()->json($product);        
    }

    // READ 
    public function index(){
        $products = Product::all();
        return response()->json($products);
    }
    public function findById($id){
        $product = Product::findOrFail($id);
        return response()->json($product);

    }

    // UPDATE
    public function update(ProductUpdateRequest $request) {
        $product = Product::find($request->input('id'));
        $product->name = $request->name ?? $product->name;
        $product->save();
    }

    // DELETE
    public function delete($id) {
        Product::destroy($id);
    }
}
