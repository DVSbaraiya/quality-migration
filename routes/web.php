<?php

use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\coachingcontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\teamcontroller;
use App\Http\Controllers\countrycontroller;
use App\Http\Controllers\errorcontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\faqcontroller;
use App\Http\Controllers\NewsController;



use Illuminate\Support\Facades\Route;

Route::get('/', [indexcontroller::class, 'index']);

Route::get('/contact', [contactcontroller::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');


Route::get('/coaching', [coachingcontroller::class, 'coaching'])->name('coaching');
Route::get('/pte-coaching', [coachingcontroller::class, 'ptecoaching'])->name('ptecoaching');
Route::get('/ielts-coaching', [coachingcontroller::class, 'ieltscoaching'])->name('ieltscoaching');
Route::get('/tofel-coaching', [coachingcontroller::class, 'tofelcoaching'])->name('tofelcoaching');
Route::get('/naati-coaching', [coachingcontroller::class, 'naaticoaching'])->name('naaticoaching');
Route::get('/coaching-details', [coachingcontroller::class, 'coachingdetails'])->name('coachingdetails');

Route::get('privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('pathway', function () {
    return view('pages.pathway');
})->name('pathway');

Route::get('student-visa', function () {
    return view('pages.student-visa');
})->name('student-visa');

Route::get('pte', function () {
    return view('pages.pte');
})->name('pte');

Route::get('naati', function () {
    return view('pages.naati');
})->name('naati');

Route::get('professional', function () {
    return view('pages.professional');
})->name('professional');

Route::get('early-childhood-teacher', function () {
    return view('pages.early');
})->name('early');

Route::get('trade-occupations', function () {
    return view('pages.trade');
})->name('trade');

Route::get('it', function () {
    return view('pages.it');
})->name('it');

Route::get('medical-laboratory-science', function () {
    return view('pages.medical');
})->name('medical');

Route::get('social-work', function () {
    return view('pages.social');
})->name('social.work');

Route::get('engineering', function () {
    return view('pages.engineering');
})->name('engineering');

Route::get('nursing', function () {
    return view('pages.nursing');
})->name('nursing');

Route::get('gsm', function () {
    return view('pages.gsm');
})->name('gsm');


Route::get('temporary-visa', function () {
    return view('pages.temporary');
})->name('temporary');


Route::get('family-and-partner', function () {
    return view('pages.family');
})->name('family');

Route::get('employer-sponsored-visa', function () {
    return view('pages.employer');
})->name('employer');

Route::get('business', function () {
    return view('pages.business');
})->name('business');


Route::get('working-holiday-visa', function () {
    return view('pages.holiday');
})->name('holiday');


Route::get('tourist-visa', function () {
    return view('pages.tourist');
})->name('tourist');

Route::get('protection-visa', function () {
    return view('pages.protection');
})->name('protection');

Route::get('aat', function () {
    return view('pages.aat');
})->name('aat');

Route::get('review', function () {
    return view('pages.review');
})->name('review');


Route::get('/blogs', [NewsController::class, 'news'])->name('blogs');
Route::get('/blogs/{slug}', [NewsController::class, 'show'])->name('blog.details');

Route::get('/service-details', [servicescontroller::class, 'servicedetails'])->name('servicedetails');
Route::get('/service', [servicescontroller::class, 'service'])->name('service');


Route::get('/team-details', [teamcontroller::class, 'teamdetails'])->name('teamdetails');
Route::get('/team', [teamcontroller::class, 'team'])->name('team');



Route::get('/country', [countrycontroller::class, 'country'])->name('country');
Route::get('/country-details', [countrycontroller::class, 'countrydetails'])->name('countrydetails');


Route::get('/404', [errorcontroller::class, 'error'])->name('error');


Route::get('/about', [aboutcontroller::class, 'about'])->name('about');


Route::get('/faq', [faqcontroller::class, 'faq'])->name('faq');
