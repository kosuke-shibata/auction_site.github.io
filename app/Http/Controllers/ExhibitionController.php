<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\User;
use App\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ExhibitionController extends Controller
{
    public function create(User $user)
    {
        return view('exhibition/create')->with(['users' => $user->get()]);
    }
    
    public function store(WorkRequest $request, Work $work) {
        
        $image = $request->file('image_path');
        $image_path = Storage::disk('s3')->put('/images', $image, 'public');
        $work->image_path = Storage::disk('s3')->url($image_path);
        
        $work->user_id = Auth::id();
        
        $user_id = Auth::id();
        $input_work = $request['work'];
        $work->fill($input_work);
        $work->save();
        
        
        return redirect('/create/' . $work->id);
    }
    
    public function display(Work $work) {
        
        return view('exhibition/display')->with(['work' => $work]);
    }
    
    public function edit_create(Work $work)
    {
        return view('exhibition/edit_create')->with(['work' => $work]);
    }
    
    public function update_create(WorkRequest $request , Work $work) {
        $image = $request->file('image_path');
        $image_path = Storage::disk('s3')->put('/images', $image, 'public');
        $work->image_path = Storage::disk('s3')->url($image_path);
        
        $work->user_id = Auth::id();
        
        $user_id = Auth::id();
        $input_work = $request['work'];
        $work->fill($input_work);
        $work->save();
        
        return redirect('/create/' . $work->id);
    }
    
    public function delete(Work $work)
    {
        $work->delete();
        return redirect('/');
    }
}
