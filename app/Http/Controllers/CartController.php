<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart_in(Work $work, Cart $cart, User $user)
    {
        $cart->work_id = $work->id;
        $cart->user_id = Auth::id();
        
        $cart->save();
        
        return redirect('/cart');
    }
    
    public function cart() {
      
        $user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $user_id)->first();
        
        return view('cart/cart')->with(['cart' => $cart]);
    }
    
    
}
