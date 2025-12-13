<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/projects', function () {
    return view('home.project');
});

Route::get('/services', function () {
    return view('home.services');
});


Route::get('/contact', function () {
    return view('home.contact');
});


Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();

// User Auth Controller
Route::get('verify', [CustomAuthController::class, 'verify'])->name('verify');
Route::get('index', [CustomAuthController::class, 'index'])->name('index');
Route::get('welcome', [CustomAuthController::class, 'welcome'])->name('welcome');
Route::get('terms', [CustomAuthController::class, 'terms'])->name('terms');
Route::post('verify_captcha', [CustomAuthController::class, 'verifyCaptcha'])->name('verify.captcha');
Route::get('home', [CustomAuthController::class, 'home'])->middleware('user_auth')->name('home');
//user Dashboard Controller

Route::get('/my_account', [DashboardController::class, 'myAccount'])->middleware('user_auth')->name('my_account');
Route::get('summary', [DashboardController::class, 'summary'])->middleware('user_auth')->name('summary');
Route::get('profile', [DashboardController::class, 'profile'])->middleware('user_auth')->name('profile');
Route::get('account_settings', [DashboardController::class, 'accountSettings'])->middleware('user_auth')->name('account_settings');
Route::get('activity_log', [DashboardController::class, 'activityLog'])->middleware('user_auth')->name('activity_log');
Route::get('reset_password', [DashboardController::class, 'resetPassword'])->middleware('user_auth')->name('reset_password');
Route::get('transfer', [DashboardController::class, 'transfer'])->middleware('user_auth')->name('transfer');
Route::get('cross_border_transfer', [DashboardController::class, 'CrossTransfer'])->middleware('user_auth')->name('cross_border_transfer');
Route::get('check_deposit', [DashboardController::class, 'checkDeposit'])->middleware('user_auth')->name('check_deposit');
Route::post('check_deposit', [DashboardController::class, 'makeDeposit'])->middleware('user_auth')->name('make_deposit');
Route::get('pay_bills', [DashboardController::class, 'bills'])->middleware('user_auth')->name('bills');
Route::get('kyc', [DashboardController::class, 'kyc'])->middleware('user_auth')->name('kyc');
Route::get('kyc_form', [DashboardController::class, 'kycForm'])->middleware('user_auth')->name('kyc-form');
Route::match(['get', 'post'], 'upload_kyc', [DashboardController::class, 'uploadKyc'])->middleware('user_auth')->name('upload.kyc');
Route::get('loan', [DashboardController::class, 'loan'])->middleware('user_auth')->name('loan');
Route::post('loan', [DashboardController::class, 'requestLoan'])->middleware('user_auth')->name('request.loan');
Route::get('loan_history', [DashboardController::class, 'loanHistory'])->middleware('user_auth')->name('loan_history');
Route::get('support', [DashboardController::class, 'support'])->middleware('user_auth')->name('support');
Route::get('card', [DashboardController::class, 'card'])->middleware('user_auth')->name('card');
Route::get('authenticating', [DashboardController::class, 'authenticating'])->middleware('user_auth')->name('authenticating');
Route::get('vat_code', [DashboardController::class, 'vatCode'])->middleware('user_auth')->name('vat_code');
Route::match(['get', 'post'], 'ic_code', [DashboardController::class, 'icCode'])->middleware('user_auth')->name('ic.code');
Route::match(['get', 'post'], 'tin_code', [DashboardController::class, 'tinCode'])->middleware('user_auth')->name('tin.code');
Route::match(['get', 'post'], 'tac_code', [DashboardController::class, 'tacCode'])->middleware('user_auth')->name('tac.code');
Route::post('reset_password', [DashboardController::class, 'updatePassword'])->middleware('user_auth')->name('change.password');
Route::post('transfer_', [DashboardController::class, 'firstTransfer'])->middleware('user_auth')->name('first.transfer');
Route::post('second_step', [DashboardController::class, 'secondTransfer'])->middleware('user_auth')->name('second.transfer');
Route::get('logout', [DashboardController::class, 'logout'])->name('logout');
Route::get('cancel-transfer/{id}', [DashboardController::class, 'cancelTransfer'])->middleware('user_auth')->name('cancel.transfer');
Route::match(['get', 'post'], 'complete-transfer', [DashboardController::class, 'completeTransfer'])->middleware('user_auth')->name('complete.transfer');
Route::match(['get', 'post'], 'final-transfer', [DashboardController::class, 'finalTransfer'])->middleware('user_auth')->name('final.transfer');
Route::match(['get', 'post'], 'support-ticket', [DashboardController::class, 'supportTicket'])->middleware('user_auth')->name('support.ticket');
Route::match(['get', 'post'], 'delete-ticket/{ticket_id}', [DashboardController::class, 'deleteTicket'])->middleware('user_auth')->name('delete-ticket');

