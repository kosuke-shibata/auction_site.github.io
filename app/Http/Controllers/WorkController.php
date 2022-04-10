<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\User;
use App\Work;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index(Work $work)
    {
        return view('works/index')->with(['works' => $work->getPaginateByLimit()]);
    }
    
    public function detail(Work $work, User $user)
    {
        return view('works/work_detail')->with(['work' => $work]);
    }
    
}
