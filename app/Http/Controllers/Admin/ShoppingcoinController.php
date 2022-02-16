<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Shoppingcoins;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ShoppingcoinController extends Controller
{
    public function shoppingcoinIndex(Request $request){
        if ($request->ajax()) {
            $data = Shoppingcoins::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('shoppingcoin.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('shoppingcoin.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('shoppingcoin_image',function ($data){
                    if($data->shoppingcoin_image){
                        $url=asset(BlogImage().$data->shoppingcoin_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','shoppingcoin_image'])
                ->make(true);
        }

        return view('admin.pages.shoppingcoin.index');
    }

    public function shoppingcoinCreate(){
        return view('admin.pages.shoppingcoin.create');
    }

    public function shoppingcoinStore(Request $request){
        if (!empty($request->shoppingcoin_image)) {
            $shoppingcoin_image = fileUpload($request['shoppingcoin_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Shoppingcoins::create([
            'shoppingcoin_image'=>$shoppingcoin_image,
            'shoppingcoin_header'=>$request->shoppingcoin_header,

        ]);

        return redirect()->route('shoppingcoin.index');
    }

    public function shoppingcoinEdit($id){
        $edit=Shoppingcoins::where('id',$id)->first();
        return view('admin.pages.shoppingcoin.edit',compact('edit'));
    }

    public function shoppingcoinUpdate(Request $request){
        $id=$request->id;
        $var=Shoppingcoins::whereId($id)->first();
        if (!empty($request->shoppingcoin_image)) {
            $shoppingcoin_image = fileUpload($request['shoppingcoin_image'], BlogImage());
        } else {
           $shoppingcoin_image= $var->shoppingcoin_image;
        }

    Shoppingcoins::where('id',$id)->update([
        'shoppingcoin_image'=>$shoppingcoin_image,
        'shoppingcoin_header'=>$request->shoppingcoin_header,


    ]);

    return redirect()->route('shoppingcoin.index');

    }

    public function shoppingcoinDelete($id){
        Shoppingcoins::where('id',$id)->delete();
        return redirect()->route('shoppingcoin.index');
    }
}
