<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mainlogo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MainlogoController extends Controller
{
   public function mainlogoIndex(Request $request){
    if ($request->ajax()) {
        $data = Mainlogo::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                $btn = '<a href="' . route('mainlogo.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                $btn = $btn.'<a href="' . route('mainlogo.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                return $btn;
            })

            ->editColumn('mainlogo_image',function ($data){
                if($data->mainlogo_image){
                    $url=asset(BlogImage().$data->mainlogo_image);
                    return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                }
                else{
                    return "no image";
                }
            })
            ->rawColumns(['action','mainlogo_image'])
            ->make(true);
    }
    return view('admin.pages.mainlogo.index');
   }

   public function mainlogoCreate(){
       return view('admin.pages.mainlogo.create');
   }

   public function mainlogoStore(Request $request){
    if (!empty($request->mainlogo_image)) {
        $mainlogo_image = fileUpload($request['mainlogo_image'], BlogImage());
    } else {
        return redirect()->back()->with('toast_error', __('Image is  required'));
    }

    Mainlogo::create([
        'mainlogo_image'=>$mainlogo_image ,
        'mainlogo_name'=>$request->mainlogo_name
    ]);
    return redirect()->route('mainlogo.index');
   }

   public function mainlogoEdit($id){
       $edit=Mainlogo::where('id',$id)->first();
       return view('admin.pages.mainlogo.edit',compact('edit'));
   }

   public function mainlogoUpdate(Request $request){
    $id=$request->id;
    if (!empty($request->mainlogo_image)) {
        $mainlogo_image = fileUpload($request['mainlogo_image'], BlogImage());
    } else {
        $var=Mainlogo::where('id',$id)->first();
        $mainlogo_image= $var->mainlogo_image;
    }

    Mainlogo::where('id',$id)->update([
        'mainlogo_image'=>$mainlogo_image ,
        'mainlogo_name'=>$request->mainlogo_name
    ]);
    return redirect()->route('mainlogo.index');
   }

   public function mainlogoDelete($id){
       Mainlogo::where('id',$id)->delete();
       return redirect()->route('mainlogo.index');
   }
}
