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
use App\Http\Controllers\BrokerController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\AutoPostController;

use App\Http\Controllers\SubscriptionController;


use App\Http\Controllers\CustomformController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\PayPalController;
use App\Http\Controllers\BlockController;


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

    
    
  Route::get('schedule_run', function () {

    \Artisan::call('schedule:run');

    dd("schedule_run");

});  
    
       Route::get('load_grapejs/{page}',[ PageController::class,'load_grapejs'])->name("load_grapejs2") ;
    
  
 
  
 Route::get('/', [PageController::class, 'homepage'])->name('homepage'); 
  
 
     Route::post('save_editor',[ PageController::class,'save_editor'])->name("save_editor") ;
    
 
 Route::get('page/{page:slug}',  [PageController::class, 'get_page_by_slug'])->name('get_page_by_slug'); 
    

Route::get('/test1', [PropertyController::class, 'test1'])->name('test1');



 
Route::view('login_with_otp', 'auth.login_with_otp')
->name('register_as_broker');
 
Route::get('/property/{property}', [PropertyController::class, 'viewProperty'])->name('viewProperty');


Route::post('c', [PropertyController::class, 'search_property'])->name('search_property');


Route::get('/archive', [PropertyController::class, 'propertyarchive'])->name('propertyarchive');



Route::get('/query_property/{query}', [PropertyController::class, 'query_property'])->name('query_property');


Route::get('/contact_us', [PageController::class, 'contact_us'])->name('contact_us');


  Route::get('blog/{post}',[ PostController::class,'get_post'])->name("get_post") ;
    
 
//Route::get('register_as_broker',[ BrokerController::class,'register_as_broker'])->name("register_as_broker") ;

  Route::get('broker/{user:email}',[ BrokerController::class,'get_broker'])->name("get_broker") ;
    
 

//Route::post('register_as_broker_post',[ BrokerController::class,'register_as_broker_post'])->name("register_as_broker_post") ;

 
 // Route::post('validate_broker_registeration',[ BrokerController::class,'validate_broker_registeration'])->name("validate_broker_registeration") ;
    
 
 

    
 Route::view('login_with_otp', 'auth.login_with_otp')->name('login_with_otp');
 
 
Route::post('login_with_otp', [AuthController::class, 'login_with_otp']   )->name('login_with_otp'); 

Route::post('verify_login_with_otp', [AuthController::class, 'verify_login_with_otp']   )->name('verify_login_with_otp'); 



    
    
    
    
    
 Route::get('page/{page}',  [PageController::class, 'get_page_by_id'])->name('get_page_by_id'); 
    
    
    
Route::post('call_me_back', [LeadController::class, 'call_me_back']   )->name('call_me_back'); 
Route::post('download_brochure', [LeadController::class, 'download_brochure']   )->name('download_brochure'); 



Route::post('book_a_private_tour', [LeadController::class, 'book_a_private_tour']   )->name('book_a_private_tour'); 




Route::get('our_brokers', [BrokerController::class, 'our_brokers']   )->name('our_brokers'); 








