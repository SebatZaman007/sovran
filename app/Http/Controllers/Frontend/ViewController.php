<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Ecommrceedgelarge;
use App\Models\Ecommrceedgesmall;
use App\Models\Home;
use App\Models\Mainlogo;
use App\Models\Videoarearight;
use App\Models\Videoposter;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(){
        $mainlogo=Mainlogo::latest()->first();
        $home=Home::latest()->first();
        $videoposter=Videoposter::latest()->first();
        $videoarea=Videoarearight::latest()->first();
        $ecommrceedgelarge=Ecommrceedgelarge::latest()->first();
        $ecommrceedgesmall=Ecommrceedgesmall::latest()->get();
        $about=About::latest()->first();
        return view('frontend.master',compact('mainlogo','home','videoposter','videoarea','ecommrceedgelarge','ecommrceedgesmall','about'));
    }
}
