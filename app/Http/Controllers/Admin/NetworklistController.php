<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Networklist;
use Yajra\DataTables\Facades\DataTables;

class NetworklistController extends Controller
{
    public function networklistIndex(Request $request){
        if ($request->ajax()) {
            $data =Networklist::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('networklist.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('networklist.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.networklist.index');
    }

    public function networklistCreate(){
        return view('admin.pages.networklist.create');
    }

    public function networklistStore(Request $request){


        Networklist::create([
            'networklist'=>$request->networklist
        ]);

        return redirect()->route('networklist.index');
    }

    public function networklistEdit($id){
        $edit=Networklist::where('id',$id)->first();
        return view('admin.pages.networklist.edit',compact('edit'));
    }

    public function networklistyUpdate(Request $request){
        $id=$request->id;
    Networklist::where('id',$id)->update([
        'networklist'=>$request->networklist
    ]);

    return redirect()->route('networklist.index');

    }

    public function networklistDelete($id){
        Networklist::where('id',$id)->delete();
        return redirect()->route('networklist.index');
    }
}
