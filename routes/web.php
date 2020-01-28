<?php
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Page\PageTemplateController@welcome');
Route::get('/search_venu', 'Page\PageTemplateController@searchVenu')->name('searchVenu');
Route::post('/send_query/{id}', 'Page\PageTemplateController@sendQuery')->name('sendQuery');
Route::post('/addRating/{id}', 'Page\PageTemplateController@addRating')->name('addRating');
Route::get('help','Page\PageTemplateController@help')->name('help');
Route::get('price','Page\PageTemplateController@price')->name('price');
Route::get('register','Page\PageTemplateController@signupCouple')->name('register');
Route::get('signup_vendor','Page\PageTemplateController@signupVendor')->name('signup-vendor');

Route::get('supplier/{category}','Category\CategoryController@supplier')->name('categoryList');
Route::get('real_wedding_single','Page\PageTemplateController@realWeddingSingle')->name('real-wedding-single');
Route::get('venue_listing','Page\PageTemplateController@venueListing')->name('venue-listing');
Route::get('photography_listing','Page\PageTemplateController@photographyListing')->name('photography-listing');
Route::get('dresses_listing','Page\PageTemplateController@dressesListing')->name('dresses-listing');
Route::get('florist_listing','Page\PageTemplateController@floristListing')->name('florist-listing');
Route::get('videography_listing','Page\PageTemplateController@videographyListing')->name('videography-listing');
Route::get('cake_listing','Page\PageTemplateController@cakeListing')->name('cake-listing');
Route::get('music_listing','Page\PageTemplateController@musicListing')->name('music-listing');
Route::get('about_us','Page\PageTemplateController@aboutUs')->name('about-us');
Route::get('contact_us','Page\PageTemplateController@contactUs')->name('contact-us');
Route::get('real_listing_listing','Page\PageTemplateController@realWeddingListing')->name('real-wedding-listing');
Route::POST('/vendorlogin', 'Vendor\LoginController@login')->name('vendorLogin');
Route::get('/vendor_login', function () {
	 Auth::logout();
    return view('vendor.login');
});
Route::get('vendor_details/{vendor}','Vendor\VendorController@vendorDetails')->name('vendor-details');


////////// planning start  ////////////
////////  couple middleware start //////
Route::group(['middleware' => ['auth','verified']], function () {
Route::get('dashboard','Couple\CoupleController@coupleDashboard')->name('couple-dashboard');
Route::get('profile','Couple\CoupleController@coupleProfile')->name('couple-profile');
Route::POST('change_password','Couple\CoupleController@coupleChangePassword')->name('couple.changePassword');
Route::POST('change_avatar','Couple\CoupleController@coupleChangeAvatar')->name('couple.changeAvatar');
Route::POST('change_info','Couple\CoupleController@coupleChangeInfo')->name('couple.changeInfo');
Route::get('add_guest','Couple\CoupleController@addGuest')->name('couple.addGuest');
Route::get('couple_wishlist','Planning\planningController@coupleWishlist')->name('couple-wishlist');
Route::get('remove_wishlist/{id}/{user}','Planning\planningController@removeWishList')->name('removeWishList');
Route::get('couple_budgett','Planning\planningController@coupleBudgett')->name('couple-budget');
Route::get('couple_budgett','Planning\planningController@coupleBudgett')->name('couple-budget');
Route::get('couple_guestlist','Couple\CoupleController@coupleGuestlist')->name('couple-guestlist');
Route::get('invite_guest/{id}','Couple\CoupleController@inviteGuest')->name('inviteGuest');
Route::get('edit_guest/{id}','Couple\CoupleController@editGuest')->name('editGuest');
Route::get('delete_guest/{id}','Couple\CoupleController@deleteGuest')->name('deleteGuest');
Route::post('update_guest/{id}','Couple\CoupleController@updateGuest')->name('updateGuest');
Route::get('add_budget','Planning\planningController@addBudget')->name('add-budget');
Route::post('post_budget','Planning\planningController@postBudget')->name('postBudget');
Route::get('couple_checklist','Couple\ToDoListController@coupleChecklist')->name('couple-checklist');
Route::get('edit_to_do_list/{id}','Couple\ToDoListController@editToDoList')->name('couple.editToDoList');
Route::post('updateToDoList/{id}','Couple\ToDoListController@updateToDoList')->name('couple.updateToDoList');
Route::get('completeToDoList/{id}','Couple\ToDoListController@completeToDoList')->name('couple.completeToDoList');
Route::get('accepteInvition/{id}','Couple\CoupleController@accepteInvition')->name('couple.accepteInvition');
Route::get('rejectInvition/{id}','Couple\CoupleController@rejectInvition')->name('couple.rejectInvition');
Route::get('add_to_do_list_delete/{id}','Couple\ToDoListController@toDoListDelete')->name('couple.toDoListDelete');
Route::get('add_to_do_list','Couple\ToDoListController@addToDoList')->name('couple.addToDoList');
Route::POST('store_to_do_list','Couple\ToDoListController@storeToDoList')->name('couple.storeToDoList');
Route::get('delete-budget/{id}','Planning\planningController@deleteBudget')->name('deleteBudget');
Route::get('edit-budget/{id}','Planning\planningController@editBudget')->name('editBudget');
Route::post('update-budget/{id}','Planning\planningController@updateBudget')->name('updateBudget');
Route::post('post_guest','Couple\CoupleController@postGuest')->name('postGuest');
});
///////// end middlware end  ///////////
Route::get('wish_list/{id}','Planning\planningController@wishList')->name('wishList');
Route::get('planning_to_do','Planning\planningController@planningToDo')->name('planning-to-do');
Route::get('planning_budget','Planning\planningController@planningBudget')->name('planning-budget');
Route::get('couple_landing_page','Planning\planningController@coupleLandingPage')->name('couple-landing-page');








////////// end pllanning /////////////
///////////////// strat vendor /////////////////
Route::group(['prefix'=>'vendor','middleware' => ['adminMiddalware','verified']], function () {
Route::get('/','Vendor\VendorController@index');
Route::get('dashboard_vendor','Vendor\VendorController@dashboardVendor')->name('dashboard-vendor');
Route::get('view_list/{id}','Vendor\VendorController@viewList');
Route::get('vendor_profile','Vendor\VendorController@vendorProfile')->name('vendor-profile');
Route::get('vendor_listing','Vendor\VendorController@vendorListing')->name('vendor-listing');
Route::get('accept_offer/{id}','Vendor\VendorController@acceptOffer');
Route::get('reject_offer/{id}','Vendor\VendorController@rejectOffer');
Route::get('vendor_add_listing','Vendor\VendorController@vendorAddListing')->name('vendor-add-listing');
Route::get('vendor_pricing','Vendor\VendorController@vendorPricing')->name('vendor-pricing');
Route::POST('listPost','Listing\ListingController@store')->name('vendor.list');
Route::POST('listUpdate/{id}','Listing\ListingController@update')->name('vendor.listUpdate');
Route::POST('changePassword','Vendor\VendorController@changePassword')->name('vendor.changePassword');
 Route::POST('changeInfo','Vendor\VendorController@changeInfo')->name('vendor.changeInfo');
 Route::POST('changeAvatar','Vendor\VendorController@changeAvatar')->name('vendor.changeAvatar');
  Route::GET('list/edit/{id}','Vendor\VendorController@vendorAddListing');
Route::GET('list/delete/{id}','Vendor\VendorController@destroy');
Route::GET('find_city/{country}','Category\CategoryController@findCity');
});
///////////////// end vendor //////////////////
