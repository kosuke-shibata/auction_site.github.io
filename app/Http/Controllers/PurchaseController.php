<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use App\Cart;
use App\Order;
use App\PurchaseHistory;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function cart() {
      
        $user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $user_id)->first();
        
        return view('purchase/cart')->with(['cart' => $cart]);
    }
    
    public function order_in(Order $order) {
        
        $order->user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $order->user_id)->first();
        $order->work_id = $cart->work_id;
        
        $order->save();
        
        return redirect('/order');
    }
    
    public function order() {
      
        $user_id = Auth::id();
        $order = \App\Order::where('user_id', $user_id)->first();
        
        return view('purchase/order')->with(['order' => $order]);
    }
    
    public function order_decision_in(Order $order, PurchaseHistory $purchase_history) {
      
        $order->user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $order->user_id)->first();
        $order->work_id = $cart->work_id;
        
        $purchase_history->user_id = Auth::id();
        $purchase_history->work_id = $cart->work_id;
        $purchase_history->save();
        
        return redirect('/order/decision');
    }
    
    public function order_decision() {
        $user_id = Auth::id();
        $work_id = 
        $order = \App\Order::where('user_id', $user_id)->first();
        
        $cart_delete = \App\Cart::where('user_id', $user_id)->delete();
        
        return view('purchase/order_decision')->with(['order' => $order]);
    }
}
