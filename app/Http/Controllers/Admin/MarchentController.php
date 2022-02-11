<?php

namespace App\Http\Controllers\Admin;

use App\Models\Marchent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MarchentController extends Controller
{
    public function marchentIndex(Request $request){
        if ($request->ajax()) {
            $data = Marchent::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('marchent.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('marchent.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('marchent_image',function ($data){
                    if($data->marchent_image){
                        $url=asset(BlogImage().$data->marchent_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','marchent_image'])
                ->make(true);
        }
        return view('admin.pages.marchent.index');
       }

       public function marchentCreate(){
           return view('admin.pages.marchent.create');
       }

       public function marchentStore(Request $request){
        if (!empty($request->marchent_image)) {
            $marchent_image = fileUpload($request['marchent_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Marchent::create([
            'marchent_image'=>$marchent_image,
            'marchent_header'=>$request->marchent_header,
            'marchent_title1'=>$request->marchent_title1,
            'marchent_title2'=>$request->marchent_title2
        ]);
        return redirect()->route('marchent.index');
       }

       public function marchentEdit($id){
           $edit=Marchent::where('id',$id)->first();
           return view('admin.pages.marchent.edit',compact('edit'));
       }

       public function marchentUpdate(Request $request){
        $id=$request->id;
        $var=Marchent::where('id',$id)->first();
        if (!empty($request->marchent_image)) {
            $marchent_image = fileUpload($request['marchent_image'], BlogImage());
        } else {

            $marchent_image= $var->marchent_image;
        }

        Marchent::where('id',$id)->update([
            'marchent_image'=>$marchent_image,
            'marchent_header'=>$request->marchent_header,
            'marchent_title1'=>$request->marchent_title1,
            'marchent_title2'=>$request->marchent_title2
        ]);
        return redirect()->route('marchent.index');
       }

       public function marchentDelete($id){
           Marchent::where('id',$id)->delete();
           return redirect()->route('marchent.index');
       }
}
