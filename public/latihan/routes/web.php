<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// About
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Property Pages
Route::get('/property-list', function () {
    return view('pages.property-list');
})->name('property.list');

Route::get('/property-type', function () {
    return view('pages.property-type');
})->name('property.type');

Route::get('/property-agent', function () {
    return view('pages.property-agent');
})->name('property.agent');

// Testimonial
Route::get('/testimonial', function () {
    return view('pages.testimonial');
})->name('testimonial');

// 404 Error Page
Route::get('/404', function () {
    return view('errors.404');
})->name('error.404');

// Add Property Page
Route::get('/add-property', function () {
    return view('pages.add-property');
})->name('add.property');

