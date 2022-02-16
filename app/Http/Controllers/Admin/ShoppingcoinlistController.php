<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Shoppingcoinlist;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ShoppingcoinlistController extends Controller
{
    public function shoppingcoinlistIndex(Request $request){
        if ($request->ajax()) {
            $data =Shoppingcoinlist::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('shoppingcoinlist.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('shoppingcoinlist.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.shoppingcoinlist.index');
    }

    public function shoppingcoinlistCreate(){
        return view('admin.pages.shoppingcoinlist.create');
    }

    public function shoppingcoinlistStore(Request $request){


        Shoppingcoinlist::create([
            'shoppingcoinlist'=>$request->shoppingcoinlist
        ]);

        return redirect()->route('shoppingcoinlist.index');
    }

    public function shoppingcoinlistEdit($id){
        $edit=Shoppingcoinlist::where('id',$id)->first();
        return view('admin.pages.shoppingcoinlist.edit',compact('edit'));
    }

    public function shoppingcoinlistUpdate(Request $request){
        $id=$request->id;
    Shoppingcoinlist::where('id',$id)->update([
        'shoppingcoinlist'=>$request->shoppingcoinlist
    ]);

    return redirect()->route('shoppingcoinlist.index');

    }

    public function shoppingcoinlistDelete($id){
        Shoppingcoinlist::where('id',$id)->delete();
        return redirect()->route('shoppingcoinlist.index');
    }
}
