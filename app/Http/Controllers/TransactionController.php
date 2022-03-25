<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\User;
use App\Work;
use App\WorkFile;
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
    
    public function add()
    {
        return view('transaction/create');
    }
    
    public function create(User $user)
    {
        // $form = $request->all();
  
        // //s3アップロード開始
        // $image = $request->file('image');
        // // バケットの`public/images`フォルダへアップロード
        // $path = Storage::disk('s3')->put('/public/images', $image);
        // // アップロードした画像のフルパスを取得
        // $work_image->image = Storage::disk('s3')->url($path);
        
        // $work_image->work_id = Storage::disk('s3')->// work_idを取得するための記述
  
        // $work_image->save();

        // return redirect('transaction/create');
        
        return view('transaction/create')->with(['users' => $user->get()]);
    }
    
    public function store(Request $request, Work $work, WorkFile $work_file) {
        
        //work_imagesのwork_idの中にworkのidを挿入する
        $form = $request->all();
        $image = $request->file('image_path');
        $image_path = Storage::disk('s3')->put('/images', $image, '$image', 'public');
        $work->image_path = Storage::disk('s3')->url($image_path);
        
        $user_id = Auth::id();
        $input_work = $request['work'];
        // dd($request['work']);
        $work->fill($input_work);
        $work->save();
        
        
        $file = $request->file('file_path');
        $file_path = Storage::disk('s3')->put('/files', $file, '$file', 'public');
        $work_file->file_path = Storage::disk('s3')->url($file_path);
        $work_file->work_id = $work->id;
        $work_file->save();
        
        
        return redirect('/create/' . $work->id);
    }
    
    public function display(Work $work, WorkFile $work_file) {
        
        // dd($work_file);
        return view('transaction/display')->with(['work' => $work, 'work_file' => $work_file->where('work_id', $work->id)->first()]);
    }
    
    public function myprofile() {
        return view('transaction/myprofile');
    }
    
    public function profile(User $user, Work $work) {
        // dd($work);
        return view('transaction/profile')->with(['user' => $user])->with(['works' => $work->where('user_id', $user->id)->get()]);
    }
    
    public function cart() {
        return view('transaction/cart');
    }
    
    public function order() {
        return view('transaction/order');
    }
    
    public function order_decision() {
        return view('transaction/order_decision');
    }
    
    public function edit(User $user) {
        return view('transaction/edit')->with(['user' => $user]);
    }
    
    public function edit_credit() {
        return view('transaction/edit_credit');
    }
    
    public function edit_login() {
        return view('transaction/edit_email&password');
    }
}