//Admin Dashboard Controller
Route::get('manage-users', [AdminController::class, 'manageUsers'])->middleware('user_auth')->name('manage.users');
Route::get('manage-transactions', [AdminController::class, 'manageTransactions'])->middleware('user_auth')->name('manage.transactions');
Route::get('manage-deposits', [AdminController::class, 'manageDeposits'])->middleware('user_auth')->name('manage.deposits');
Route::get('manage-loans', [AdminController::class, 'manageLoans'])->middleware('user_auth')->name('manage.loans');
Route::get('admin/dashboard', [AdminController::class, 'adminHome'])->middleware('user_auth')->name('admin.home');
Route::get('admin-change-password', [AdminController::class, 'adminChangePassword'])->middleware('user_auth')->name('admin.change.password');
Route::get('manage-transfer', [AdminController::class, 'usersTransfer'])->middleware('user_auth')->name('users.transfer');
Route::get('profile/{id}/', [AdminController::class, 'userProfile'])->middleware('user_auth')->name('user.profile');
Route::get('transfer_history/{id}/', [AdminController::class, 'transferHistory'])->middleware('user_auth')->name('transfer.history');
Route::get('deposit_history/{id}/', [AdminController::class, 'depositHistory'])->middleware('user_auth')->name('deposit.history');
Route::post('credit-debit', [AdminController::class, 'creditDebit'])->middleware('user_auth')->name('credit-debit');
Route::post('kyc-details/{id}/', [AdminController::class, 'KycDetails'])->middleware('user_auth')->name('kyc.details');
Route::get('manage.kyc', [AdminController::class, 'manageKyc'])->middleware('user_auth')->name('manage.kyc');
Route::get('accept-kyc/{id}/', [AdminController::class, 'acceptKyc'])->middleware('user_auth');
Route::get('reject-kyc/{id}/', [AdminController::class, 'rejectKyc'])->middleware('user_auth');
Route::match(['get', 'post'], 'send-mail', [AdminController::class, 'sendMail'])->middleware('user_auth')->name('send.mail');
Route::get('{user}/a', [AdminController::class, 'userVerification'])->middleware('user_auth')->name('user.a');
Route::get('{user}/suspension', [AdminController::class, 'userSuspension'])->middleware('user_auth')->name('user.suspension');
Route::get('clear-account/{id}', [AdminController::class, 'clearAccount'])->middleware('user_auth')->name('clear.account');
Route::get('delete-user/{user}', [AdminController::class, 'deleteUser'])->middleware('user_auth')->name('delete.user');
Route::match(['get', 'post'], 'approve-transfer/{id}', [AdminController::class, 'approveTransfer'])->middleware('user_auth')->name('approve.transfer');
Route::match(['get', 'post'], 'approved-transfer/{id}', [AdminController::class, 'approvedTransfer'])->middleware('user_auth')->name('approved.transfer');
Route::match(['get', 'post'], 'decline-transfer/{id}', [AdminController::class, 'declineTransfer'])->middleware('user_auth')->name('decline.transfer');
Route::match(['get', 'post'], 'declined-transfer/{id}', [AdminController::class, 'declinedTransfer'])->middleware('user_auth')->name('declined.transfer');
Route::match(['get', 'post'], 'approve-transaction/{id}', [AdminController::class, 'approveTransaction'])->middleware('user_auth')->name('approve.transaction');
Route::match(['get', 'post'], 'approved-transaction/{id}', [AdminController::class, 'approvedTransaction'])->middleware('user_auth')->name('approved.transaction');
Route::match(['get', 'post'], 'decline-transaction/{id}', [AdminController::class, 'declineTransaction'])->middleware('user_auth')->name('decline.transaction');
Route::match(['get', 'post'], 'declined-transaction/{id}', [AdminController::class, 'declinedTransaction'])->middleware('user_auth')->name('declined.transaction');
Route::match(['get', 'post'], 'ic-code', [AdminController::class, 'icCode'])->middleware('user_auth')->name('ic-code');
Route::match(['get', 'post'], 'tin-code', [AdminController::class, 'tinCode'])->middleware('user_auth')->name('tin-code');
Route::match(['get', 'post'], 'tac-code', [AdminController::class, 'tacCode'])->middleware('user_auth')->name('tac-code');
Route::match(['get', 'post'], 'approve-loan/{id}', [AdminController::class, 'approveLoan'])->middleware('user_auth')->name('approve.loan');
Route::match(['get', 'post'], 'decline-loan/{id}', [AdminController::class, 'declineLoan'])->middleware('user_auth')->name('decline.loan');
Route::get('manage-user-transfers/{id}', [AdminController::class, 'manageUserTransfers'])->middleware('user_auth')->name('manage.user.transfers');
Route::get('manage-user-transactions/{id}', [AdminController::class, 'manageUserTransactions'])->middleware('user_auth')->name('manage.user.transactions');
Route::get('manage-user-loans/{id}', [AdminController::class, 'manageUserLoans'])->middleware('user_auth')->name('manage.user.loans');
Route::get('manage-user-deposits/{id}', [AdminController::class, 'manageUserDeposits'])->middleware('user_auth')->name('manage.user.deposits');

Route::get('/{user}/impersonate',  [AdminController::class, 'impersonate'])->name('users.impersonate');
Route::get('/leave-impersonate',  [AdminController::class, 'leaveImpersonate'])->name('users.leave-impersonate');
