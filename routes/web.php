<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AuthController;





use App\Http\Controllers\SubscriberController;

use App\Http\Controllers\PageController; 

use App\Http\Controllers\FaqController;


use App\Http\Controllers\LeadController;


use App\Http\Controllers\SettingsController;

use App\Http\Controllers\TeamController; 

use App\Http\Controllers\BulkMessageController;


use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VendorController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\PropertyController;



use App\Http\Controllers\SubscriptionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
  
 Route::get('/', [PageController::class, 'homepage'])->name('homepage'); 
  
 

 


Route::get('/property/{property}', [PropertyController::class, 'viewProperty'])->name('viewProperty');


Route::get('/archive', [PropertyController::class, 'propertyarchive'])->name('propertyarchive');



Route::get('/query_property/{query}', [PropertyController::class, 'query_property'])->name('query_property');


Route::get('/contact_us', [PageController::class, 'contact_us'])->name('contact_us');


  Route::get('blog/{post}',[ PostController::class,'get_post'])->name("get_post") ;
    
 
Route::get('register_as_vendor',[ VendorController::class,'register_as_vendor'])->name("register_as_vendor") ;

  Route::get('broker/{email}',[ VendorController::class,'get_vendor'])->name("get_vendor") ;
    
 

Route::post('register_as_vendor_post',[ VendorController::class,'register_as_vendor_post'])->name("register_as_vendor_post") ;


    
 Route::view('login_with_otp', 'auth.login_with_otp')->name('login_with_otp');
 
 
Route::post('login_with_otp', [AuthController::class, 'login_with_otp']   )->name('login_with_otp'); 

Route::post('verify_login_with_otp', [AuthController::class, 'verify_login_with_otp']   )->name('verify_login_with_otp'); 



    
    
 Route::get('page/{page:slug}',  [PageController::class, 'get_page_by_slug'])->name('get_page_by_slug'); 
    
    
    
Route::post('call_me_back', [LeadController::class, 'call_me_back']   )->name('call_me_back'); 
Route::post('download_brochure', [LeadController::class, 'download_brochure']   )->name('download_brochure'); 



Route::post('book_a_private_tour', [LeadController::class, 'book_a_private_tour']   )->name('book_a_private_tour'); 




