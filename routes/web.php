<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;
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
Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/properties-details/{id}', [HomeController::class, 'propertiesDetails'])->name('properties-details');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog-details');
Route::get('/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::post('/product/review', [HomeController::class, 'storeReview'])->name('product.review.store');
Route::get('/load-more-reviews', [HomeController::class, 'loadMoreReviews'])->name('load-more-reviews');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('terms-condition');

Route::middleware('auth')->group(function () {
    Route::get('/user-profile', [HomeController::class, 'userProfile'])->name('user-profile');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
});

Route::get('/app-download', function () {
    $filePath = public_path('app.apk');
    return response()->download($filePath, 'app.apk');
})->name('app.download');

/**-------------------------------------------------------------------------
 * KEY : SOCIAL AUTH
 * -------------------------------------------------------------------------
 */
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.login');
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('social.callback');

/**-------------------------------------------------------------------------
 * KEY : DASHBOARD PROFILE
 * -------------------------------------------------------------------------
 */
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile-index', [ProfileController::class, 'profileIndex'])->name('profile.index');
    Route::get('/profile-settings', [ProfileController::class, 'profileSettings'])->name('profile.settings');
    Route::post('/profile-update/image', [ProfileController::class, 'updateImage'])->name('profile.updateImage');
    Route::post('/profile-update', [ProfileController::class, 'profileUpdate'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
});

/**-------------------------------------------------------------------------
 * KEY : FLATPORTAL
 * -------------------------------------------------------------------------
 */

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::resource('categories', CategoryController::class);

    //--------------------PropertyController
    Route::resource('property', PropertyController::class);
    Route::post('property/{id}/add-image', [PropertyController::class, 'addImage'])->name('property.addImage');
    Route::delete('property/{id}/remove-images', [PropertyController::class, 'propertyImagesDestroy'])->name('property-images.destroy');

    //--------------------PropertyCalculation
    Route::post('/mortgage-store', [PropertyController::class, 'storeMortgage'])->name('mortgage.store');
});


Route::get('/get-session', function () {
    // session()->forget('previous_url');
    // session()->forget('two_step_url');
    // session()->put('name', 'Motiuir');
    // dd(session()->all());
    // session()->flush();
});


require __DIR__.'/auth.php';
