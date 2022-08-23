<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function index()
    {
        $prefix = Prefix::select('*')->get();

        return view('home.dashboard', ['prefix'=>$prefix]);
    }
}
