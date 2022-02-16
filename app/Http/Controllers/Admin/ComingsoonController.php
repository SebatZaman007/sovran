<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comingsoon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ComingsoonController extends Controller
{
    public function comingsoonIndex(Request $request){
        if ($request->ajax()) {
            $data = Comingsoon::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('comingsoon.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('comingsoon.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('comingsoon_image',function ($data){
                    if($data->comingsoon_image){
                        $url=asset(BlogImage().$data->comingsoon_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','comingsoon_image'])
                ->make(true);
        }

        return view('admin.pages.comingsoon.index');
    }

    public function comingsoonCreate(){
        return view('admin.pages.comingsoon.create');
    }

    public function comingsoonStore(Request $request){
        if (!empty($request->comingsoon_image)) {
            $comingsoon_image = fileUpload($request['comingsoon_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Comingsoon::create([
            'comingsoon_title_one'=>$request->comingsoon_title_one,
            'comingsoon_title_two'=>$request->comingsoon_title_two,
            'comingsoon_title_three'=>$request->comingsoon_title_three,
            'comingsoon_image'=>$comingsoon_image,


        ]);

        return redirect()->route('comingsoon.index');
    }

    public function comingsoonEdit($id){
        $edit=Comingsoon::where('id',$id)->first();
        return view('admin.pages.comingsoon.edit',compact('edit'));
    }

    public function comingsoonUpdate(Request $request){
        $id=$request->id;
    if (!empty($request->comingsoon_image)) {
        $comingsoon_image = fileUpload($request['comingsoon_image'], BlogImage());
    } else {
        $var=Comingsoon::where('id',$id)->first();
        $comingsoon_image= $var->comingsoon_image;
    }

    Comingsoon::where('id',$id)->update([

        'comingsoon_title_one'=>$request->comingsoon_title_one,
        'comingsoon_title_two'=>$request->comingsoon_title_two,
        'comingsoon_title_three'=>$request->comingsoon_title_three,
        'comingsoon_image'=>$comingsoon_image,
    ]);

    return redirect()->route('comingsoon.index');

    }

    public function comingsoonDelete($id){
        Comingsoon::where('id',$id)->delete();
        return redirect()->route('comingsoon.index');
    }
}
