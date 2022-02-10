<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Videoarearight;
use App\Http\Controllers\Controller;
use App\Models\Videoposter;
use Yajra\DataTables\Facades\DataTables;

class VideoarearightController extends Controller
{
    public function videoareaIndex(Request $request){
        if ($request->ajax()) {
            $data = Videoarearight::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('videoarea.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('videoarea.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })


                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.pages.videoarearight.index');
    }

    public function videoareaCreate(){
        return view('admin.pages.videoarearight.create');
    }

    public function videoareaStore(Request $request){


        Videoarearight::create([
            'videoarea_name'=>$request->videoarea_name,
            'videoarea_description'=>$request->videoarea_description,
            'videoarea_pera'=>$request->videoarea_pera,
        ]);

        return redirect()->route('videoarea.index');
    }

    public function videoareaEdit($id){
        $edit=Videoarearight::where('id',$id)->first();
        return view('admin.pages.videoarearight.edit',compact('edit'));
    }

    public function videoareaUpdate(Request $request){
        $id=$request->id;
    Videoarearight::where('id',$id)->update([
        'videoarea_name'=>$request->videoarea_name,
        'videoarea_description'=>$request->videoarea_description,
        'videoarea_pera'=>$request->videoarea_pera,
    ]);

    return redirect()->route('videoarea.index');

    }

    public function videoareaDelete($id){
        Videoarearight::where('id',$id)->delete();
        return redirect()->route('videoarea.index');
    }
}
