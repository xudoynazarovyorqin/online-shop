<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product()
    {
        $products = Product::all();
        // dd($products);
        return view('products',compact('products'));
    }
    public function search(Request $request)
    {
        $products = Product::where('name','LIKE',"%{$request->search}%")->get();
        // dd($products);
        return view('products',compact('products'));
    }
    public function addBasket(Request $request,$id)
    {
        // dd($request);
        Product::find($id)->update([
            'role'=> '1',
        ]);
        return redirect()->route('products');

    }
    public function basket()
    {
        $products = Product::where('role', '1')->get();
        $count = $products->count();
        $cost = 0;
        foreach($products as $product)
        {
           
                $cost += $product->cost;
            
        }
        // dd($cost);
        return view('basket',compact('products','cost'));

    }
}
