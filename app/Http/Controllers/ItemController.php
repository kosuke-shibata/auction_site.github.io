<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index(Work $work)
    {
        return view('items/index')->with(['works' => $work->getPaginateByLimit()]);
    }
    
    public function detail(Work $work, User $user)
    {
        return view('items/work_detail')->with(['work' => $work]);
    }
    
    public function cart_in(Work $work,Cart $cart, User $user)
    {
        $cart->work_id = $work->id;
        $cart->user_id = Auth::id();
        
        $cart->save();
        
        return redirect('/cart');
    }
    
    
    
}
