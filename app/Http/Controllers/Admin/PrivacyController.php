<?php

namespace App\Http\Controllers\Admin;

use App\Models\Privacy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Print_;
use Yajra\DataTables\Facades\DataTables;

class PrivacyController extends Controller
{
    public function privacyIndex(Request $request){
        if ($request->ajax()) {
            $data = Privacy::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('privacy.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('privacy.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('privacy_image',function ($data){
                    if($data->privacy_image){
                        $url=asset(BlogImage().$data->privacy_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','privacy_image'])
                ->make(true);
        }

        return view('admin.pages.privacy.index');
    }

    public function privacyCreate(){
        return view('admin.pages.privacy.create');
    }

    public function privacyStore(Request $request){
        if (!empty($request->privacy_image)) {
            $privacy_image = fileUpload($request['privacy_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Privacy::create([
            'privacy_image'=>$privacy_image,
            'privacy_header'=>$request->privacy_header,

        ]);

        return redirect()->route('privacy.index');
    }

    public function privacyEdit($id){
        $edit=Privacy::where('id',$id)->first();
        return view('admin.pages.privacy.edit',compact('edit'));
    }

    public function privacyUpdate(Request $request){
        $id=$request->id;
        $var=Privacy::whereId($id)->first();
        if (!empty($request->privacy_image)) {
            $privacy_image = fileUpload($request['privacy_image'], BlogImage());
        } else {
           $privacy_image= $var->privacy_image;
        }

    Privacy::where('id',$id)->update([
        'privacy_image'=>$privacy_image,
        'privacy_header'=>$request->privacy_header,


    ]);

    return redirect()->route('privacy.index');

    }

    public function privacyDelete($id){
        Privacy::where('id',$id)->delete();
        return redirect()->route('privacy.index');
    }
}
