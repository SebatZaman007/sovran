<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    public function homeIndex(Request $request){
        if ($request->ajax()) {
            $data = Home::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('home.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('home.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('home_image',function ($data){
                    if($data->home_image){
                        $url=asset(BlogImage().$data->home_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','home_image'])
                ->make(true);
        }

        return view('admin.pages.home.index');
    }

    public function homecreate(){
        return view('admin.pages.home.create');
    }

    public function homeStore(Request $request){
        if (!empty($request->home_image)) {
            $home_image = fileUpload($request['home_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Home::create([
            'home_name1'=>$request->home_name1,
            'home_name2'=>$request->home_name2,
            'home_name3'=>$request->home_name3,
            'home_name4'=>$request->home_name4,
            'home_description'=>$request->home_description,
            'home_image'=>$home_image,
        ]);

        return redirect()->route('home.index');
    }

    public function homeEdit($id){
        $edit=Home::where('id',$id)->first();
        return view('admin.pages.home.edit',compact('edit'));
    }

    public function homeUpdate(Request $request){
        $id=$request->id;
    if (!empty($request->home_image)) {
        $home_image = fileUpload($request['home_image'], BlogImage());
    } else {
        $var=Home::where('id',$id)->first();
        $home_image= $var->home_image;
    }

    Home::where('id',$id)->update([
            'home_name1'=>$request->home_name1,
            'home_name2'=>$request->home_name2,
            'home_name3'=>$request->home_name3,
            'home_name4'=>$request->home_name4,
            'home_description'=>$request->home_description,
            'home_image'=>$home_image,
    ]);

    return redirect()->route('home.index');

    }

    public function homeDelete($id){
        Home::where('id',$id)->delete();
        return redirect()->route('home.index');
    }
}
