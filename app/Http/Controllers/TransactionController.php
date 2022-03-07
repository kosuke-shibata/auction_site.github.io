<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\WorkImage;
use Illuminate\Support\Facades\Storage;
use App\WorkFile;

class TransactionController extends Controller
{
    public function index(Work $work, WorkImage $work_image)
    {
        return view('transaction/index')->with(['works' => $work->get()])->with(['work_images' => $work_image->get()]);
    }
    
    public function detail()
    {
        return view('transaction/work_detail');
    }
    
    public function add()
    {
        return view('transaction/create');
    }
    
    public function create(Request $request)
    {
        $work_image = new WorkImage;
        $form = $request->all();
  
        //s3アップロード開始
        $image = $request->file('image');
        // バケットの`ppublic/images`フォルダへアップロード
        $path = Storage::disk('s3')->put('/public/images', $image);
        // アップロードした画像のフルパスを取得
        $work_image->image = Storage::disk('s3')->url($path);
        $work_image->work_id = Storage::disk('s3')->// work_idを取得するための記述
  
        $work_image->save();

        return redirect('transaction/create');
    }
}
