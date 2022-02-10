<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Ecommrceedgelarge;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EcommrceedgelargeController extends Controller
{
    public function ecommrceedgelargeIndex(Request $request){
        if ($request->ajax()) {
            $data = Ecommrceedgelarge::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('ecommrceedgelarge.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('ecommrceedgelarge.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.ecommrceedgelarge.index');
    }

    public function ecommrceedgelargeCreate(){
        return view('admin.pages.ecommrceedgelarge.create');
    }

    public function ecommrceedgelargeStore(Request $request){
        Ecommrceedgelarge::create([
            'ecommrceedgelarge_title'=>$request->ecommrceedgelarge_title,
            'ecommrceedgelarge_pera'=>$request->ecommrceedgelarge_pera,
            'ecommrceedgelarge_link'=>$request->ecommrceedgelarge_link,
        ]);

        return redirect()->route('ecommrceedgelarge.index');
    }

    public function ecommrceedgelargeEdit($id){
        $edit=Ecommrceedgelarge::where('id',$id)->first();
        return view('admin.pages.ecommrceedgelarge.edit',compact('edit'));
    }

    public function ecommrceedgelargeUpdate(Request $request){
        $id=$request->id;
    Ecommrceedgelarge::where('id',$id)->update([
            'ecommrceedgelarge_title'=>$request->ecommrceedgelarge_title,
            'ecommrceedgelarge_pera'=>$request->ecommrceedgelarge_pera,
            'ecommrceedgelarge_link'=>$request->ecommrceedgelarge_link,
    ]);

    return redirect()->route('ecommrceedgelarge.index');

    }

    public function ecommrceedgelargeDelete($id){
        Ecommrceedgelarge::where('id',$id)->delete();
        return redirect()->route('ecommrceedgelarge.index');
    }
}
