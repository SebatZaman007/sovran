<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mainlogo;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(){
        $mainlogo=Mainlogo::latest()->first();
        return view('frontend.master',compact('mainlogo'));
    }
}
