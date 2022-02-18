<?php

use App\Http\Controllers\Admin\AboutcontentController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ComingsoonController;
use App\Http\Controllers\Admin\EcommrceedgelargeController;
use App\Http\Controllers\Admin\EcommrceedgesmallController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\FooterleftController;
use App\Http\Controllers\Admin\FooterlinkController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\JoinusController;
use App\Http\Controllers\Admin\MainlogoController;
use App\Http\Controllers\Admin\MarchentController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberfaciliyController;
use App\Http\Controllers\Admin\NetworkController;
use App\Http\Controllers\Admin\NetworklistController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\PrivacylistController;
use App\Http\Controllers\Admin\ShoppingcoinController;
use App\Http\Controllers\Admin\ShoppingcoinlistController;
use App\Http\Controllers\Admin\VideoarearightController;
use App\Http\Controllers\Admin\VideoposterController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ViewController;
use App\Models\About;
use Illuminate\Support\Facades\Route;

//for dashboard

Route::get('/login',[AdminController::class,'login'])->name('login');

//for-mainlogo

Route::group(['prefix' => 'admin'], function() {
   Route::get('mainlogo-index',[MainlogoController::class,'mainlogoIndex'])->name('mainlogo.index');
   Route::get('mainlogo-create',[MainlogoController::class,'mainlogoCreate'])->name('mainlogo.create');
   Route::post('mainlogo-store',[MainlogoController::class,'mainlogoStore'])->name('mainlogo.store');
   Route::get('mainlogo-edit/{id}',[MainlogoController::class,'mainlogoEdit'])->name('mainlogo.edit');
   Route::post('mainlogo-update',[MainlogoController::class,'mainlogoUpdate'])->name('mainlogo.update');
   Route::get('mainlogo-delete/{id}',[MainlogoController::class,'mainlogoDelete'])->name('mainlogo.delete');
});

//

//for-home-controller


