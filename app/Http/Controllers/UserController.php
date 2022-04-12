<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User;
use App\Work;
use App\PurchaseHistory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function myprofile(User $user, Work $work, PurchaseHistory $purchase_history) { 
        // dd($user->id);
       
        return view('users/myprofile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()])->with(['purchase_historys' => $purchase_history->where('user_id', $user->id)->get()]);
        
    }
    
    public function profile(User $user, Work $work, PurchaseHistory $purchase_history) {
        return view('users/profile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()])->with(['purchase_historys' => $purchase_history->where('user_id', $user->id)->get()]);
    }
    
    public function edit_profile(User $user) {
        
        $login_user = Auth::user();
        if($login_user->can('edit', $user)){
          return view('users/edit')->with(['user' => $user]);
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }
    
    public function update_profile(EditRequest $request, User $user) {
        
        $image = $request->file('image_path');
        $image_path = Storage::disk('s3')->put('/profile/images', $image, '$image', 'public');
        $user->image_path =  Storage::disk('s3')->url($image_path);
        
        $input_user = $request->only(['name', 'introduce', 'portfolio', 'sns']);
        $user->fill($input_user);
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
    
    public function edit_credit(User $user) {
        
        return view('users/edit_credit')->with(['user' => $user]);
    }
    
    public function update_credit(Request $request, User $user) {
        $user->credit = $request->input('credit');
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
    
    public function edit_login(User $user) {
        return view('users/edit_login')->with(['user' => $user]);
    }
    
    public function update_login(Request $request, User $user) {
        $input_user = $request->only(['email', 'password', 'password_confirmation']);
        $user->fill($input_user);
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
}
