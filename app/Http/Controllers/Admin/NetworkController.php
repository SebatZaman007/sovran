<?php

namespace App\Http\Controllers\Admin;

use App\Models\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class NetworkController extends Controller
{
    public function networkIndex(Request $request){
        if ($request->ajax()) {
            $data = Network::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('network.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('network.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('network_image',function ($data){
                    if($data->network_image){
                        $url=asset(BlogImage().$data->network_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','network_image'])
                ->make(true);
        }

        return view('admin.pages.network.index');
    }

    public function networkCreate(){
        return view('admin.pages.network.create');
    }

    public function networkStore(Request $request){
        if (!empty($request->videoposternetwork_image_image)) {
            $network_image = fileUpload($request['network_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Network::create([
            'network_image'=>$network_image,
            'network_header'=>$request->network_header,
            
        ]);

        return redirect()->route('network.index');
    }

    public function networkEdit($id){
        $edit=Network::where('id',$id)->first();
        return view('admin.pages.network.edit',compact('edit'));
    }

    public function networkyUpdate(Request $request){
        $id=$request->id;
        $var=Network::whereId($id)->first();
        if (!empty($request->network_image)) {
            $network_image = fileUpload($request['videoposter_image'], BlogImage());
        } else {
           $network_image= $var->network_image;
        }

    Network::where('id',$id)->update([
        'network_image'=>$network_image,
        'network_header'=>$request->network_header,

    ]);

    return redirect()->route('network.index');

    }

    public function networkDelete($id){
        Network::where('id',$id)->delete();
        return redirect()->route('network.index');
    }
}
