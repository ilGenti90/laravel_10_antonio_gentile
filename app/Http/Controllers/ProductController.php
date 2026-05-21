<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function store (ProductRequest $request){
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = $request->file('img')->store('img' , 'public');

         // Handle file upload if an image is provided

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->img = $img;
        $product->save();
        return redirect()->back()->with('success', 'Prodotto inserito con successo!');
    }
}
