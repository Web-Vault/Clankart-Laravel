<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registrationcontroller;
use App\Http\Controllers\PaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/search', [Registrationcontroller::class,'search'])->name('search');

Route::get('/', [RegistrationController::class, 'index']);

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/cart', [Registrationcontroller::class,'showCart']);

Route::get('add-to-cart/{id}', [Registrationcontroller::class,'add_cart'])->name('add-to-cart');

Route::get('/profile', [Registrationcontroller::class,'showProfile'])->name('profile');

// Update profile should be a POST and accessible to logged-in users (not admin-only)
Route::post('/update_profile', [Registrationcontroller::class,'update_profile'])->name('update_profile');

Route::get('/ads', [Registrationcontroller::class, 'showAds'])->name('ads');

// Route::get('/wishlist', function () {
//     return view('wishlist');
// });

Route::get('/wishlist', [Registrationcontroller::class,'showWishlist']);

Route::get('/add-to-wishlist/{id}', [Registrationcontroller::class, 'add_wishlist'])->name('add-to-wishlist');

Route::get('/chats', function () {
    return view('chats');
});

Route::get('/chats/{sender}', [Registrationcontroller::class, 'showChats']);

Route::get('/selling-orders', [Registrationcontroller::class, 'showSellingOrders'])->name('selling_orders');


Route::get('review-book/{book_id}/{order_id}', [Registrationcontroller::class, 'review_book']);
Route::post('submit-review', [Registrationcontroller::class, 'submit_review'])->name('submit.review');


Route::get('remove-cart/{book_id}', [Registrationcontroller::class, 'remove_cart']);
Route::get('remove-wishlist/{book_id}', [Registrationcontroller::class, 'remove_wishlist']);


// Route::get('/orders', function () {
//     return view('orders');
// });

Route::get('orders', [Registrationcontroller::class,'show_Orders'])->name('orders');

Route::post('make_payment', [Registrationcontroller::class, 'make_payment']);

Route::get('post-ad', function () {
    return view('post-ad');
});

// Route::get('checkout', function () {
//     return view('checkout');
// });
Route::get('/checkout/{id}/{price}', [Registrationcontroller::class,'place_order']);
Route::get('place_order/{book_id}/{final_price}', [Registrationcontroller::class,'go_to_pay']);

Route::get('click/{id}', [Registrationcontroller::class, 'showSingle'])->name('click');
// Route::get('click', function () {
//     return view('single');
// });

Route::get('books', [Registrationcontroller::class, 'showBooks']);
// Route::get('books', function () {
//     return view('books');
// });

Route::get('book-category', function () {
    return view('book-category');
});

// Change password should hit the controller action
Route::post('change-password', [Registrationcontroller::class, 'changePassword'])->name('change_password');

Route::get('logout', [Registrationcontroller::class,'logout'])->name('logout');

Route::get('login', [Registrationcontroller::class, 'login'])->name('login');
Route::get('register', [Registrationcontroller::class, 'register'])->name('register');
Route::post('books/{book_id}/stock', [Registrationcontroller::class, 'updateBookStock'])->name('books.update_stock');

Route::post('index', function() {
    return view('index');
});

Route::get('scroll', function() {
    return view('scroller_form');
});


// 
Route::post('add_image', [Registrationcontroller::class,'add_image']);

// 

Route::post('indexLogin', [Registrationcontroller::class , 'indexLogin']);
Route::post('indexSignup', [Registrationcontroller::class , 'indexSignup']);
Route::post('forgotPassword', [Registrationcontroller::class , 'forgotPassword']);
Route::get('verifyAccount/{email}/{token}', [Registrationcontroller::class ,'verify_email']);

// OTP-based password reset
Route::get('password/request', [Registrationcontroller::class, 'showForgotRequest'])->name('password.request_form');
Route::get('password/verify', [Registrationcontroller::class, 'showForgotVerify'])->name('password.verify_form');
Route::get('password/reset', [Registrationcontroller::class, 'showForgotReset'])->name('password.reset_form');
Route::post('password/request-otp', [Registrationcontroller::class, 'requestResetOtp'])->name('password.request_otp');
Route::post('password/verify-otp', [Registrationcontroller::class, 'verifyResetOtp'])->name('password.verify_otp');
Route::post('password/reset', [Registrationcontroller::class, 'resetPassword'])->name('password.reset');



