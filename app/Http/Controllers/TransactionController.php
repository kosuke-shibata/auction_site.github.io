<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\Http\Requests\EditRequest;
use App\User;
use App\Work;
use App\Cart;
use App\Order;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(Work $work)
    {
        return view('transaction/index')->with(['works' => $work->getPaginateByLimit()]);
    }
    
    public function detail(Work $work, User $user)
    {
        return view('transaction/work_detail')->with(['work' => $work]);
    }
    
    public function cart_in(Work $work,Cart $cart, User $user)
    {
        // dd($work);
        $cart->work_id = $work->id;
        $cart->user_id = Auth::id();
        
        $cart->save();
        
        // dd($cart);
        return redirect('/cart');
    }
    
    public function create(User $user)
    {
        return view('transaction/create')->with(['users' => $user->get()]);
    }
    
    public function store(WorkRequest $request, Work $work) {
        
        $image = $request->file('image_path');
        // dd($image);
        $image_path = Storage::disk('s3')->put('/images', $image, 'public');
        // dd($image_path);
        $work->image_path = Storage::disk('s3')->url($image_path);
        
        $work->user_id = Auth::id();
        
        $user_id = Auth::id();
        $input_work = $request['work'];
        // dd($request['work']);
        $work->fill($input_work);
        $work->save();
        
        
        return redirect('/create/' . $work->id);
    }
    
    public function display(Work $work) {
        
        // dd($work_file);
        return view('transaction/display')->with(['work' => $work]);
    }
    
    public function edit_create(Work $work)
    {
        return view('transaction/edit_create')->with(['work' => $work]);
    }
    
    public function update_create(WorkRequest $request , Work $work) {
        $image = $request->file('image_path');
        // dd($image);
        $image_path = Storage::disk('s3')->put('/images', $image, 'public');
        // dd($image_path);
        $work->image_path = Storage::disk('s3')->url($image_path);
        
        $work->user_id = Auth::id();
        
        $user_id = Auth::id();
        $input_work = $request['work'];
        // dd($request['work']);
        $work->fill($input_work);
        $work->save();
        
        return redirect('/create/' . $work->id);
    }
    
    public function delete(Work $work)
    {
        $work->delete();
        return redirect('/');
    }
    
    public function myprofile(User $user, Work $work) {
        return view('transaction/myprofile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()]);
    }
    
    public function profile(User $user, Work $work) {
        // dd($work);
        return view('transaction/profile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()]);
    }
    
    public function cart(Cart $cart) {
        // dd($user);
        $user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $user_id)->first();
        
        return view('transaction/cart')->with(['cart' => $cart]);
    }
    
    public function order_in(Order $order) {
        
        $order->user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $order->user_id)->first();
        $order->work_id = $cart->work_id;
        
        $order->save();
        
        return redirect('/order/' . $order->user_id);
    }
    
    public function order(Order $order, $user_id, User $user, Work $work) {
        $user_id = Auth::id();
        $order = \App\Order::where('user_id', $user_id)->first();
        
        return view('transaction/order')->with(['order' => $order]);
    }
    
    public function order_decision_in(Order $order) {
        // dd($order);
        $order->user_id = Auth::id();
        $cart = \App\Cart::where('user_id', $order->user_id)->first();
        $order->work_id = $cart->work_id;
        // dd($order);
        return redirect('/order/' . $order->user_id . '/decision');
    }
    
    public function order_decision() {
        $user_id = Auth::id();
        $order = \App\Order::where('user_id', $user_id)->first();
        
        return view('transaction/order_decision')->with(['order' => $order]);
    }
    
    public function edit(User $user) {
        return view('transaction/edit')->with(['user' => $user]);
    }
    
    public function update(EditRequest $request, User $user) {
        
        // dd($request['image_path']);
        // $form = $request->all();
        // $image = $request->file('image_path');
        // dd($image);
        // $image_path = Storage::disk('s3')->put('/prifile/images', $image, '$image', 'public');
        // dd($image_path);
        // $user->image_path = Storage::disk('s3')->url($image_path);
        // dd($request['image_path']);
        $image = $request->file('image_path');
        // dd($image);
        $image_path = Storage::disk('s3')->put('/profile/images', $image, '$image', 'public');
        // dd($image_path);
        $user->image_path =  Storage::disk('s3')->url($image_path);
        
        $input_user = $request->only(['name', 'introduce', 'portfolio', 'sns']);
        $user->fill($input_user);
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
    
    public function edit_credit(User $user) {
        
        return view('transaction/edit_credit')->with(['user' => $user]);
    }
    
    public function update_credit(Request $request, User $user) {
        $user->credit = $request->input('credit');
       $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
    
    public function edit_login(User $user) {
        return view('transaction/edit_email&password')->with(['user' => $user]);
    }
    
    public function update_login(Request $request, User $user) {
        $input_user = $request->only(['email', 'password', 'password_confirmation']);
        $user->fill($input_user);
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
}
