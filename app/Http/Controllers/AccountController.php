<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\User;
use App\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function myprofile(User $user, Work $work) {
        return view('accounts/myprofile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()]);
    }
    
    public function profile(User $user, Work $work) {
        return view('accounts/profile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()]);
    }
    
    public function edit_profile(User $user) {
        return view('accounts/edit_profile')->with(['user' => $user]);
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
        
        return view('accounts/edit_credit')->with(['user' => $user]);
    }
    
    public function update_credit(Request $request, User $user) {
        $user->credit = $request->input('credit');
       $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
    
    public function edit_login(User $user) {
        return view('accounts/edit_login')->with(['user' => $user]);
    }
    
    public function update_login(Request $request, User $user) {
        $input_user = $request->only(['email', 'password', 'password_confirmation']);
        $user->fill($input_user);
        $user->save();
        
        return redirect('/myprofile/' . $user->id);
    }
}
