<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store (Request $request){
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->save();
        return redirect()->back()->with('success', 'Prodotto inserito con successo!');
    }
}
