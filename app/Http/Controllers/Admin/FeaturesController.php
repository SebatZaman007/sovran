<?php

namespace App\Http\Controllers\Admin;

use App\Models\Features;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FeaturesController extends Controller
{
    public function featuresIndex(Request $request){
        if ($request->ajax()) {
            $data = Features::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('features.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('features.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('features_image',function ($data){
                    if($data->features_image){
                        $url=asset(BlogImage().$data->features_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','features_image'])
                ->make(true);
        }

        return view('admin.pages.features.index');
    }

    public function featuresCreate(){
        return view('admin.pages.features.create');
    }

    public function featuresStore(Request $request){
        if (!empty($request->features_image)) {
            $features_image = fileUpload($request['features_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Features::create([
            'features_image'=>$features_image,
            'features_header'=>$request->features_header,
            'features_pera'=>$request->features_pera
        ]);

        return redirect()->route('features.index');
    }

    public function featuresEdit($id){
        $edit=Features::where('id',$id)->first();
        return view('admin.pages.features.edit',compact('edit'));
    }

    public function featuresUpdate(Request $request){
        $id=$request->id;
    if (!empty($request->features_image)) {
        $features_image = fileUpload($request['features_image'], BlogImage());
    } else {
        $var=Features::where('id',$id)->first();
        $features_image= $var->features_image;
    }

    Features::where('id',$id)->update([
        'features_image'=>$features_image,
        'features_header'=>$request->features_header,
        'features_pera'=>$request->features_pera
    ]);

    return redirect()->route('features.index');

    }

    public function featuresDelete($id){
        Features::where('id',$id)->delete();
        return redirect()->route('features.index');
    }
}
