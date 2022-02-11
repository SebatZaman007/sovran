<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    public function memberIndex(Request $request){
        if ($request->ajax()) {
            $data = Member::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('member.edit', $data->id) . '"><i class="fas fa-pencil-alt"></i></a>';
                    $btn = $btn.'<a href="' . route('member.delete', $data->id) . '"><i class="fas fa-trash-alt"></i></a>';
                    return $btn;
                })

                ->editColumn('member_image',function ($data){
                    if($data->member_image){
                        $url=asset(BlogImage().$data->member_image);
                        return '<img src='.$url.' border="0" width="70" class="img-rounded" align="center" >';
                    }
                    else{
                        return "no image";
                    }
                })
                ->rawColumns(['action','member_image'])
                ->make(true);
        }
        return view('admin.pages.member.index');
       }

       public function memberCreate(){
           return view('admin.pages.member.create');
       }

       public function memberStore(Request $request){
        if (!empty($request->member_image)) {
            $member_image = fileUpload($request['member_image'], BlogImage());
        } else {
            return redirect()->back()->with('toast_error', __('Image is  required'));
        }

        Member::create([
            'member_image'=>$member_image,
            'member_header'=>$request->member_header,
            'member_title1'=>$request->member_title1,
            'member_title2'=>$request->member_title2
        ]);
        return redirect()->route('member.index');
       }

       public function memberEdit($id){
           $edit=Member::where('id',$id)->first();
           return view('admin.pages.member.edit',compact('edit'));
       }

       public function memberUpdate(Request $request){
        $id=$request->id;
        $var=Member::where('id',$id)->first();
        if (!empty($request->member_image)) {
            $member_image = fileUpload($request['member_image'], BlogImage());
        } else {

            $member_image= $var->member_image;
        }

        Member::where('id',$id)->update([
            'member_image'=>$member_image,
            'member_header'=>$request->member_header,
            'member_title1'=>$request->member_title1,
            'member_title2'=>$request->member_title2
        ]);
        return redirect()->route('member.index');
       }

       public function memberDelete($id){
           Member::where('id',$id)->delete();
           return redirect()->route('member.index');
       }
}
