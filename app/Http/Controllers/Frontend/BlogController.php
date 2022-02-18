<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Mainlogo;
use App\Models\Footerleft;
use App\Models\Footerlink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blogView(){
        $mainlogo=Mainlogo::latest()->first();
        $footerleft=Footerleft::latest()->first();
        $footerlink=Footerlink::latest()->get();
        $blog=Blog::latest()->get();
        return view('frontend.pages.blog.blog',compact('mainlogo','footerleft','footerlink','blog'));
    }
}
