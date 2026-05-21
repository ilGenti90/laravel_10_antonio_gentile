<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PublicController extends Controller
{
   public function homepage() {
    return view('welcome');
}
public function products() {
    return view('product.prodotti');
}
public function magazzino() {
    $products = Product::all();
    return view('product.magazzino', [
        'products' => $products
    ]);
}


}