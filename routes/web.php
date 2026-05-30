<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\TopperStudentsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\UpcomingBatchesController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\AnswerKeyController;




// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/faculties', [FacultyController::class, 'index'])->name('faculties');
Route::get('/topper-students', [TopperStudentsController::class, 'index'])->name('toppers');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::get('/upcoming-batches', [UpcomingBatchesController::class, 'index'])->name('upcoming-batches');
Route::get('/answer-keys', [AnswerKeyController::class, 'answerKeys'])->name('answer.keys');



// route for submitting newsletter form in the DB
Route::post('/newsletter/store', [HomeController::class, 'StoreNewsletterData'])->name('newsletter.store');

// route for store the contact us form data
Route::post('/contact/store', [ContactUsController::class, 'storeContactFormData'])->name('contact.store');


// route for to store service enquiry form
Route::post('/send-enquiry', [EnquiryController::class, 'storeEnquiryFormData'])->name('enquiry.store');

// route to store enrollment form data to the DB
Route::post('/enroll', [EnrollmentController::class, 'storeEnrollmentFormData'])->name('enroll.store');








