<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Memberfacilitylist;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MemberfaciliyController extends Controller
{
    public function memberfacilityIndex(Request $request){
        if ($request->ajax()) {
            $data = Memberfacilitylist::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('memberfacility.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('memberfacility.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.memberfacilitylist.index');
    }

    public function memberfacilityCreate(){
        return view('admin.pages.memberfacilitylist.create');
    }

    public function memberfacilityStore(Request $request){


        Memberfacilitylist::create([
            'memberfasilitylist'=>$request->memberfasilitylist
        ]);

        return redirect()->route('memberfacility.index');
    }

    public function memberfacilityEdit($id){
        $edit=Memberfacilitylist::where('id',$id)->first();
        return view('admin.pages.memberfacilitylist.edit',compact('edit'));
    }

    public function memberfacilityUpdate(Request $request){
        $id=$request->id;
    Memberfacilitylist::where('id',$id)->update([
        'memberfasilitylist'=>$request->memberfasilitylist
    ]);

    return redirect()->route('memberfacility.index');

    }

    public function memberfacilityDelete($id){
        Memberfacilitylist::where('id',$id)->delete();
        return redirect()->route('memberfacility.index');
    }
}
