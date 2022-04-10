<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use App\Work;
use App\Order;
use App\PurchaseHistory;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order_in() {
        
        // $cart = \App\Cart::where('user_id', $user_id)->first();
        
        return redirect('/order');
    }
    
    public function order() {
      
        $user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $user_id)->first();
      
        // $order = \App\Order::where('user_id', $user_id)->first();
        
        
        return view('order/order')->with(['cart' => $cart]);
    }
    
    public function order_decision_in(Order $order, PurchaseHistory $purchase_history) {
      
        $order->user_id = Auth::id();
        
        $cart = \App\Cart::where('user_id', $order->user_id)->first();
        $order->work_id = $cart->work_id;
        
        $order->save();
      
        $purchase_history->user_id = Auth::id();
        
        $purchase_history->work_id = $cart->work_id;
        
        $purchase_history->save();
        
        return redirect('/order/decision/' . $order->work_id);
    }
    
    public function order_decision(Order $order, Work $work) {
        
        // dd($work);
        $user_id = Auth::id();
        // $cart = \App\Cart::where('user_id', $user_id)->first();
        $order = \App\Order::where('user_id', $user_id)->where('work_id', $work->id)->first();
        
        $cart_delete = \App\Cart::where('user_id', $user_id)->delete();
        
        return view('order/order_decision')->with(['order' => $order]);
    }
}
