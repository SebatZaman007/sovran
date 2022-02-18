<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminBlogController extends Controller
{
    public function adminblogIndex(Request $request){
    if ($request->ajax()) {
        $data = Blog::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $btn = '<a href="' . route('adminblog.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                $btn = $btn.'<a href="' . route('adminblog.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                return $btn;
            })

            ->editColumn('blog_image',function ($data){
                if($data->blog_image){
                    $url=asset(BlogImage().$data->blog_image);
                    return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                }
                else{
                    return "no image";
                }
            })
            ->rawColumns(['action','blog_image'])
            ->make(true);
    }

    return view('admin.blog.index');
}

public function adminblogCreate(){
    return view('admin.blog.create');
}

public function adminblogStore(Request $request){
    if (!empty($request->blog_image)) {
        $blog_image = fileUpload($request['blog_image'], BlogImage());
    } else {
        return redirect()->back()->with('toast_error', __('Image is  required'));
    }

    Blog::create([
        'blog_image'=>$blog_image,
        'blog_header'=>$request->blog_header,
        'blog_link'=>$request->blog_link,
        'blog_date'=>$request->blog_date,

    ]);

    return redirect()->route('adminblog.index');
}

public function adminblogEdit($id){
    $edit=Blog::where('id',$id)->first();
    return view('admin.blog.edit',compact('edit'));
}

public function adminblogUpdate(Request $request){
    $id=$request->id;
    if (!empty($request->blog_image)) {
        $blog_image = fileUpload($request['blog_image'], BlogImage());
    } else {
        $var=Blog::where('id',$id)->first();
        $blog_image= $var->blog_image;
    }
    Blog::where('id',$id)->update([
        'blog_image'=>$blog_image,
        'blog_header'=>$request->blog_header,
        'blog_link'=>$request->blog_link,
        'blog_date'=>$request->blog_date,
    ]);

return redirect()->route('adminblog.index');

}

public function adminblogDelete($id){
    Blog::where('id',$id)->delete();
    return redirect()->route('adminblog.index');
}
}