Route::group(['prefix' => 'admin'], function() {
    Route::get('home-index',[HomeController::class,'homeIndex'])->name('home.index');
    Route::get('home-create',[HomeController::class,'homeCreate'])->name('home.create');
    Route::post('home-store',[HomeController::class,'homeStore'])->name('home.store');
    Route::get('home-edit/{id}',[HomeController::class,'homeEdit'])->name('home.edit');
    Route::post('home-update',[HomeController::class,'homeUpdate'])->name('home.update');
    Route::get('home-delete/{id}',[HomeController::class,'homeDelete'])->name('home.delete');
 });

 //

 //for-videoposter

 Route::group(['prefix' => 'admin'], function() {
    Route::get('videoposter-index',[VideoposterController::class,'videoposterIndex'])->name('videoposter.index');
    Route::get('videoposter-create',[VideoposterController::class,'videoposterCreate'])->name('videoposter.create');
    Route::post('videoposter-store',[VideoposterController::class,'videoposterStore'])->name('videoposter.store');
    Route::get('videoposter-edit/{id}',[VideoposterController::class,'videopostereEdit'])->name('videoposter.edit');
    Route::post('videoposter-update',[VideoposterController::class,'videoposterUpdate'])->name('videoposter.update');
    Route::get('videoposter-delete/{id}',[VideoposterController::class,'videoposterDelete'])->name('videoposter.delete');
 });

 //

 //for-videoarearight
 Route::group(['prefix' => 'admin'], function() {
    Route::get('videoarea-index',[VideoarearightController::class,'videoareaIndex'])->name('videoarea.index');
    Route::get('videoarea-create',[VideoarearightController::class,'videoareaCreate'])->name('videoarea.create');
    Route::post('videoarea-store',[VideoarearightController::class,'videoareaStore'])->name('videoarea.store');
    Route::get('videoarea-edit/{id}',[VideoarearightController::class,'videoareaEdit'])->name('videoarea.edit');
    Route::post('videoarea-update',[VideoarearightController::class,'videoareaUpdate'])->name('videoarea.update');
    Route::get('videoarea-delete/{id}',[VideoarearightController::class,'videoareaDelete'])->name('videoarea.delete');
 });

 //

 //for-ecommrceedge large

 Route::group(['prefix' => 'admin'], function() {
    Route::get('ecommrceedgelarge-index',[EcommrceedgelargeController::class,'ecommrceedgelargeIndex'])->name('ecommrceedgelarge.index');
    Route::get('ecommrceedgelarge-create',[EcommrceedgelargeController::class,'ecommrceedgelargeCreate'])->name('ecommrceedgelarge.create');
    Route::post('ecommrceedgelarge-store',[EcommrceedgelargeController::class,'ecommrceedgelargeStore'])->name('ecommrceedgelarge.store');
    Route::get('ecommrceedgelarge-edit/{id}',[EcommrceedgelargeController::class,'ecommrceedgelargeEdit'])->name('ecommrceedgelarge.edit');
    Route::post('ecommrceedgelarge-update',[EcommrceedgelargeController::class,'ecommrceedgelargeUpdate'])->name('ecommrceedgelarge.update');
    Route::get('ecommrceedgelarge-delete/{id}',[EcommrceedgelargeController::class,'ecommrceedgelargeDelete'])->name('ecommrceedgelarge.delete');
 });

 //

  //for-ecommrceedge small

  Route::group(['prefix' => 'admin'], function() {
    Route::get('ecommrceedgesmall-index',[EcommrceedgesmallController::class,'ecommrceedgesmallIndex'])->name('ecommrceedgesmall.index');
    Route::get('ecommrceedgesmall-create',[EcommrceedgesmallController::class,'ecommrceedgesmallCreate'])->name('ecommrceedgesmall.create');
    Route::post('ecommrceedgesmall-store',[EcommrceedgesmallController::class,'ecommrceedgesmallStore'])->name('ecommrceedgesmall.store');
    Route::get('ecommrceedgesmall-edit/{id}',[EcommrceedgesmallController::class,'ecommrceedgesmallEdit'])->name('ecommrceedgesmall.edit');
    Route::post('ecommrceedgesmall-update',[EcommrceedgesmallController::class,'ecommrceedgesmallUpdate'])->name('ecommrceedgesmall.update');
    Route::get('ecommrceedgesmall-delete/{id}',[EcommrceedgesmallController::class,'ecommrceedgesmallDelete'])->name('ecommrceedgesmall.delete');
 });

 //

 //for-about
 Route::group(['prefix' => 'admin'], function() {
    Route::get('about-index',[AboutController::class,'aboutIndex'])->name('about.index');
    Route::get('about-create',[AboutController::class,'aboutCreate'])->name('about.create');
    Route::post('about-store',[AboutController::class,'aboutStore'])->name('about.store');
    Route::get('about-edit/{id}',[AboutController::class,'aboutEdit'])->name('about.edit');
    Route::post('about-update',[AboutController::class,'aboutUpdate'])->name('about.update');
    Route::get('about-delete/{id}',[AboutController::class,'aboutDelete'])->name('about.delete');
 });

 //

 //for aboutcontent


 Route::group(['prefix' => 'admin'], function() {
    Route::get('aboutcontent-index',[AboutcontentController::class,'aboutcontentIndex'])->name('aboutcontent.index');
    Route::get('aboutcontent-create',[AboutcontentController::class,'aboutcontentCreate'])->name('aboutcontent.create');
    Route::post('aboutcontent-store',[AboutcontentController::class,'aboutcontentStore'])->name('aboutcontent.store');
    Route::get('aboutcontent-edit/{id}',[AboutcontentController::class,'aboutcontentEdit'])->name('aboutcontent.edit');
    Route::post('aboutcontent-update',[AboutcontentController::class,'aboutcontentUpdate'])->name('aboutcontent.update');
    Route::get('aboutcontent-delete/{id}',[AboutcontentController::class,'aboutcontentDelete'])->name('aboutcontent.delete');
 });

 //

 //for-member

 Route::group(['prefix' => 'admin'], function() {
    Route::get('member-index',[MemberController::class,'memberIndex'])->name('member.index');
    Route::get('member-create',[MemberController::class,'memberCreate'])->name('member.create');
    Route::post('member-store',[MemberController::class,'memberStore'])->name('member.store');
    Route::get('member-edit/{id}',[MemberController::class,'memberEdit'])->name('member.edit');
    Route::post('member-update',[MemberController::class,'memberUpdate'])->name('member.update');
    Route::get('member-delete/{id}',[MemberController::class,'memberDelete'])->name('member.delete');
 });

 //

 //for-marchent

 Route::group(['prefix' => 'admin'], function() {
    Route::get('marchent-index',[MarchentController::class,'marchentIndex'])->name('marchent.index');
    Route::get('marchent-create',[MarchentController::class,'marchentCreate'])->name('marchent.create');
    Route::post('marchent-store',[MarchentController::class,'marchentStore'])->name('marchent.store');
    Route::get('marchent-edit/{id}',[MarchentController::class,'marchentEdit'])->name('marchent.edit');
    Route::post('marchent-update',[MarchentController::class,'marchentUpdate'])->name('marchent.update');
    Route::get('marchent-delete/{id}',[MarchentController::class,'marchentDelete'])->name('marchent.delete');
 });
