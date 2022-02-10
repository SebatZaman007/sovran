<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Ecommrceedgesmall;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EcommrceedgesmallController extends Controller
{
    public function ecommrceedgesmallIndex(Request $request){
        if ($request->ajax()) {
            $data = Ecommrceedgesmall::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('ecommrceedgesmall.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('ecommrceedgesmall.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.ecommrceedgesmall.index');
    }

    public function ecommrceedgesmallCreate(){
        return view('admin.pages.ecommrceedgesmall.create');
    }

    public function ecommrceedgesmallStore(Request $request){
        Ecommrceedgesmall::create([
            'ecomrceedgesmall_name'=>$request->ecomrceedgesmall_name,
            'ecomrceedgesmall_pera'=>$request->ecomrceedgesmall_pera,
        ]);

        return redirect()->route('ecommrceedgesmall.index');
    }

    public function ecommrceedgesmallEdit($id){
        $edit=Ecommrceedgesmall::where('id',$id)->first();
        return view('admin.pages.ecommrceedgesmall.edit',compact('edit'));
    }

    public function ecommrceedgesmallUpdate(Request $request){
        $id=$request->id;
    Ecommrceedgesmall::where('id',$id)->update([
        'ecomrceedgesmall_name'=>$request->ecomrceedgesmall_name,
        'ecomrceedgesmall_pera'=>$request->ecomrceedgesmall_pera,
    ]);

    return redirect()->route('ecommrceedgesmall.index');

    }

    public function ecommrceedgesmallDelete($id){
        Ecommrceedgesmall::where('id',$id)->delete();
        return redirect()->route('ecommrceedgesmall.index');
    }
}
