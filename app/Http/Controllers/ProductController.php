<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    
    public function store (ProductRequest $request){
        // $name = $request->name;
        // $description = $request->description;
        // $price = $request->price;
        // $img = $request->hasFile('img')
        //     ? $request->file('img')->store('img', 'public')
        //     : 'img/default.jpg';

         

        // $product = new Product();
        // $product->name = $name;
        // $product->description = $description;
        // $product->price = $price;
        // $product->img = $img;
        // $product->save();

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::user()->id,
        ]);
        if ($request->file('img')) {
            $product->img = $request->file('img')->store('img', 'public');
            $product->save();
        }
        return redirect()->back()->with('success', 'Prodotto ' . $request->name . '   inserito con successo!');
    }
}
