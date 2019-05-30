<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class SessionController extends Controller
{

    public function cart(Request $request){
        if(!$request->session()->has('products')) $request->session()->put('products', []);
        
        $sp = DB::table('products')->whereIn('id', $request->session()->get('products'))->get();

        return view('shopping_cart', ['sproducts' => $sp]);
    }

    public function addToCart(Request $request, $id){      
        $products = [];
        if(!$request->session()->has('products'))        
            $request->session()->put('products', $products);
        else
        $products = $request->session()->get('products');

        
        
        if(in_array($id, $products)){ 
            return redirect()->back()->with('error', 'Este produto já esta no carrinho!');      
        }

        $request->session()->push('products', $id);

        return redirect()->back()->with('success', 'Produto adicionado no carrinho!');
    }

    public function removeToCart(Request $request, $id){
        $products = $request->session()->get('products');

        if(count($products) > 0){
            // return $products;
            $key = array_search($id, $products);
            if($key != null || $key == 0) unset($products[$key]);
            else return redirect()->back()->with('error', 'Este produto não foi encontrado.');
        }

        $request->session()->put('products', $products);

        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }
}
