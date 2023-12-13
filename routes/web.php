<?php

use App\Http\Controllers\Admin\AdoptionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DonationController as FrontDonationController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin

//user
route::get('/user/index',[UserController::class,'index'])->name('user.index');
route::post('/user/store',[UserController::class,'store'])->name('user.store');
route::get('/user/create',[UserController::class,'create'])->name('user.create');
route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');
route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

//donation
route::get('donation/create',[DonationController::class,'create'])->name('donation.create');
route::post('donation/store',[DonationController::class,'store'])->name('donation.store');
route::get('user/donation/index',[DonationController::class,'index'])->name('donation.index');
route::get('donation/edit/{id}',[DonationController::class,'edit'])->name('donation.edit');
route::post('donation/update/{id}',[DonationController::class,'update'])->name('donation.update');
route::get('donation/delete/{id}',[DonationController::class,'delete'])->name('donation.delete');




//event
route::get('user/event/create',[EventController::class,'create'])->name('event.create');
route::post('user/event/store',[EventController::class,'store'])->name('event.store');
route::get('event/index',[EventController::class,'index'])->name('event.index');
route::get('event/edit/{id}',[EventController::class,'edit'])->name('event.edit');
route::post('event/update/{id}',[EventController::class,'update'])->name('event.update');
route::get('event/delete/{id}',[EventController::class,'delete'])->name('event.delete');

//adoption
route::get('adoption/create',[AdoptionController::class,'create'])->name('adoption.create');
route::post('adoption/store',[AdoptionController::class,'store'])->name('adoption.store');
route::get('adoption/index',[AdoptionController::class,'index'])->name('adoption.index');
route::get('adoption/edit/{id}',[AdoptionController::class,'edit'])->name('adoption.edit');
route::post('adoption/update/{id}',[AdoptionController::class,'update'])->name('adoption.update');
route::get('adoption/delete',[AdoptionController::class,'delete'])->name('adoption.delete');

//front

route::get('/',[FrontController::class,'index'])->name('index');
route::get('/about',[FrontController::class,'about'])->name('about');
route::get('/program',[FrontController::class,'program'])->name('program');
route::get('/event',[FrontController::class,'event'])->name('event');
route::get('/blog',[FrontController::class,'blog'])->name('blog');
route::get('/categ/{id}',[FrontController::class,'category'])->name('category');

route::get('/volunteer',[FrontController::class,'volunteer'])->name('volunteer');
route::post('/store/volunteer',[FrontController::class,'store'])->name('store.volunteer');







//service
route::get('service/create',[ServiceController::class,'create'])->name('service.create');
route::post('service/store',[ServiceController::class,'store'])->name('service.store');
route::get('service/index',[ServiceController::class,'index'])->name('service.index');
route::get('service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
route::post('service/update/{id}',[ServiceController::class,'update'])->name('service.update');
route::get('service/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');

//contact
route::get('/contact',[ContactController::class,'contact'])->name('contact');
route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');
route::get('/contact/index',[ContactController::class,'index'])->name('contact.index');
route::get('contact/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');

//UserDOnation
route::get('/donation',[FrontDonationController::class,'donation'])->name('donation');
route::post('/front/donation/store',[FrontDonationController::class,'store'])->name('front.donation.store');
route::get('/user/contact/index',[FrontDonationController::class,'index'])->name('user.donation.index');
route::get('/user/contact/delete/{id}',[FrontDonationController::class,'delete'])->name('user.contact.delete');

//blog
route::get('blog/index',[BlogController::class,'index'])->name('blog.index');
route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
route::post('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');

//category
route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

//volunteer

route::get('/volunteer/create',[VolunteerController::class,'create'])->name('volunteer.create');
route::post('/volunteer/store',[VolunteerController::class,'store'])->name('volunteer.store');
route::get('/volunteer/index',[VolunteerController::class,'index'])->name('volunteer.index');
route::get('/volunteer/edit/{id}',[VolunteerController::class,'edit'])->name('volunteer.edit');
route::post('/volunteer/update/{id}',[VolunteerController::class,'update'])->name('volunteer.update');
route::get('/volunteer/delete/{id}',[VolunteerController::class,'delete'])->name('volunteer.delete');

//Payment

route::get('/payment',[PaymentController::class,'payment'])->name('payment');
route::get('/payment/redirect',[PaymentController::class,'payment_redirect'])->name('payment_redirect');



















