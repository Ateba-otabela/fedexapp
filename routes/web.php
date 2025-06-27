<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\shoppingController;
use App\Models\cart;
use App\Models\Order;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;









// Route::get('/', function () {
   
//     return view('welcome')->name('admin');
// });
Route::get('/index', function () {
    return view('welcome');
});

Route::get('/edit', function () {
    return view('edit_shipp');
});
Route::get('/d', function () {
    return view('admin/admindashboard');
});

Route::get('/product', function () {

   
});

Route::get('/post_product', function () {
   
    return view('products.post_product');
});

Route::get('/order', function () {
    
    $id = Auth::user()->id;
    $orders = Order::where('user_id', $id)->get();
   // dd($orders);
  
    return view('products.order',compact('orders'));
});
Route::get('/cart', function () {
    $totalPrice = cart::sum('price');

    $id = Auth::user()->id;
   
    $carts = cart::where('user_id', '=', $id)->get();
   
   
    

    return view('products.cart',compact('carts','totalPrice'));
});
Route::get('/FAQ', function () {
    $orderId = 'FED' . rand(100000, 999999);
   // dd($orderId);
    return view('products.FAQ');
});
Route::get('/tracking', function () {
   
    return view('products.tracking');
});
Route::get('/shipping', function () {
   
    return view('products.shipping');
});

Route::get('/contact', function () {
   
    return view('products.contact');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/shopping', [shoppingController::class, 'shopping'])->name('shopping');
    //This route displays the shipping page
    Route::get('/shipping', [shoppingController::class, 'shipping'])->name('shipping');
    Route::post('/post', [shoppingController::class, 'post_product'])->name('post_product');
    Route::post('/order', [shoppingController::class, 'order_product'])->name('order');
    Route::post('/add_cart/{id}', [shoppingController::class, 'add_cart'])->name('add_cart');
    Route::post('/delete_cart/{id}', [shoppingController::class, 'delete_cart'])->name('delete_cart');
    Route::post('/delete_all', [shoppingController::class, 'delete_all'])->name('delete_all');
    Route::get('/post', [shoppingController::class, 'post'])->name('post');
    Route::get('/', [shoppingController::class, 'product'])->name('product');
    Route::get('/admin', [AdminController::class, 'admin_dashboard'])->name('admin');
    Route::post('/shipping', [AdminController::class, 'shipping'])->name('shipp');

    Route::post('/track', [AdminController::class, 'track'])->name('track');
    Route::get('/show_tracking/{tracking_number}', [AdminController::class, 'show_tracking'])->name('show_tracking');

    Route::get('/show_update_tracking/{id}', [AdminController::class, 'show_update_tracking'])->name('show_update_tracking');
    Route::get('/showtracking/{id}', [AdminController::class, 'showtracking'])->name('showtracking');
    Route::post('/showtracking/{id}', [AdminController::class, 'updatetracking'])->name('updatetracking');
    
});
Route::post('/search', [shoppingController::class, 'search'])->name('search');
Route::post('/place-order', [shoppingController::class, 'placeOrder'])->name('place_order');

//contact routes
Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
Route::post('register', [RegisteredUserController::class, 'store']);
 Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
Route::post('/contact/send', [AdminController::class, 'send'])->name('contact.send');
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
// require __DIR__.'/auth.php';
