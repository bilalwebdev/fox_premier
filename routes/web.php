<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ListingTypeController;
use App\Http\Controllers\MediaManagerController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ReModelController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\UniController;
use App\Http\Controllers\Webmail;
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

Route::get('test', [TestController::class, 'test']);

Route::middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::get('profile', [AdminController::class, 'editProfile'])->name('edit.profile');

    Route::controller(ModelsController::class)->group(function () {
        Route::get('all-listings', 'manageModel')->name('manage.model');
        Route::post('create/list', 'createModel')->name('model.create');
        Route::get('listing/{model:slug}', 'editModel')->name('model.edit');
        Route::get('gallery/listing/{model:slug}', 'modelGallery')->name('model.gallery');
        Route::get('listing/del/{model:slug}', 'deleteModel')->name('model.delete');
    });

    Route::controller(ReModelController::class)->group(function () {
        Route::get('re-models', 'manageReModel')->name('manage.remodel');
        Route::post('create/re-model', 'createReModel')->name('remodel.create');
        Route::get('re-model/{remodel:slug}', 'editReModel')->name('remodel.edit');
        // Route::get('listing/del/{remodel:slug}', 'deleteReModel')->name('remodel.delete');
    });
    //status
    Route::controller(StatusController::class)->group(
        function () {
            Route::get('listing-status', 'status')->name('listing.status');
        }
    );
    //type
    Route::controller(SiteSettingController::class)->group(
        function () {
            Route::get('site-settings', 'siteSetting')->name('site-settings');
        }
    );
    //site-settings
    Route::controller(ListingTypeController::class)->group(
        function () {
            Route::get('listing-type', 'type')->name('listing.type');
        }
    );
    //testimonials
    Route::controller(TestimonialsController::class)->group(function () {
        Route::get('create/testimonials', 'createTestimonial')->name('create.testimonial');
        Route::get('testimonials', 'manageTestimonial')->name('manage.testimonial');
        Route::get('tesimonial/edit/{id}', 'editTestimonial')->name('testimonial.edit');
        // Route::get('listing/del/{remodel:slug}', 'deleteReModel')->name('remodel.delete');
    });
    //media-manager
    Route::controller(MediaManagerController::class)->group(function () {
        Route::get('media', 'showMedia')->name('media.index');
    });

    Route::post('/pre-signed-url', [UniController::class, 'presignedUploadUrl'])->name('preurl');
});
//frontend
Route::controller(FrontController::class)->group(
    function () {
        Route::get('/', 'index')->name('front.index');
        Route::get('/listings', 'allListings')->name('front.all.listings');
      //  Route::get('/lots-of-sales', 'lotsOfSales')->name('front.lots.sales');
        Route::get('/listing-detail/{model:slug}', 'listingDetail')->name('front.listing.detail');
        Route::get('/contact-us', 'contactUs')->name('front.contact');
        Route::get('/remodels', 'reModels')->name('front.remodel');
        Route::get('/remodel-detail/{remodel:slug}', 'remodelDetail')->name('front.remodel.detail');
        Route::get('building-process','buildingProcess')->name('front.buildingprocess');
    }

);

Route::controller(Webmail::class)->group(
    function () {
        Route::post('/send-email', 'sendEmail')->name('send.email');
    }
);

require __DIR__ . '/auth.php';