// chatting
// Route::get('/chats', [Registrationcontroller::class, 'showChats'])->name('chats');
// Route::get('/message-with-person', [Registrationcontroller::class, 'message_with_person'])->name('message_with_person');
// Route::get('chats_with_me/{seller_id}', [Registrationcontroller::class, 'add_chat_partners'])->name('chats_with_me');


Route::get('/chats', [Registrationcontroller::class, 'showChats'])->name('chats');
Route::get('/message-with-person/{partner_id}', [Registrationcontroller::class, 'messageWithPerson'])->name('message_with_person');
Route::post('/send-message', [Registrationcontroller::class, 'sendMessage'])->name('send_message');
Route::get('/chats_with_me/{seller_id}', [Registrationcontroller::class, 'addChatPartners'])->name('chats_with_me');











// instamojo

Route::post('/instamojo', [Registrationcontroller::class, 'instamojo'])->name('instamojo');
Route::get('/callback', [Registrationcontroller::class, 'callback'])->name('callback');
Route::get('/success', [Registrationcontroller::class, 'success'])->name('success');
Route::get('/cancel', [Registrationcontroller::class, 'cancel'])->name('cancel');








// admin routes 


// Route::get('a-index', function () {
//     return view('admin/index');
// })->middleware('admin');

Route::get('a-index', [Registrationcontroller::class ,'admin_index'])->name('a-index')->middleware('admin');


// Route::get('a-orders', function () {
//     return view('admin/orders');
// })->middleware('admin');

Route::get('a-orders', [Registrationcontroller::class ,'showOrders'])->middleware('admin');

Route::get('confirm_order/{id}', [Registrationcontroller::class ,'confirmOrders'])->middleware('admin');
Route::get('cancel_order/{id}', [Registrationcontroller::class ,'cancel_order'])->middleware('admin');

// Route::get('a-product', function () {
//     return view('admin/product');
// });

// Route::get('a-customer', function () {
//     return view('admin/customer');
// });

Route::get('/filter-products/{ctgy_id}', [Registrationcontroller::class, 'filterProducts']);
Route::get('/set_delivered/{order_id}/{delivered}', [Registrationcontroller::class, 'set_delivered']);

Route::get('a-product', [Registrationcontroller::class, 'showProduct'])->middleware('admin');
Route::get('a-customer', [Registrationcontroller::class, 'showCustomer'])->middleware('admin');

Route::get('a-main-report', function () {
    return view('admin/main-report');
})->middleware('admin');

Route::get('a-category-report', function () {
    return view('admin/category-report');
})->middleware('admin');

Route::post('add-product', [Registrationcontroller::class , 'addProduct'])->middleware('admin');
Route::get('a-add-product', function () {
    return view('admin/add-product');
})->middleware('admin')->middleware('admin');

Route::get('a-add-user', function () {
    return view('admin/add-user ');
})->middleware('admin');

Route::get('customer_cart', function() {
    return view('admin/customer_cart');
})->middleware('admin');

Route::get('a-add-code', function () {
    return view('admin/add-coupon');
})->middleware('admin');

Route::get('a-offer', [Registrationcontroller::class, 'showCoupon'])->name('a-offers')->middleware('admin');
Route::post('a-add-referral', [Registrationcontroller::class , 'addCode'])->middleware('admin');


Route::post('edit-product', [Registrationcontroller::class, 'edit_product'])->middleware('admin');

Route::get('edit-book/{id}', [Registrationcontroller::class,'edit_product'])->middleware('admin');

Route::post('edit-product-form', [Registrationcontroller::class , 'edit_product_form'])->middleware('admin');

Route::get('product_review/{id}', [Registrationcontroller::class ,'product_review'])->middleware('admin');
Route::get('approve_review/{id}', [Registrationcontroller::class, 'approve_review'])->middleware('admin');

Route::get('edit-user/{id}', [Registrationcontroller::class, 'edit_user'])->middleware('admin');

Route::post('edit_user_info', [Registrationcontroller::class, 'edit_user_info'])->middleware('admin');

Route::get('remove-user/{id}', [Registrationcontroller::class, 'removeUser'])->middleware('admin');
Route::get('remove-book/{id}', [Registrationcontroller::class,'removeBook'])->middleware('admin');

Route::post('/sell_book', [Registrationcontroller::class, 'sell_book']);

Route::post('/a-add-user', [Registrationcontroller::class, 'addUser'])->middleware('admin');
Route::post('/add-product', [Registrationcontroller::class, 'addProduct'])->middleware('admin');

Route::get('customer_cart/{id}', [Registrationcontroller::class,'showUserCart'])->middleware('admin');