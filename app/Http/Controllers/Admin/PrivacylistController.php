<?php

namespace App\Http\Controllers\Admin;

use App\Models\Privacylist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PrivacylistController extends Controller
{
    public function privacylistIndex(Request $request){
        if ($request->ajax()) {
            $data =Privacylist::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('privacylist.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('privacylist.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.privacylist.index');
    }

    public function privacylistCreate(){
        return view('admin.pages.privacylist.create');
    }

    public function privacylistStore(Request $request){


        Privacylist::create([
            'privacylist'=>$request->privacylist
        ]);

        return redirect()->route('privacylist.index');
    }

    public function privacylistEdit($id){
        $edit=Privacylist::where('id',$id)->first();
        return view('admin.pages.privacylist.edit',compact('edit'));
    }

    public function privacylistUpdate(Request $request){
        $id=$request->id;
    Privacylist::where('id',$id)->update([
        'privacylist'=>$request->privacylist
    ]);

    return redirect()->route('shoppingcoinlist.index');

    }

    public function privacylistDelete($id){
        Privacylist::where('id',$id)->delete();
        return redirect()->route('privacylist.index');
    }
}
