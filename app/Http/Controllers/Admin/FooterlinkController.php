<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footerlink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class FooterlinkController extends Controller
{
    public function footerlinkIndex(Request $request){
        if ($request->ajax()) {
            $data =Footerlink::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('footerlink.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('footerlink.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })




                ->rawColumns(['action',])
                ->make(true);
        }

        return view('admin.pages.footerlink.index');
    }

    public function footerlinkCreate(){
        return view('admin.pages.footerlink.create');
    }

    public function footerlinkStore(Request $request){



        Footerlink::create([
            'footerlink_icon'=>$request->footerlink_icon,
            'footerlink_link'=>$request->footerlink_link
        ]);

        return redirect()->route('footerlink.index');
    }

    public function footerlinkEdit($id){
        $edit=Footerlink::where('id',$id)->first();
        return view('admin.pages.footerlink.edit',compact('edit'));
    }

    public function footerlinkUpdate(Request $request){
        $id=$request->id;


    Footerlink::where('id',$id)->update([
        'footerlink_icon'=>$request->footerlink_icon,
        'footerlink_link'=>$request->footerlink_link
    ]);

    return redirect()->route('footerlink.index');

    }

    public function footerlinkDelete($id){
        Footerlink::where('id',$id)->delete();
        return redirect()->route('footerlink.index');
    }
}
