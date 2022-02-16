<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Aboutcontent;
use App\Models\Comingsoon;
use App\Models\Ecommrceedgelarge;
use App\Models\Ecommrceedgesmall;
use App\Models\Home;
use App\Models\Mainlogo;
use App\Models\Marchent;
use App\Models\Member;
use App\Models\Memberfacilitylist;
use App\Models\Network;
use App\Models\Networklist;
use App\Models\Privacy;
use App\Models\Privacylist;
use App\Models\Shoppingcoinlist;
use App\Models\Shoppingcoins;
use App\Models\Videoarearight;
use App\Models\Videoposter;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(){
        $mainlogo=Mainlogo::latest()->first();
        $home=Home::latest()->first();
        $videoposter=Videoposter::latest()->first();
        $videoarea=Videoarearight::latest()->first();
        $ecommrceedgelarge=Ecommrceedgelarge::latest()->first();
        $ecommrceedgesmall=Ecommrceedgesmall::latest()->get();
        $about=About::latest()->first();
        $aboutcontent=Aboutcontent::latest()->get();
        $member=Member::latest()->first();
        $marchent=Marchent::latest()->first();
        $memberfasility=Memberfacilitylist::latest()->get();
        $networklist=Networklist::latest()->get();
        $network=Network::latest()->first();
        $shoppingcoin=Shoppingcoins::latest()->first();
        $shoppingcoinlist=Shoppingcoinlist::latest()->get();
        $privacy=Privacy::latest()->first();
        $privacylist=Privacylist::latest()->get();
        $comingsoon=Comingsoon::latest()->first();
        return view('frontend.master',compact('mainlogo','home','videoposter','videoarea','ecommrceedgelarge','ecommrceedgesmall','about','aboutcontent','member','marchent','memberfasility','network','networklist','shoppingcoin','shoppingcoinlist','privacy','privacylist','comingsoon'));
    }
}
