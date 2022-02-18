<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footerleft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FooterleftController extends Controller
{
    public function footerleftIndex(Request $request){
        if ($request->ajax()) {
            $data = Footerleft::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('footerleft.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('footerleft.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('footerleft_image',function ($data){
                    if($data->footerleft_image){
                        $url=asset(BlogImage().$data->footerleft_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','footerleft_image'])
                ->make(true);
        }

        return view('admin.pages.footerleft.index');
    }

    public function footerleftCreate(){
        return view('admin.pages.footerleft.create');
    }

    public function footerleftStore(Request $request){
        if (!empty($request->footerleft_image)) {
            $footerleft_image = fileUpload($request['footerleft_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Footerleft::create([
            'footerleft_image'=>$footerleft_image,
            'footerleft_title'=>$request->footerleft_title
        ]);

        return redirect()->route('footerleft.index');
    }

    public function footerleftEdit($id){
        $edit=Footerleft::where('id',$id)->first();
        return view('admin.pages.footerleft.edit',compact('edit'));
    }

    public function footerleftUpdate(Request $request){
        $id=$request->id;
    if (!empty($request->footerleft_image)) {
        $footerleft_image = fileUpload($request['footerleft_image'], BlogImage());
    } else {
        $var=Footerleft::where('id',$id)->first();
        $footerleft_image= $var->footerleft_image;
    }

    Footerleft::where('id',$id)->update([
        'footerleft_image'=>$footerleft_image,
        'footerleft_title'=>$request->footerleft_title
    ]);

    return redirect()->route('footerleft.index');

    }

    public function footerleftDelete($id){
        Footerleft::where('id',$id)->delete();
        return redirect()->route('footerleft.index');
    }
}
