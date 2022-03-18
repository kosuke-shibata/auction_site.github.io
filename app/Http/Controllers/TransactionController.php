<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use Illuminate\Support\Facades\Storage;
use App\WorkFile;
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
        $work_id_image = Auth::work()->id;
        $image = $request->file('image');
        $path_image = Storage::disk('s3')->put('/public/images', $image);
        $work_image->image = Storage::disk('s3')->url($path_image);
        $work_image->save();
        
        $work_id_file = Auth::work()->id;
        $file = $request->file('file');
        $path_file = Storage::disk('s3')->put('/public/files', $file);
        $work_file->file = Stroage::disk('s3')->url($path_file);
        $work_file->save();
        
        $user_id = Auth::id();
        $input = $request['work'];
        $work->fill($input)->save();
        
        return redirect('/create/' . $work->id);
    }
    
    public function display(Work $work) {
        return view('transaction/display')->with(['work' => $work]);
    }
    
    public function profile(User $user) {
        return view('transaction/profile')->with(['user' => $user]);
    }
    
    public function edit(User $user) {
        return view('transaction/edit')->with(['user' => $user]);
    }
}