Route::prefix('auth')->group(function () {
 
Route::middleware(['auth' ])->group(function () {
     
     
     
     


 Route::get('home', [AuthController::class, 'home'])->name('home'); 
 
 
 Route::get('login_history', [AuthController::class, 'login_history'])->name('login_history'); 
 

Route::get('profile', [AuthController::class, 'getprofile']   )->name('profile');;
    
Route::get('profile/edit', [AuthController::class, 'getprofileEdit']   )->name('profile.edit') ;
    
Route::post('profile/edit', [AuthController::class, 'postprofileEdit']   )->name('profile.edit') ;


 //Route::get('subscriptions_plan', [SubscriptionController::class, 'subscriptions_plan'])->name('subscriptions_plan');  
 
 
 Route::get('make_payment', [PayPalController::class, 'make_payment'])->name('subscriptions_plan');  
 
 Route::middleware([ 'CheckUser' ])->group(function () {
     
     
 
 

Route::controller(PayPalController::class)
    ->prefix('paypal')
    ->group(function () {
         Route::view('paymentw', 'paypal.index')->name('make_paymentw');
          Route::view('payment', 'paypal.status')->name('status');
        
         
        
        Route::post('handle-payment', 'handlePayment')->name('make.payment');
        Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
        Route::get('payment-success', 'paymentSuccess')->name('success.payment');
    });
    
    
   
  
 });
    
      
     
    
    
     
     
     
 
    
    
 Route::middleware(['role:admin|Executive','CheckUser' ])->group(function () {
 
    
     
     
    Route::resource('properties', PropertyController::class) ;
        Route::resource('leads', LeadController::class) ;
    
        Route::resource('orders', OrderController::class) ;
    
 

    
Route::post('/set_lead_status/{lead}', [LeadController::class, 'set_lead_status'])->name('set_lead_status');

    
Route::post('/set_lead_tags/{lead}', [LeadController::class, 'set_lead_tags'])->name('set_lead_tags');


    
Route::get('/properties/{property}/setimage', [PropertyController::class, 'set_property_image'])->name('set_property_image');

Route::get('/properties/{property}/duplicate_property', [PropertyController::class, 'duplicate_property'])->name('duplicate_property');

Route::get('/properties/{property}/publish_property', [PropertyController::class, 'publish_property'])->name('publish_property');

Route::get('/properties/{property}/unpublish_property', [PropertyController::class, 'unpublish_property'])->name('unpublish_property');

Route::post('/properties/{property}/setimages', [PropertyController::class, 'post_set_property_images'])->name('post_set_property_images');

Route::patch('/properties/{property}/set_update_other_fields', [PropertyController::class, 'post_set_update_other_fields'])->name('post_set_update_other_fields');




Route::patch('/properties/{property}/update_connectivity', [PropertyController::class, 'update_connectivity'])->name('update_connectivity');
 
Route::post('/properties/{property}/setthumbnail', [PropertyController::class, 'post_set_thumbnail_image'])->name('post_set_thumbnail_image');


Route::post('/properties/{property}/remove_image_from_gallery', [PropertyController::class, 'remove_image_from_gallery'])->name('remove_image_from_gallery');

Route::post('/properties/{property}/remove_feature_image_from_gallery', [PropertyController::class, 'remove_feature_image_from_gallery'])->name('remove_feature_image_from_gallery');

Route::post('/properties/{property}/remove_brochure_url', [PropertyController::class, 'remove_brochure_url'])->name('remove_brochure_url');

 
 
 
 
Route::get('/properties/{id}/restore', [PropertyController::class, 'restore_property'])->name('restore_property');   


Route::delete('/properties/{id}/forced_destroy', [PropertyController::class, 'forced_destroy'])->name('forced_destroy');   
 
Route::post('/properties/{property}/post_brochure', [PropertyController::class, 'post_brochure'])->name('post_brochure');   
 
 
Route::post('remove_connectivity/{property}', [PropertyController::class, 'remove_connectivity']   )->name('remove_connectivity'); 
 
 
Route::patch('aminities_update/{property}', [PropertyController::class, 'aminities_update']   )->name('aminities_update'); 
 
 
 
 
 
  
 
});


Route::middleware(['role:admin'])->group(function () {
    
    
    
    
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
    Route::post('settings_master',[ SettingsController::class,'settings_master'])->name("settings_master") ;
    
    
     
    
    
    Route::resource('subscriptions', SubscriptionController::class) ;
    
    Route::resource('subscribers', SubscriberController::class) ;
    
    
    
    Route::resource('pages', PageController::class) ;
    
    Route::get('editor/{page}',[ PageController::class,'load_editor'])->name("load_editor") ;
    Route::post('store_grapejs/{page}',[ PageController::class,'store_grapejs'])->name("store_grapejs") ;
    Route::get('load_grapejs/{page}',[ PageController::class,'load_grapejs'])->name("load_grapejs") ;
    
      //  Route::post('save_editor',[ PageController::class,'save_editor'])->name("save_editor") ;
     
    
    
    Route::resource('faqs', FaqController::class) ; 
    
    
    Route::resource('posts', PostController::class) ;
    
    
    Route::resource('blocks', BlockController::class) ;
    
    
     
      Route::post('update_avatar_block/{block}',[ BlockController::class,'update_avatar_block'])->name("update_avatar_block") ;
    
     
    Route::resource('auto_posts', AutoPostController::class) ;
    
    

      Route::get('create_ai_post',[ PostController::class,'get_create_ai_post'])->name("get_create_ai_post") ;

      Route::post('create_ai_post',[ PostController::class,'post_create_ai_post'])->name("post_create_ai_post") ;
    
    
    
    
    Route::resource('testimonials', TestimonialController::class) ;
    
    
    Route::resource('bulk_messages', BulkMessageController::class) ;
    
    
    Route::resource('teams', TeamController::class) ;
    
   // Route::resource('brokers', BrokerController::class) ;
    
     
      Route::post('update_avatar/{team}',[ TeamController::class,'update_avatar'])->name("update_avatar") ;
    
     
      Route::post('update_thumbnail/{testimonial}',[ TestimonialController::class,'update_thumbnail'])->name("update_thumbnail") ;
    
    
    
     
      Route::post('update_post_thumbnail/{post}',[ PostController::class,'update_post_thumbnail'])->name("update_post_thumbnail") ;
    
    
     
     
  //    Route::post('update_avatar_broker/{broker}',[ BrokerController::class,'update_avatar_broker'])->name("update_avatar_broker") ;
    
    
     
    
    
    
    

     // Route::get('process_broker_request/{broker}',[ BrokerController::class,'process_broker_request'])->name("process_broker_request") ;
    
    
     
    
    
    
    


    
    
    
    Route::resource('customforms', CustomformController::class) ;

Route::post('set_form_fields/{customform}', [CustomformController::class, 'set_form_fields']   )->name('set_form_fields'); 
 

Route::resource('users', UserController::class) ;

Route::resource('roles', RoleController::class) ;
Route::resource('permissions', PermissionController::class) ;




 
  


Route::post('users/filter', [UserController::class, 'get_user_list_after_filter']   )->name('get_user_list_after_filter'); 

  
 

Route::get('susend_user/{user}/{status}', [UserController::class, 'susend_user']   )->name('susend_user'); 
    
    
    
    
});

    
}); 



}); 











