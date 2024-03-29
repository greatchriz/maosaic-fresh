<?php

use App\Http\Controllers\AtmController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PaymentMethodController;
use App\Models\Article;
use App\Models\PaymentMethod;
use Illuminate\Support\Arr;


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




Route::get('/', [FrontEndController::class, 'home'])->name('home');

Route::get('/services', [FrontEndController::class, 'services'])->name('services');

Route::get('/faq', [FrontEndController::class, 'faq'])->name('faq');

Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');

Route::get('/about', [FrontEndController::class, 'about'])->name('about');

Route::get('/credit-card', [FrontEndController::class, 'creditCard'])->name('credit-card');

Route::get('/career', [FrontEndController::class, 'career'])->name('career');

// create a personal-overdraft route like the one above
Route::get('/personal-overdraft', [FrontEndController::class, 'personalOverdraft'])->name('personal-overdraft');

// create a protect-yourself route like the one above
Route::get('/protect-yourself', [FrontEndController::class, 'protectYourself'])->name('protect-yourself');




// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');
// Route::get('/mailable', function () {
//     $notifiable = App\Models\User::find(1);
//     $url = 'http://localhost:8000/email/verify/1/1';

//     return new App\Mail\UserEmailVerification($url);
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/depositmail', function () {
        $deposit = App\Models\Deposit::find(1);

        return new App\Mail\DepositMail($deposit);
    });



    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/ecommerce/pay', function () {
        return view('pages/ecommerce/pay');
    })->name('pay');
    Route::post('pay', [CardController::class, 'store'])->name('store-card');

    // deposit
    //goto deposit controller under create method
    Route::get('/deposit/create', [DepositController::class, 'create'])->name('deposit.create');

    Route::post('/deposit/store', [DepositController::class, 'store'])->name('deposit.store');

    // create a route that shows all deposits for a user
    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit.index');




    // transfers
    Route::get('/transfer', [TransferController::class, 'create'])->name('transfer');
    Route::post('make-transfer', [TransferController::class, 'store'])->name('make-transfer');

    //admin section

    Route::get('/users', [UserController::class, 'index'])->name('admin-users');
    Route::get('/users/{user}', [UserController::class, 'edit'])->name('admin-user');

    Route::get('/users/{user}/sendmail', [UserController::class, 'sendmail'])->name('admin-user-sendmail');

    Route::post('/users/{user}/postmail', [UserController::class, 'postmail']);
    Route::get('/users/{user}/withdraw', [UserController::class, 'withdraw'])->name('user-withdraw');
    Route::put('/users/{user}/balance', [UserController::class, 'updatebalance']);
    Route::get('/users/{user}/atm', [AtmController::class, 'create'])->name('atm-request');


    Route::get('/deposits', [DepositController::class, 'index'])->name('admin-deposits');
    Route::get('/admin/transfers', [UserController::class, 'index'])->name('admin-transfers');

    //card routes
        // create route for showing all cards
        Route::get('/cards', [CardController::class, 'index'])->name('cards.index');

        // create routes for creating a new card
        Route::get('/cards/create', [CardController::class, 'create'])->name('cards.create');

        // create routes for Storing a card
        Route::post('/cards/store', [CardController::class, 'store'])->name('cards.store');

        // create route for showing a card
        Route::get('/cards/{card}', [CardController::class, 'show'])->name('cards.show');

    // upload deposit proof
        Route::post('/deposit-proof-upload/{card}', [CardController::class, 'uploadProof'])->name('deposit.proof');






    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/fintech', [DashboardController::class, 'fintech'])->name('fintech');
    Route::get('/ecommerce', [CustomerController::class, 'index'])->name('ecommerce');
    Route::get('/ecommerce/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/ecommerce/invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('/ecommerce/shop', function () {
        return view('pages/ecommerce/shop');
    })->name('shop');
    Route::get('/ecommerce/shop-2', function () {
        return view('pages/ecommerce/shop-2');
    })->name('shop-2');
    Route::get('/ecommerce/product', function () {
        return view('pages/ecommerce/product');
    })->name('product');
    Route::get('/ecommerce/cart', function () {
        return view('pages/ecommerce/cart');
    })->name('cart');
    Route::get('/ecommerce/cart-2', function () {
        return view('pages/ecommerce/cart-2');
    })->name('cart-2');
    Route::get('/ecommerce/cart-3', function () {
        return view('pages/ecommerce/cart-3');
    })->name('cart-3');
    // Route::get('/ecommerce/pay', function () {
    //     return view('pages/ecommerce/pay');
    // })->name('pay');
    Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns');
    Route::get('/community', [MemberController::class, 'indexTabs'])->name('community');
    Route::get('/community/users-tiles', [MemberController::class, 'indexTiles'])->name('users-tiles');
    Route::get('/community/profile', function () {
        return view('pages/community/profile');
    })->name('profile');
    Route::get('/community/feed', function () {
        return view('pages/community/feed');
    })->name('feed');
    Route::get('/community/forum', function () {
        return view('pages/community/forum');
    })->name('forum');
    Route::get('/community/forum-post', function () {
        return view('pages/community/forum-post');
    })->name('forum-post');
    Route::get('/community/meetups', function () {
        return view('pages/community/meetups');
    })->name('meetups');
    Route::get('/community/meetups-post', function () {
        return view('pages/community/meetups-post');
    })->name('meetups-post');

    Route::get('/finance/transactions', [TransactionController::class, 'index01'])->name('transactions');
    Route::get('/finance/transaction-details', [TransactionController::class, 'index02'])->name('transaction-details');
    Route::get('/job/job-listing', [JobController::class, 'index'])->name('job-listing');
    Route::get('/job/job-post', function () {
        return view('pages/job/job-post');
    })->name('job-post');
    Route::get('/job/company-profile', function () {
        return view('pages/job/company-profile');
    })->name('company-profile');
    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');
    Route::get('/tasks/kanban', function () {
        return view('pages/tasks/tasks-kanban');
    })->name('tasks-kanban');
    Route::get('/tasks/list', function () {
        return view('pages/tasks/tasks-list');
    })->name('tasks-list');
    Route::get('/inbox', function () {
        return view('pages/inbox');
    })->name('inbox');
    Route::get('/calendar', function () {
        return view('pages/calendar');
    })->name('calendar');
    Route::get('/settings/account', function () {
        return view('pages/settings/account');
    })->name('account');
    Route::get('/settings/notifications', function () {
        return view('pages/settings/notifications');
    })->name('notifications');
    Route::get('/settings/apps', function () {
        return view('pages/settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('pages/settings/plans');
    })->name('plans');
    Route::get('/settings/billing', function () {
        return view('pages/settings/billing');
    })->name('billing');
    Route::get('/settings/feedback', function () {
        return view('pages/settings/feedback');
    })->name('feedback');
    Route::get('/utility/changelog', function () {
        return view('pages/utility/changelog');
    })->name('changelog');
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap');
    Route::get('/utility/faqs', function () {
        return view('pages/utility/faqs');
    })->name('faqs');
    Route::get('/utility/empty-state', function () {
        return view('pages/utility/empty-state');
    })->name('empty-state');
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
    Route::get('/utility/knowledge-base', function () {
        return view('pages/utility/knowledge-base');
    })->name('knowledge-base');
    Route::get('/onboarding-01', function () {
        return view('pages/onboarding-01');
    })->name('onboarding-01');
    Route::get('/onboarding-02', function () {
        return view('pages/onboarding-02');
    })->name('onboarding-02');
    Route::get('/onboarding-03', function () {
        return view('pages/onboarding-03');
    })->name('onboarding-03');
    Route::get('/onboarding-04', function () {
        return view('pages/onboarding-04');
    })->name('onboarding-04');
    Route::get('/component/button', function () {
        return view('pages/component/button-page');
    })->name('button-page');
    Route::get('/component/form', function () {
        return view('pages/component/form-page');
    })->name('form-page');
    Route::get('/component/dropdown', function () {
        return view('pages/component/dropdown-page');
    })->name('dropdown-page');
    Route::get('/component/alert', function () {
        return view('pages/component/alert-page');
    })->name('alert-page');
    Route::get('/component', function () {
        return view('pages/component-page');
    })->name('modal-page');
    Route::get('/component/pagination', function () {
        return view('pages/component/pagination-page');
    })->name('pagination-page');
    Route::get('/component/tabs', function () {
        return view('pages/component/tabs-page');
    })->name('tabs-page');
    Route::get('/component/breadcrumb', function () {
        return view('pages/component/breadcrumb-page');
    })->name('breadcrumb-page');
    Route::get('/component/badge', function () {
        return view('pages/component/badge-page');
    })->name('badge-page');
    Route::get('/component/avatar', function () {
        return view('pages/component/avatar-page');
    })->name('avatar-page');
    Route::get('/component/tooltip', function () {
        return view('pages/component/tooltip-page');
    })->name('tooltip-page');
    Route::get('/component/accordion', function () {
        return view('pages/component/accordion-page');
    })->name('accordion-page');
    Route::get('/component/icons', function () {
        return view('pages/component/icons-page');
    })->name('icons-page');
    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