//

//for mamberfacility table

Route::group(['prefix' => 'admin'], function() {
    Route::get('memberfacility-index',[MemberfaciliyController::class,'memberfacilityIndex'])->name('memberfacility.index');
    Route::get('memberfacility-create',[MemberfaciliyController::class,'memberfacilityCreate'])->name('memberfacility.create');
    Route::post('memberfacility-store',[MemberfaciliyController::class,'memberfacilityStore'])->name('memberfacility.store');
    Route::get('memberfacility-edit/{id}',[MemberfaciliyController::class,'memberfacilityEdit'])->name('memberfacility.edit');
    Route::post('memberfacility-update',[MemberfaciliyController::class,'memberfacilityUpdate'])->name('memberfacility.update');
    Route::get('memberfacility-delete/{id}',[MemberfaciliyController::class,'memberfacilityDelete'])->name('memberfacility.delete');
 });

 //

 //for-network

 Route::group(['prefix' => 'admin'], function() {
    Route::get('network-index',[NetworkController::class,'networkIndex'])->name('network.index');
    Route::get('network-create',[NetworkController::class,'networkCreate'])->name('network.create');
    Route::post('network-store',[NetworkController::class,'networkStore'])->name('network.store');
    Route::get('network-edit/{id}',[NetworkController::class,'networkEdit'])->name('network.edit');
    Route::post('network-update',[NetworkController::class,'networkyUpdate'])->name('network.update');
    Route::get('network-delete/{id}',[NetworkController::class,'networkDelete'])->name('network.delete');
 });
//

//for-neworklist

