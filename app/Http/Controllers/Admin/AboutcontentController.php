<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aboutcontent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AboutcontentController extends Controller
{
    public function aboutcontentIndex(Request $request){
        if ($request->ajax()) {
            $data = Aboutcontent::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('aboutcontent.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('aboutcontent.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.aboutcontent.index');
    }

    public function aboutcontentCreate(){
        return view('admin.pages.aboutcontent.create');
    }

    public function aboutcontentStore(Request $request){
        Aboutcontent::create([
            'aboutcontent_name'=>$request->aboutcontent_name,
            'aboutcontent_pera'=>$request->aboutcontent_pera
        ]);

        return redirect()->route('aboutcontent.index');
    }

    public function aboutcontentEdit($id){
        $edit=Aboutcontent::where('id',$id)->first();
        return view('admin.pages.aboutcontent.edit',compact('edit'));
    }

    public function aboutcontentUpdate(Request $request){
        $id=$request->id;
    Aboutcontent::where('id',$id)->update([
        'aboutcontent_name'=>$request->aboutcontent_name,
        'aboutcontent_pera'=>$request->aboutcontent_pera
    ]);

    return redirect()->route('aboutcontent.index');

    }

    public function aboutcontentDelete($id){
        Aboutcontent::where('id',$id)->delete();
        return redirect()->route('aboutcontent.index');
    }
}
