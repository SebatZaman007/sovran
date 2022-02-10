<?php

namespace App\Http\Controllers\Admin;

use App\Models\Videoposter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class VideoposterController extends Controller
{
    public function videoposterIndex(Request $request){
        if ($request->ajax()) {
            $data = Videoposter::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('videoposter.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('videoposter.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('videoposter_image',function ($data){
                    if($data->videoposter_image){
                        $url=asset(BlogImage().$data->videoposter_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','videoposter_image'])
                ->make(true);
        }

        return view('admin.pages.videoposter.index');
    }

    public function videoposterCreate(){
        return view('admin.pages.videoposter.create');
    }

    public function videoposterStore(Request $request){
        if (!empty($request->videoposter_image)) {
            $videoposter_image = fileUpload($request['videoposter_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Videoposter::create([
            'videoposter_image'=>$videoposter_image,
            'videoposter_description'=>$request->videoposter_description,
            'videoposter_videolink'=>$request->videoposter_videolink,
        ]);

        return redirect()->route('videoposter.index');
    }

    public function videopostereEdit($id){
        $edit=Videoposter::where('id',$id)->first();
        return view('admin.pages.videoposter.edit',compact('edit'));
    }

    public function videoposterUpdate(Request $request){
        $id=$request->id;
        $var=Videoposter::whereId($id)->first();
        if (!empty($request->videoposter_image)) {
            $videoposter_image = fileUpload($request['videoposter_image'], BlogImage());
        } else {
           $videoposter_image= $var->videoposter_image;
        }

    Videoposter::where('id',$id)->update([
            'videoposter_image'=>$videoposter_image,
            'videoposter_description'=>$request->videoposter_description,
            'videoposter_videolink'=>$request->videoposter_videolink,
    ]);

    return redirect()->route('videoposter.index');

    }

    public function videoposterDelete($id){
        Videoposter::where('id',$id)->delete();
        return redirect()->route('videoposter.index');
    }
}
