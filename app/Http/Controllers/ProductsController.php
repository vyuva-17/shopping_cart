<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductsController extends Controller
{
    // Controller to load all products saved in product table for Product List Page
    public function index()
    {
        $product=Products::all();
       return view('products',compact('product'));
    }
    // Controller to load all products saved/converted to cart in product table for cart List Page
    public function cart()
    {
        $cartProduct=Products::whereRaw('cart = 1 and `order` = 0')->get();
        return view('cart',compact('cartProduct'));
    }
    // Controller to update cart flag in product table to know which product is added to cart cart List Page
    public function addToCart($id)
    {
        $UpdateDetails = Products::where('id', $id)->update(array('cart' => 1));
        return redirect()->back()->with('success', 'Product added to cart successfully!');

        if (is_null($UpdateDetails)) {
            return false;
        }
    }
    // Controller to load all products saved/ordered in product table for cart List Page
    public function order()
    {
        $orderProduct=Products::where('order', '=', 1)->get();
        return view('order',compact('orderProduct'));
    }
    // Controller to update order flag in product table to know which product is ordered from cart List Page to display in order List Page
    public function addToOrder($id)
    {
        $UpdateDetails = Products::where('id', $id)->update(array('order' => 1));
        return redirect()->back()->with('success', 'Product ordered successfully!');

        if (is_null($UpdateDetails)) {
            return false;
        }
    }

}
