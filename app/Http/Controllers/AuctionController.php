<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class AuctionController extends Controller
{
    public function index(Work $work)
    {
        return $work->get();
    }
}