Route::group(['prefix' => 'admin'], function() {
    Route::get('networklist-index',[NetworklistController::class,'networklistIndex'])->name('networklist.index');
    Route::get('networklist-create',[NetworklistController::class,'networklistCreate'])->name('networklist.create');
    Route::post('networklist-store',[NetworklistController::class,'networklistStore'])->name('networklist.store');
    Route::get('networklist-edit/{id}',[NetworklistController::class,'networklistEdit'])->name('networklist.edit');
    Route::post('networklist-update',[NetworklistController::class,'networklistyUpdate'])->name('networklist.update');
    Route::get('networklist-delete/{id}',[NetworklistController::class,'networklistDelete'])->name('networklist.delete');
 });

 //

 //for shoppingcontroller

 Route::group(['prefix' => 'admin'], function() {
    Route::get('shoppingcoin-index',[ShoppingcoinController::class,'shoppingcoinIndex'])->name('shoppingcoin.index');
    Route::get('shoppingcoin-create',[ShoppingcoinController::class,'shoppingcoinCreate'])->name('shoppingcoin.create');
    Route::post('shoppingcoin-store',[ShoppingcoinController::class,'shoppingcoinStore'])->name('shoppingcoin.store');
    Route::get('shoppingcoin-edit/{id}',[ShoppingcoinController::class,'shoppingcoinEdit'])->name('shoppingcoin.edit');
    Route::post('shoppingcoin-update',[ShoppingcoinController::class,'shoppingcoinUpdate'])->name('shoppingcoin.update');
    Route::get('shoppingcoin-delete/{id}',[ShoppingcoinController::class,'shoppingcoinDelete'])->name('shoppingcoin.delete');
 });
 //

 //for shoppingcoinlist
 Route::group(['prefix' => 'admin'], function() {
    Route::get('shoppingcoinlist-index',[ShoppingcoinlistController::class,'shoppingcoinlistIndex'])->name('shoppingcoinlist.index');
    Route::get('shoppingcoinlist-create',[ShoppingcoinlistController::class,'shoppingcoinlistCreate'])->name('shoppingcoinlist.create');
    Route::post('shoppingcoinlist-store',[ShoppingcoinlistController::class,'shoppingcoinlistStore'])->name('shoppingcoinlist.store');
    Route::get('shoppingcoinlist-edit/{id}',[ShoppingcoinlistController::class,'shoppingcoinlistEdit'])->name('shoppingcoinlist.edit');
    Route::post('shoppingcoinlist-update',[ShoppingcoinlistController::class,'shoppingcoinlistUpdate'])->name('shoppingcoinlist.update');
    Route::get('shoppingcoinlist-delete/{id}',[ShoppingcoinlistController::class,'shoppingcoinlistDelete'])->name('shoppingcoinlist.delete');
 });
//

//for privacy
Route::group(['prefix' => 'admin'], function() {
    Route::get('privacy-index',[PrivacyController::class,'privacyIndex'])->name('privacy.index');
    Route::get('privacy-create',[PrivacyController::class,'privacyCreate'])->name('privacy.create');
    Route::post('privacy-store',[PrivacyController::class,'privacyStore'])->name('privacy.store');
    Route::get('privacy-edit/{id}',[PrivacyController::class,'privacyEdit'])->name('privacy.edit');
    Route::post('privacy-update',[PrivacyController::class,'privacyUpdate'])->name('privacy.update');
    Route::get('privacy-delete/{id}',[PrivacyController::class,'privacyDelete'])->name('privacy.delete');
 });

 //

 //For privacylist
 Route::group(['prefix' => 'admin'], function() {
    Route::get('privacylist-index',[PrivacylistController::class,'privacylistIndex'])->name('privacylist.index');
    Route::get('privacylist-create',[PrivacylistController::class,'privacylistCreate'])->name('privacylist.create');
    Route::post('privacylist-store',[PrivacylistController::class,'privacylistStore'])->name('privacylist.store');
    Route::get('privacylist-edit/{id}',[PrivacylistController::class,'privacylistEdit'])->name('privacylist.edit');
    Route::post('privacylist-update',[PrivacylistController::class,'privacylistUpdate'])->name('privacylist.update');
    Route::get('privacylist-delete/{id}',[PrivacylistController::class,'privacylistDelete'])->name('privacylist.delete');
 });
//

//for comingsoon

Route::group(['prefix' => 'admin'], function() {
    Route::get('comingsoon-index',[ComingsoonController::class,'comingsoonIndex'])->name('comingsoon.index');
    Route::get('comingsoon-create',[ComingsoonController::class,'comingsoonCreate'])->name('comingsoon.create');
    Route::post('comingsoon-store',[ComingsoonController::class,'comingsoonStore'])->name('comingsoon.store');
    Route::get('comingsoon-edit/{id}',[ComingsoonController::class,'comingsoonEdit'])->name('comingsoon.edit');
    Route::post('comingsoon-update',[ComingsoonController::class,'comingsoonUpdate'])->name('comingsoon.update');
    Route::get('comingsoon-delete/{id}',[ComingsoonController::class,'comingsoonDelete'])->name('comingsoon.delete');
 });

 //

 //for joinus

 Route::group(['prefix' => 'admin'], function() {
    Route::get('joinus-index',[JoinusController::class,'joinusIndex'])->name('joinus.index');
    Route::get('joinus-create',[JoinusController::class,'joinusCreate'])->name('joinus.create');
    Route::post('joinus-store',[JoinusController::class,'joinusStore'])->name('joinus.store');
    Route::get('joinus-edit/{id}',[JoinusController::class,'joinusEdit'])->name('joinus.edit');
    Route::post('joinus-update',[JoinusController::class,'joinusUpdate'])->name('joinus.update');
    Route::get('joinus-delete/{id}',[JoinusController::class,'joinusDelete'])->name('joinus.delete');
 });