Route::get('our_brokers', [VendorController::class, 'our_brokers']   )->name('our_brokers'); 




 
Route::middleware(['auth' ])->group(function () {
     


 Route::get('home', [AuthController::class, 'home'])->name('home'); 
 
 
 Route::get('login_history', [AuthController::class, 'login_history'])->name('login_history'); 
 

 
    
 



Route::prefix('admin')->group(function () {
Route::middleware(['role:admin'])->group(function () {
    
     
    
    Route::resource('properties', PropertyController::class) ;
        Route::resource('leads', LeadController::class) ;
    
    
 


    
Route::get('/properties/{property}/setimage', [PropertyController::class, 'set_property_image'])->name('set_property_image');

Route::get('/properties/{property}/duplicate_property', [PropertyController::class, 'duplicate_property'])->name('duplicate_property');

Route::get('/properties/{property}/publish_property', [PropertyController::class, 'publish_property'])->name('publish_property');

Route::get('/properties/{property}/unpublish_property', [PropertyController::class, 'unpublish_property'])->name('unpublish_property');

Route::post('/properties/{property}/setimages', [PropertyController::class, 'post_set_property_images'])->name('post_set_property_images');




Route::patch('/properties/{property}/update_connectivity', [PropertyController::class, 'update_connectivity'])->name('update_connectivity');





Route::post('/properties/{property}/setthumbnail', [PropertyController::class, 'post_set_thumbnail_image'])->name('post_set_thumbnail_image');


Route::post('/properties/{property}/remove_image_from_gallery', [PropertyController::class, 'remove_image_from_gallery'])->name('remove_image_from_gallery');

Route::post('/properties/{property}/remove_feature_image_from_gallery', [PropertyController::class, 'remove_feature_image_from_gallery'])->name('remove_feature_image_from_gallery');

Route::post('/properties/{property}/remove_brochure_url', [PropertyController::class, 'remove_brochure_url'])->name('remove_brochure_url');

 
 
Route::post('/properties/{property}/post_brochure', [PropertyController::class, 'post_brochure'])->name('post_brochure');   
});





Route::post('remove_connectivity/{property}', [PropertyController::class, 'remove_connectivity']   )->name('remove_connectivity'); 


    
Route::get('section_settings', [PropertyController::class, 'section_settings'])->name('section_settings');
 
Route::post('post_logo_slider_images', [PropertyController::class, 'post_logo_slider_images'])->name('post_logo_slider_images');
 
Route::post('post_carousel_images', [PropertyController::class, 'post_carousel_images'])->name('post_carousel_images');
 
 
Route::post('remove_logo_sliders_image', [PropertyController::class, 'remove_logo_sliders_image'])->name('remove_logo_sliders_image');
 
 
Route::post('remove_carousel_image', [PropertyController::class, 'remove_carousel_image'])->name('remove_carousel_image');
 
 
 
 
 
    
    
    
    
    Route::get('settings',[ SettingsController::class,'get_settings'])->name("get_settings") ;
    
    Route::post('settings_notifications',[ SettingsController::class,'settings_notifications'])->name("settings_notifications") ;
    
    Route::post('settings_recaptcha',[ SettingsController::class,'settings_recaptcha'])->name("settings_recaptcha") ;
    
    
    Route::post('settings_branding',[ SettingsController::class,'settings_branding'])->name("settings_branding") ;
    
    
    
    Route::post('settings_logo',[ SettingsController::class,'settings_logo'])->name("settings_logo") ;
    
    
    
    
    
    
    
    
    
    
    
    
    Route::resource('subscriptions', SubscriptionController::class) ;
    
    Route::resource('subscribers', SubscriberController::class) ;
    
    
    
    Route::resource('pages', PageController::class) ;
    
    
    Route::resource('faqs', FaqController::class) ;
    Route::resource('leads', LeadController::class) ;
    
    
    Route::resource('posts', PostController::class) ;
    
    

      Route::get('create_ai_post',[ PostController::class,'get_create_ai_post'])->name("get_create_ai_post") ;

      Route::post('create_ai_post',[ PostController::class,'post_create_ai_post'])->name("post_create_ai_post") ;
    
    
    
    
    Route::resource('testimonials', TestimonialController::class) ;
    
    
    Route::resource('bulk_messages', BulkMessageController::class) ;
    
    
    Route::resource('teams', TeamController::class) ;
    
    Route::resource('vendors', VendorController::class) ;
    
     
      Route::post('update_avatar/{team}',[ TeamController::class,'update_avatar'])->name("update_avatar") ;
    
     
      Route::post('update_thumbnail/{testimonial}',[ TestimonialController::class,'update_thumbnail'])->name("update_thumbnail") ;
    
    
    
     
      Route::post('update_post_thumbnail/{post}',[ PostController::class,'update_post_thumbnail'])->name("update_post_thumbnail") ;
    
    
     
     
      Route::post('update_avatar_vendor/{vendor}',[ VendorController::class,'update_avatar_vendor'])->name("update_avatar_vendor") ;
    
    
     
    
    
    
    

      Route::get('process_vendor_request/{vendor}',[ VendorController::class,'process_vendor_request'])->name("process_vendor_request") ;
    
    
     
    
    
    
    


    
    
    


 // for designer end


Route::resource('users', UserController::class) ;

Route::resource('roles', RoleController::class) ;
Route::resource('permissions', PermissionController::class) ;




 
 



Route::post('users/filter', [UserController::class, 'get_user_list_after_filter']   )->name('get_user_list_after_filter'); 

  
 

Route::get('susend_user/{user}/{status}', [UserController::class, 'susend_user']   )->name('susend_user'); 
    
    
    
    
});

    
}); 