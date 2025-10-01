<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Public Routes
 * ----------------
 */

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');

Route::match(['get', 'post'], '/booking/payment/midtrans/notification', [
    FrontController::class,
    'payment_midtrans_notification',
])->name('front.payment_midtrans_notification');

/**
 * Middleware: auth
 * ----------------
 */
Route::middleware('auth')->group(function () {
    /**
     * Profile Management Routes
     */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Middleware: role:student
     * ------------------------
     */
    Route::middleware('role:student')->group(function () {
        /**
         * Subscription Routes
         * ----------------------
         */
        Route::get('/dashboard/subscriptions/', [DashboardController::class, 'subscription'])->name(
            'dashboard.subscriptions',
        );

        Route::get('/dashboard/subscriptions/{transaction}', [
            DashboardController::class,
            'subscription.details',
        ])->name('dashboard.subscriptions.details');

        /**
         * Course Routes
         * ----------------------
         */
        Route::get('/dashboard/courses/', [CourseController::class, 'index'])->name('dashboard');

        Route::get('/dashboard/course/{course:slug}', [CourseController::class, 'details'])->name(
            'dashboard.course.details',
        );

        Route::get('/dashboard/search/courses', [CourseController::class, 'search_courses'])->name(
            'dashboard.search.courses',
        );

        /**
         * Middleware: check.subscription
         * ------------------------------
         */
        Route::middleware(['check.subscription'])->group(function () {
            /**
             * Course Learning
             * ------------------------------
             */
            Route::get('/dashboard/join/{course:slug}', [CourseController::class, 'join'])->name(
                'dashboard.course.join',
            );

            Route::get('/dashboard/learning/{course:slug}/{courseSection}/{sectionContent}', [
                CourseController::class,
                'learning',
            ])->name('dashboard.course.learning');

            Route::get('/dashboard/learning/{course:slug}/finished', [
                CourseController::class,
                'learning_finished',
            ])->name('dashboard.course.learning.finished');
        });

        /**
         * Checkout & Payment Routes
         * ----------------------
         */
        Route::get('/checkout/success', [FrontController::class, 'checkout_success'])->name(
            'front.checkout.success',
        );

        Route::get('/checkout/{pricing}', [FrontController::class, 'checkout'])->name(
            'front.checkout',
        );

        Route::post('/booking/payment/midtrans', [
            FrontController::class,
            'paymentStoreMidtrans',
        ])->name('front.payment_store_midtrans');
    });
});

require __DIR__ . '/auth.php';