//

//for features

Route::group(['prefix' => 'admin'], function() {
    Route::get('features-index',[FeaturesController::class,'featuresIndex'])->name('features.index');
    Route::get('features-create',[FeaturesController::class,'featuresCreate'])->name('features.create');
    Route::post('features-store',[FeaturesController::class,'featuresStore'])->name('features.store');
    Route::get('features-edit/{id}',[FeaturesController::class,'featuresEdit'])->name('features.edit');
    Route::post('features-update',[FeaturesController::class,'featuresUpdate'])->name('features.update');
    Route::get('features-delete/{id}',[FeaturesController::class,'featuresDelete'])->name('features.delete');
 });

 //
//for footerleft

Route::group(['prefix' => 'admin'], function() {
    Route::get('footerleft-index',[FooterleftController::class,'footerleftIndex'])->name('footerleft.index');
    Route::get('footerleft-create',[FooterleftController::class,'footerleftCreate'])->name('footerleft.create');
    Route::post('footerleft-store',[FooterleftController::class,'footerleftStore'])->name('footerleft.store');
    Route::get('footerleft-edit/{id}',[FooterleftController::class,'footerleftEdit'])->name('footerleft.edit');
    Route::post('footerleft-update',[FooterleftController::class,'footerleftUpdate'])->name('footerleft.update');
    Route::get('footerleft-delete/{id}',[FooterleftController::class,'footerleftDelete'])->name('footerleft.delete');
 });

 //
 //forfooterlink
 Route::group(['prefix' => 'admin'], function() {
    Route::get('footerlink-index',[FooterlinkController::class,'footerlinkIndex'])->name('footerlink.index');
    Route::get('footerlink-create',[FooterlinkController::class,'footerlinkCreate'])->name('footerlink.create');
    Route::post('footerlink-store',[FooterlinkController::class,'footerlinkStore'])->name('footerlink.store');
    Route::get('footerlink-edit/{id}',[FooterlinkController::class,'footerlinkEdit'])->name('footerlink.edit');
    Route::post('footerlink-update',[FooterlinkController::class,'footerlinkUpdate'])->name('footerlink.update');
    Route::get('footerlink-delete/{id}',[FooterlinkController::class,'footerlinkDelete'])->name('footerlink.delete');
 });
//

//for blog

Route::group(['prefix' => 'admin'], function() {
    Route::get('blog-index',[AdminBlogController::class,'adminblogIndex'])->name('adminblog.index');
    Route::get('blog-create',[AdminBlogController::class,'adminblogCreate'])->name('adminblog.create');
    Route::post('blog-store',[AdminBlogController::class,'adminblogStore'])->name('adminblog.store');
    Route::get('blog-edit/{id}',[AdminBlogController::class,'adminblogEdit'])->name('adminblog.edit');
    Route::post('blog-update',[AdminBlogController::class,'adminblogUpdate'])->name('adminblog.update');
    Route::get('blog-delete/{id}',[AdminBlogController::class,'adminblogDelete'])->name('adminblog.delete');
 });

//





 //frontend


 //for indexpage
Route::get('/',[ViewController::class,'view'])->name('view');

//

//for blog

Route::group(['prefix' => 'blog'], function() {
    Route::get('blog-view',[BlogController::class,'blogView'])->name('blog.view');
 });


