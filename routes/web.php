<?php

use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\FrontControllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductSizeController;

use App\Http\Controllers\Notification\NotificationController;

use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AuthController as AdminLoginController;

use App\Http\Controllers\Admin\AdminWalletController;

use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Order\OrderDetailController;
use App\Http\Controllers\Admin\Order\OrderReturnController;
use App\Http\Controllers\Admin\CMSPagesController;

use App\Http\Controllers\Auth\LoginController as UserLoginController;
use App\Http\Controllers\Auth\RegisterController as UserRegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController as UserForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController as UserResetPasswordController;

use App\Http\Controllers\DashboardBaseController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\WishlistController;

use App\Http\Controllers\Payment\PaymentController;

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\blog\BlogController;
use App\Http\Controllers\Testimonial\TestimonialController;

use App\Http\Controllers\FrontControllers\Cart\CartController;
use App\Http\Controllers\FrontControllers\Checkout\CheckoutController;
use App\Http\Controllers\Payment\FrontPaymentController;


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

Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact-us', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('front.gallery');
Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
Route::get('/blogs-and-articales', [FrontController::class, 'blogs'])->name('front.blogs');
Route::get('/training', [FrontController::class, 'training'])->name('front.training');
Route::get('/board-and-train', [FrontController::class, 'boardAndTrain'])->name('front.board');
Route::get('/private-lesson', [FrontController::class, 'privateLesson'])->name('front.private');
Route::get('/group-training', [FrontController::class, 'groupTraining'])->name('front.group');
Route::get('/summer-mini-sessions', [FrontController::class, 'summerMiniSessions'])->name('front.summer');
Route::get('/protecting-your-dog', [FrontController::class, 'protectingYourDog'])->name('front.protecting');
Route::get('/the-welfare-dog', [FrontController::class, 'theWelfareDog'])->name('front.welfare');
Route::get('/follow-through', [FrontController::class, 'followThrough'])->name('front.follow');
Route::get('/adopting-a-service-dog', [FrontController::class, 'adoptingAServiceDog'])->name('front.adopting');
Route::get('/cart', [FrontController::class, 'cart'])->name('front.cart');
Route::get('/checkout', [FrontController::class, 'checkout'])->name('front.checkout');
Route::get('/payment', [FrontController::class, 'payment'])->name('front.payment');

Route::middleware(['guest'])->group(function () {

    // Login Routes
    Route::get('/login', [UserLoginController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [UserLoginController::class, 'login'])->name('user.login');

    // Registration Routes
    Route::get('/register', [UserRegisterController::class, 'registerForm'])->name('register.form');
    Route::post('/register', [UserRegisterController::class, 'register'])->name('user.register');

    // Password Reset Routes
    Route::get('/forget/password/', [UserForgotPasswordController::class, 'forgetPasswordForm'])->name('forget.password.form');
    Route::post('/password/email', [UserForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset', [UserResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [UserResetPasswordController::class, 'reset'])->name('password.reset.submit');

});


// Admin Routes
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminLoginController::class, 'loginForm'])->name('admin.login.form');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');

    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

        //      CMS Routes
        Route::get('cms/pages/{slug}/edit', [CMSPagesController::class, 'edit'])->name('admin.pages.edit');
        Route::post('cms/pages/{slug}/update', [CMSPagesController::class, 'editAndUpdate'])->name('admin.pages.update');

        //      Admin Settings Crud
        Route::get('/settings/edit/{setting}', [SettingController::class, 'show'])->name('admin.settings.edit');
        Route::put('/settings/{setting}/update', [SettingController::class, 'update'])->name('admin.setting.update');

    });

    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

});



